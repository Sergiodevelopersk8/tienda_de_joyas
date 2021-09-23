<?php 
session_start();
?>
<!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light" id="menuu">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php?modulo=inicio"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php?modulo=inicio">Inicio</a></li>
              <li class="nav-item submenu dropdown">
                <a href="productos.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Productos</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="index.php?modulo=productosMujeres">Mujeres</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?modulo=productosHombres">Hombres</a></li>
                  <li class="nav-item"><a class="nav-link" href="index.php?modulo=productos">Todos</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="index.php?modulo=ofertas">Ofertas</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php?modulo=contacto">Contacto</a></li>
            </ul>
            <ul class="nav-shop">
              <li class="nav-item"><a class="nav-link" href="index.php?modulo=carrito" id="verCarrito"><button><i id="iconoCarrito" class="ti-shopping-cart"></i><span class="nav-shop__circle" id="badgeProducto"></span></button></a> </li>
            </ul>  
            <ul class="">
            <?php if(isset($_SESSION['active'])){?>
              <li class="nav-item"><?php echo $_SESSION['nombreUs']?></li>
            <?php } else{ ?>
              <li class="nav-item">Invitado</li> 
              <?php } ?>                      
            </ul>
            <ul class="navbar-nav menu_nav">
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">
                      <img src="upload/default.jpg" width="50" height="50" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                      <?php if(isset($_SESSION['active'])){?>
                      <!--este es parte de mi codigo es poco trabajo pero honesto-->
                      <?php if($_SESSION['idRolUsuario']==1){
                        ?>
                      <li class="nav-item"><a class="nav nav-link" href="admi/dashadmi.php">panel de admi</a></li>
                   
                   
                    <?php } 
                   if($_SESSION['idRolUsuario']==2){
                    ?>
                  <li class="nav-item"><a class="nav nav-link" href="almacenista/dashalmacen.php">panel de almacenista</a></li>
               
               
                <?php } 
                                                         
                    else{?>
                    <!---aqui acaba jajajaj--->
                      <li class="nav-item"><a class="nav nav-link" href="perfil.php.">Mi perfil</a></li>
                      <?php } ?>                  
                      <li class="nav-item"><a class="nav-link" href="index.php?modulo=misolicitudes"><i class="fa fa-o"></i><span class="badge badge-info"></span> Mis compras</a></li>
                      <li class="nav-item"><a class="nav-link" href="ajax/logout.php">Cerrar sesión</a></li>
                     
                      <?php } else{ ?>
                      <li class="nav-item"><a class="nav-link" href="index.php?modulo=login">Iniciar sesión</a></li>
                      <li class="nav-item"><a class="nav-link" href="index.php?modulo=registrarse">Registrarse</a></li>
                      <?php } ?>   
                      <nav class="cd-main-nav js-main-nav"></nav>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================--> 