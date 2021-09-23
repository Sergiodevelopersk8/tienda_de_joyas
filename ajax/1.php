<?php

require_once('Log.class.php');

$Log= new Log();
//$Log->Write('test.txt','prueba de log');
echo $Log->Read('test.txt');

?>