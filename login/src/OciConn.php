<?php
namespace Dpis;
    
    class OciConn 
    {
        public $ociUser,$ociPass,$ociHost,$ociTNS;
        public $ociConn;
        public function __construct() {

            $up_dir = realpath(__DIR__ . '/..');
            if (file_exists('confdb.php')) {
                require_once 'confdb.php';
            } else {
                require_once $up_dir.'/confdb.php';
            }
            $this->ociConn = oci_connect($ociUser , $ociPass, $ociHost . "/" . $ociTNS , 'AL32UTF8');
            if (!$this->ociConn) {
                $e = oci_error();
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }
            return $this->ociConn;
        }
        
    }