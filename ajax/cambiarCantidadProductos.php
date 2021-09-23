<?php   
    $productos = unserialize($_COOKIE['productos']);
    foreach($productos as $key => $value){
        if($_REQUEST['id'] == $value['id']){
                if($_REQUEST['tipo']=="menos" && $_REQUEST['cant'] > 1){   //Evita que se resten productos por debajo de 0 unidades
                    
                    $productos[$key]['cantidad']--;
                }
                
                if($_REQUEST['tipo']=="mas" && $_REQUEST['cant'] <= $productos[$key]['maximo']){   //Implementar que se pueda sumar mas productos encima de la existencia o stock
                    
                    $productos[$key]['cantidad']++;
                }
            }    
        }
    setcookie("productos", serialize($productos));
    echo json_encode($productos);
?>