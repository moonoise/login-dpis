<?php
require_once __DIR__ . '/vendor/autoload.php';
use Dpis\UserOnline;
$userOnline = new userOnline();

//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
if (!isset($_SESSION[__USERNAME__])) {
    header("location:login.php");
    
}else {
    
    $_SESSION[__USERONLINE__] = $userOnline->usersOnline();
    $userOnline->activeTime($login_timeout,$_SESSION[__SESSION_TIME_LIFE__]);
}
