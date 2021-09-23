<?php
 
 require_once('Log.class.php');
 

 function vitacoracategorias($mensaje)
 {
 
  $Log= new Log();
  $Log->Write('addcategoria.txt',$mensaje);
  echo $Log->Read('addcategoria.txt');
   
   
 }


?>