<?php

if($_SERVER['HTTP_X_REQUESTED_WITH'] && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    include '../bd/config.php';
    include '../bd/class_mysql.php';
   

    $opcion = MysqlQuery::RequestPost('opcion');
    $resultado = 0;

    switch ($opcion) {
        case '1':
            parse_str($_POST['formulario'], $salida);
            $nombre = MysqlQuery::limpiarCadena($salida['nombre']);
            $apellidos = MysqlQuery::limpiarCadena($salida['apellidos']);
            $email = MysqlQuery::limpiarCadena($salida['email']);
            $password = md5(MysqlQuery::limpiarCadena($salida['password']));
            $telefono = 0000000000;
            $foto = 'default.jpg';
            $estatus = 1;
            $idDirecion = 1;
            $idCC = 1;
            $idRol = 3;

            if(MysqlQuery::Guardar("usuarios", "nombreUs, apellidosUs, emailUs, telefonoUs, contrasenaUs, fotoUs, estatus, idDireccion, idCreditCards, idRolUsuario", "'$nombre', '$apellidos', '$email', '$telefono', '$password', '$foto', '$estatus', '$idDirecion', '$idCC', '$idRol'")){
                $resultado = 1;
            }else{
                $resultado = 0;
            }
            break;
        
        default:
     
            # code...
            break;
    }

    echo $resultado;

}
?>