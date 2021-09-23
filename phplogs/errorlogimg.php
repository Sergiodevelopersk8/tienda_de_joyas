<?php
  ini_set('display_errors',0);
  ini_set('log_errors',1);
  ini_set('error_log',dirname(__FILE__). '/errorfotos,txt');
  error_reporting(E_ALL);


  header("location:../admi/fotoindex.php");

?>