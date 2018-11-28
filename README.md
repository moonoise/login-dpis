# login-dpis

<h4>ติดตั้ง</h4> 
#ใช้ Composer หรือ ดาวน์โหลดไปติดตั้งก็ได้  แต่ต้อง รันคำสั่ง npm install เพื่อติดตั้ง Template By SB Admin v2.0  ตัวอย่างการใช้ template หาดูได้จาก 
https://blackrockdigital.github.io/startbootstrap-sb-admin-2/pages/index.html 

<br>
<code>$ git clone https://github.com/moonoise/login-dpis.git </code>

<code>$ npm install </code>

<h5>ไฟล์ logindpis.sql สร้าง database </h5>
<p>ไฟล์ confdb.php กำหนดที่ตั้งฐานข้อมูล User Pass </p>


  <code>date_default_timezone_set("Asia/bangkok"); </code><br>
  <code>$ociUser = '';  // user Database Orcle </code> <br>
  <code>$ociPass = ''; // password Database Orcle </code> <br>
  <code>$ociHost = '';  //hostname or ip </code> <br>
  <code>$ociTNS = ''; //  SID  </code> <br>
  <br>
  <code>$db_host = "localhost"; // Host name </code> <br>
  <code>$db_username = "root"; // Mysql username </code> <br>
  <code>$db_password = ""; // Mysql password </code> <br>
  <code>$db_name = "logindpis"; // Database name </code> <br>

<p>ใครมีสามารถ Login เข้าใด้ให้ใส่ user ไว้ใน members </p>

Technologies used
  PHP version =< 5.6  
    pdo_mysql  extension required
    MySQL or MariaDB
    
    
