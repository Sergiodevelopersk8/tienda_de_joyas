	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Pago del producto</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Pago del producto</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        <div class="returning_customer">
            <?php if(!isset($_SESSION['active'])){?>
            <div class="check_title" style="border: 3px solid red;">
                <h2>Aún no has iniciado sesión:  <a href="index.php?modulo=login">Haga clic para ingresar</a></h2>
            </div>
            <?php }?>
            </br>
            <?php if( isset($_SESSION['active']) && !isset($_SESSION['idDireccion'])){?>
            <div class="check_title" id="noDirección" style="border: 3px solid red;">
                <h2>Al parecer no tienes una dirección de entrega registrada <a href="perfil.php">Haga clic para registrar una dirección</a></h2>
            </div>
            <?php } if ( isset($_SESSION['active']) && isset($_SESSION['idDireccion'])) {?>
            <div class="check_title" id="noDirección" style="border: 2px solid blue;">
                <h2>Cambiar datos de dirección de envio o de tarjeta: <a href="perfil.php">Haga clic aqui</a></h2>
            </div>
            <?php }?>
        </div></br>
        <div class="billing_details">
            <div class="row">
            <div class="col-lg-8">
            </div>
                <?php if(isset($_SESSION['idDireccion'])){?>
                <div class="col-lg-8" id="siDirección">
                    <h3>Dirección de envio</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['nombreUs'].'&nbsp;'.$_SESSION['apellidosUs'];?>" placeholder="Nombre completa de la persona que recibe" id="nomRecibe" name="add1">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['ciudad'];?>" placeholder="Ciudad" id="ciudad" name="name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['cPostal'];?>" placeholder="Código Postal / ZIP" id="codPos" name="name">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['colonia'];?>" placeholder="Colonia" id="colonia" name="company" placeholder="Company name">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['calle'];?>" placeholder="Calle principal" id="calleP" name="company" placeholder="Company name">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['entreCalle'];?>" placeholder="Entrecalle #1" id="entrecalle" name="number">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['entreCallee'];?>" placeholder="Entrecalle #2" id="entrecallee" name="compemailany">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['numeroCasa'];?>" placeholder="Número de casa" id="numCasa" name="number">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['telefonoUs'];?>" placeholder="Número de teléfono de quien recibe" id="numTel" name="compemailany">
                        </div>
                        <div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <h3>Detalles del hogar</h3>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Escribe una pequeña descripción del hogar (color, tamaño, maerial de construcción) ..."><?php echo $_SESSION['descripcion'];?></textarea>
                        </div>
                        <div class="col-md-12 form-group p_star">
                        </br><div class="">
                                <h3>Tarjeta de crédito</h3>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['nombreUs'].'&nbsp;'.$_SESSION['apellidosUs'];?>" placeholder="Nombre completa de la persona que recibe" id="nomRecibe" name="add1">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['numCC'];?>" placeholder="Número de tarjeta de crédito" id="numCCP" name="numCCP">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['numeroCasa'];?>" placeholder="Número de casa" id="numCasa" name="number">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" value="<?php echo $_SESSION['telefonoUs'];?>" placeholder="Número de teléfono de quien recibe" id="numTel" name="compemailany">
                            </div>
                        </div>
                    </form>
                </div>
                <?php }?>

                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#"><h4>Product <span>Total</span></h4></a></li>
                            <li><a href="#">Fresh Blackberry <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Tomatoes <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Fresh Brocoli <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                            <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                            <li><a href="#">Total <span>$2210.00</span></a></li>
                        </ul>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector" checked>
                                <label for="f-option6">Targeta de crédito </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Puede pagar con su tarjeta de crédito o débito.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">He leido y acepto los </label>
                            <a href="#" data-toggle="modal" data-target="#exampleModalLong">terminos y condiciones*</a>
                        </div>
                        <div class="text-center">
                          <?php if(isset($_SESSION['active'])){?>
                          <a class="button button-paypal" href="index.php?modulo=confirmarPago">Proceder al pago</a>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

  
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" style="z-index: 10000;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Términos y Condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse ad quas exercitationem. Magnam perspiciatis corporis, neque odio fuga nisi, aliquam praesentium dolore doloribus eligendi quo minus facilis qui fugiat.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse ad quas exercitationem. Magnam perspiciatis corporis, neque odio fuga nisi, aliquam praesentium dolore doloribus eligendi quo minus facilis qui fugiat.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse ad quas exercitationem. Magnam perspiciatis corporis, neque odio fuga nisi, aliquam praesentium dolore doloribus eligendi quo minus facilis qui fugiat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

