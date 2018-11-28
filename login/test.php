<?php
require __DIR__ . '/vendor/autoload.php';
use Dpis\OciConn;

$ociDb = new OciConn();

$myusername = "__"; // query user password 
$ociSQL = "SELECT 
        USER_DETAIL.USERNAME,
        USER_DETAIL.PASSWORD 
        FROM USER_DETAIL
         where USER_DETAIL.USERNAME = :username
         ";

        $stid = oci_parse($ociDb->ociConn,$ociSQL);
            
        oci_bind_by_name($stid,":username",$myusername);
        oci_execute($stid);
        oci_fetch_all($stid, $res,null,null,OCI_FETCHSTATEMENT_BY_ROW+OCI_ASSOC);
        $success['result'] = $res;
        oci_free_statement($stid);

        oci_close($ociDb->ociConn);
        // var_dump($res);

        echo json_encode($res);

?>