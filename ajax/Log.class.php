<?php

class Log
{

public function Write($strFileName, $strData)
{

  if(!is_writable($strFileName))
  die('Change your CHMOD permissions to'. $strFileName);

    $handle= fopen($strFileName, 'a+');
fwrite($handle, "\r". $strData);
fclose($handle);


}

public function Read($strFileName)
{

   $handle = fopen($strFileName, 'r');

   return file_get_contents($strFileName);

}


}

?>