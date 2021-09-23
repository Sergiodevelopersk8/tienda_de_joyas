<?php

if($_SERVER['HTTP_X_REQUESTED_WITH'] && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

  include '../bd/config.php';
  include '../bd/class_mysql.php';
  require_once('Log.class.php');
$mensaje="no se encontro el usuario";
$contador=0;
    session_start();

    $email = MysqlQuery::RequestPost('email');
    $contrasena = md5(MysqlQuery::RequestPost('pass'));

    $query = Mysql::consulta("SELECT us.idUsuario, us.nombreUs, us.apellidosUs, us.emailUs, 
    us.telefonoUs, us.contrasenaUs, us.fotoUs, us.estatus, dir.idDireccion, dir.ciudad, dir.cPostal, dir.colonia, 
    dir.calle, dir.entreCalle, dir.entreCallee, dir.numeroCasa, dir.descripcion,rou.idRolUsuario, cc.idCreditCards, cc.nombreUser, cc.numCC FROM usuarios AS us 
    INNER JOIN direccion AS dir ON us.idDireccion = dir.idDireccion
     INNER JOIN rolusuario as rou on us.idRolUsuario=rou.idRolUsuario
    INNER JOIN creditcards AS cc ON us.idCreditCards = cc.idCreditCards WHERE us.emailUs = '".$email."' AND us.contrasenaUs = '".$contrasena."' AND us.estatus = 1");
    $result = mysqli_num_rows($query);

    $output = 0;

    if($result > 0){
    while($row = mysqli_fetch_array($query))
    {  
      $_SESSION["active"] = true;
      $_SESSION["idUsuario"] = $row["idUsuario"];
      $_SESSION["nombreUs"] = $row["nombreUs"];
      $_SESSION["apellidosUs"] = $row["apellidosUs"];
      $_SESSION["emailUs"] = $row["emailUs"];
      $_SESSION["telefonoUs"] = $row["telefonoUs"];
      $_SESSION["contrasenaUs"] = $row["contrasenaUs"];
      $_SESSION["fotoUs"] = $row["fotoUs"];
      $_SESSION["estatus"] = $row["estatus"];
      $_SESSION["idDireccion"] = $row["idDireccion"];
      $_SESSION["ciudad"] = $row["ciudad"];
      $_SESSION["colonia"] = $row["colonia"];
      $_SESSION["cPostal"] = $row["cPostal"];
      $_SESSION["calle"] = $row["calle"];
      $_SESSION["entreCalle"] = $row["entreCalle"];
      $_SESSION["entreCallee"] = $row["entreCallee"];
      $_SESSION["numeroCasa"] = $row["numeroCasa"];
      $_SESSION["descripcion"] = $row["descripcion"];
      $_SESSION["idCreditCards"] = $row["idCreditCards"];
      $_SESSION["nombreUser"] = $row["nombreUser"];
      $_SESSION["numCC"] = $row["numCC"];
     $_SESSION["idRolUsuario"] = $row["idRolUsuario"];
    }
    //Enviar correo de inicio de sesión

    }
    else
    {
     
$contador++;
$total=$mensaje.' '.'el usuario '.' '.$email.' '.'esta intentando loguerse';
$Log= new Log();
$Log->Write('errordeusuarios.txt',$total);
echo $Log->Read('errordeusuarios.txt');
    $output = 1;
    session_destroy();
    }

    
    echo $output;
}
?>