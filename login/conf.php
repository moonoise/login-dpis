<?php

//set Active time out
$login_timeout = 4*3600;    // จำนวนเวลาที่ให้อยู่ในระบบ  ถ้ายัง Active อยู่ก็จะเริ่มนับใหม่ 

//SESSION 
$session_prefix = 'dpis_';  //ถ้ามีโปรแกรมอยู่ใน โดเมนเดียวกัน ควรเปลี่ยน
define("__USERNAME__", $session_prefix."username");
define("__GROUP_ID__", $session_prefix."group_id");
define("__PER_CARDNO__", $session_prefix."per_cardno");
define("__PER_NAME__",$session_prefix."per_name");
define("__PER_SURNAME__",$session_prefix."per_surname");
define("__PER_TYPE__",$session_prefix."per_type");
define("__PER_PICTURE__",$session_prefix."per_picture");

define("__CODE__",$session_prefix."code");
define("__NAME_TH__",$session_prefix."name_th");
define("__ORG_ID__",$session_prefix."org_id");
define("__SESSION_TIME_LIFE__",$session_prefix."session_time_life");
define("__USERONLINE__",$session_prefix."useronline"); //จำนวนผู้เข้าระบบ

//path รูปภาพใน dpis 
define("__PATH_PICTURE__","http://dpis.rid.go.th/attachment/pic_personal/");  // ใส่ / ไว้้ท้ายด้วย