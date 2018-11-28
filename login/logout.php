<?php
session_start();
include_once "conf.php";
require __DIR__ . '/vendor/autoload.php';
use Dpis\UserOnline;
$userOnline = new userOnline();

$userOnline->logout();

header('Location: ' . 'index.php');
die();

