<?php
            $productos= unserialize($_COOKIE['productos']??'');
            if(is_array($productos)==false){
                $productos=array();
            };
            $existeProducto=false;
            foreach ($productos as $key => $value) {
                if($value['id']==$_POST['id']){
                    $productos[$key]['cantidad']=$productos[$key]['cantidad'] + $_POST['cantidad'];
                    $productos[$key]['precio']=$productos[$key]['precio'] + $_POST['precio'];
                    $productos[$key]['maximo']=$productos[$key]['maximo'] - $_POST['cantidad'];
                    $existeProducto = true;
        
                }
            }
            if($existeProducto==false){
                $nuevoProducto=array(
                    "id"=>$_POST['id'],
                    "foto"=>$_POST['foto'],
                    "nombre"=>$_POST['nombre'],
                    "precio"=>$_POST['precio'],
                    "maximo"=>$_POST['maximo'] - 1,
                    "cantidad"=>$_POST['cantidad'],
                    "subtotal"=>$_POST['precio']
                );
                array_push($productos, $nuevoProducto);
            }
            setcookie("productos",serialize($productos));
            echo json_encode($productos);


?>