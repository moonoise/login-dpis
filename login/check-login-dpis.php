<?php
require __DIR__ . '/vendor/autoload.php';
include_once "conf.php";

use Dpis\OciConn;
use DpisLogin\SqlConn;
use Dpis\DpisQuery;

$ociDb = new OciConn();
$sqlDb = new SqlConn();
$dpis = new DpisQuery();

$success = array();
$success['result'] = array();

// Define $myusername and $mypassword
$username = $_POST['myusername'];
$password = $_POST['mypassword'];

$pwMd5 = md5($password);

// To protect MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);

$s = "SELECT * FROM members WHERE `username` = :username";
$stmStatus = $sqlDb->conn->prepare($s);
$stmStatus->bindParam(":username",$username);
$stmStatus->execute();
$resultStatus = $stmStatus->fetchAll(PDO::FETCH_ASSOC);
$c = $stmStatus->rowCount();

if ($c === 1 ) {

    $ociSQL = "SELECT
        USER_DETAIL.USERNAME,
        USER_DETAIL.GROUP_ID,
        PER_PERSONAL.PER_CARDNO,
        PER_PERSONAL.PER_NAME,
        PER_PERSONAL.PER_SURNAME,
        PER_PERSONAL.PER_TYPE,
        (per_personalpic.per_cardno || '-' || LPAD(per_personalpic.per_picseq,3,'0')  || '.jpg') as PER_PICTURE ,
        USER_GROUP.CODE,
        USER_GROUP.NAME_TH,
        USER_GROUP.ORG_ID
        FROM USER_DETAIL
        LEFT JOIN PER_PERSONAL ON PER_PERSONAL.PER_CARDNO = USER_DETAIL.USERNAME
        LEFT JOIN per_personalpic
        ON PER_PERSONAL.per_id = per_personalpic.per_id 
        AND per_personalpic.pic_show = 1
        LEFT JOIN USER_GROUP ON USER_GROUP.ID = USER_DETAIL.GROUP_ID
        WHERE USER_DETAIL.USERNAME = :username AND USER_DETAIL.PASSWORD = :pwMd5";

    $stid = oci_parse($ociDb->ociConn,$ociSQL);
    oci_bind_by_name($stid,":username",$username);
    oci_bind_by_name($stid,":pwMd5",$pwMd5);
    oci_execute($stid);

    $nrows = oci_fetch_all($stid, $result, null, null, OCI_FETCHSTATEMENT_BY_ROW+OCI_ASSOC);

    if($nrows == 1){
        session_start();
        $datetimeNow = date("Y-m-d H:i:s");

        $_SESSION[__USERNAME__] = $result[0]['USERNAME'];
        $_SESSION[__GROUP_ID__] = $result[0]['GROUP_ID'];
        $_SESSION[__PER_CARDNO__] = $result[0]['PER_CARDNO'];
        $_SESSION[__PER_NAME__] = $result[0]['PER_NAME'];
        $_SESSION[__PER_SURNAME__] = $result[0]['PER_SURNAME'];
        $_SESSION[__PER_TYPE__] = $result[0]['PER_TYPE'];
        $_SESSION[__PER_PICTURE__] = $result[0]['PER_PICTURE'];
        $_SESSION[__CODE__] = $result[0]['CODE'];
        $_SESSION[__NAME_TH__] = $result[0]['NAME_TH'];
        $_SESSION[__ORG_ID__] = $result[0]['ORG_ID'];
        $_SESSION[__SESSION_TIME_LIFE__] = $datetimeNow;

        $success['success'] = true;
        $success['result'] = $result;
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
    }else {
        $success['success'] = false;
        $success['msg'] = "User or Password fail.";
    }

    oci_close($ociDb->ociConn);


}else{
    $success['success'] = null;
    $success['msg'] = "not found user.";
}

echo json_encode($success);


?>