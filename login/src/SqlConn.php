<?php
namespace DpisLogin;
use \PDO;
class SqlConn 
{   
    
    public $conn;
    public $db_host,$db_name,$db_username,$db_password;
    public function __construct()
    {
        $up_dir = realpath(__DIR__ . '/..');
            if (file_exists('confdb.php')) {
                require 'confdb.php';
            } else {
                require $up_dir.'/confdb.php';
            }

        try {
            // Connect to server and select database.
            $this->conn = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8', $db_username, $db_password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            die('Database connection error');
        }
    }
}

