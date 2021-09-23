
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Todos los productos</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Todos los productos</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

  	<!-- ================ category section start ================= -->		  
    <section class="section-margin--small mb-5">
    <div class="container">
        <?php include_once "barraBusProd.php"; ?>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div>
                <form action="index.php" method="POST">
                <div class="input-group filter-bar-search ml-auto mr-auto">
                    <input type="hidden" name="modulo" value="productos">
                    <input type="text" name="nombre" value="<?php echo MysqlQuery::Request("nombre"); ?>" placeholder="Buscar">
                    <div class="input-group-append">
                    <button type="button" id="buscar" type="search"><i class="ti-search"></i></button>
                    </div>
                </div>
                </form>
            </div>
          </div>
          <!-- End Filter Bar -->
          <!-- Start Best Seller -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
            <!-- Productos   -->
            <?php
            $where = " WHERE 1=1 ";
            $nombre = MysqlQuery::RequestPost("nombre");
            if(empty($nombre)==false){
              $where = "WHERE nombreProd like '%".$nombre."%'";
            }
            $cuenta = Mysql::Consulta("SELECT COUNT(*) AS cuenta FROM productos $where ;");
            $rowCuenta= mysqli_fetch_array($cuenta);//$cuenta->fetch(PDO::FETCH_ASSOC);
            $totalRegistros = $rowCuenta['cuenta'];
            $elementosPagina = 12;
            $totalPaginas = ceil($totalRegistros/$elementosPagina);
            $paginaSel = $_REQUEST['pagina']??false;
            if($paginaSel == false){
                $inicioLimite = 0;
                $paginaSel = 1;
            }else{
              $inicioLimite = ($paginaSel -1) * $elementosPagina;
            }
            $limite  = "LIMIT $inicioLimite,$elementosPagina";
            $producto = Mysql::Consulta("SELECT p.idProducto, p.nombreProd, p.precioProd, p.existenciaProd, cat.nombreCategoria, f.ruta_web
            FROM productos AS p INNER JOIN categoriaproducto AS cat ON p.idCategoriaProducto=cat.idCategoriaProducto
            INNER JOIN productosimg AS pf ON pf.idProducto=p.idProducto 
            INNER JOIN imagenes AS f ON f.idImagen=pf.idImagen
            $where
            GROUP BY p.idProducto
            $limite");
            $result = mysqli_num_rows($producto);
            if($result > 0){
                while ($row = mysqli_fetch_array($producto)) {
            ?>


            <div class="col-md-4 col-lg-4">
                <div class="card text-center card-product border border-primary">
                  <div class="card-product__img">
                    <img class="card-img" src="<?php echo $row['ruta_web'] ?>" alt="">
                    <ul class="card-product__imgOverlay"> 
                      <li><a href="index.php?modulo=detalleProducto&id=<?php echo $row['idProducto'] ?>"><button><i class="ti-search"></i></button></a></li>
                      <li><button><i class="fas fa-cart-plus agregarCarroP" data-id="<?php echo $row['idProducto'] ?>" data-img="<?php echo $row['ruta_web'] ?>" data-nom="<?php echo $row['nombreProd'] ?>" data-precio="<?php echo $row['precioProd'] ?>" data-max="<?php echo $row['existenciaProd'] ?>"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p><?php echo $row['nombreCategoria'] ?></p>
                    <h4 class="card-product__title"><a href="#"><?php echo $row['nombreProd'] ?></a></h4>
                    <p class="card-product__price"><?php echo '$ '.$row['precioProd'] ?></p>
                  </div>
                </div>
              </div>


              <?php
                }
              }else{
                echo "<h6 style='color:grey;' class='text-aling-center'>No se encontro ningún producto con el nombre ingresado :( </h6>";
              }
              ?>
            </div>

            <?php 
            if($totalPaginas > 0){ ?>
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <?php if($paginaSel != 1){ ?>
                  <li class="page-item">
                    <a class="page-link" href="index.php?modulo=productos&pagina=<?php echo ($paginaSel - 1); ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo; Anterior</span>
                      <span class="sr-only"></span>
                    </a>
                  </li>
                  <?php } 
                  
                  for($i = 1;$i<= $totalPaginas;$i++){
                  ?>
                  <li class="page-item <?php echo ($paginaSel==$i)?"active":" "; ?>">
                  <a class="page-link" href="index.php?modulo=productos&pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                  <?php } 
                  if($paginaSel != $totalPaginas){
                  ?>
                  <li class="page-item">
                    <a class="page-link" href="index.php?modulo=productos&pagina=<?php echo ($paginaSel + 1); ?>" aria-label="Next">
                      <span aria-hidden="true">Siguiente &raquo;</span>
                      <span class="sr-only"></span>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </nav>
            <?php
              }
            ?>
          </section><!--jsjs-->
          <!-- End Best Seller -->
        </div>
      </div>
    </div>
  </section>
	<!-- ================ category section end ================= -->	

	<!-- ================ Subscribe section start ================= -->		  
  <section class="subscribe-position">
    <div class="container">
      <div class="subscribe text-center">
        <h3 class="subscribe__title">Get Update From Anywhere</h3>
        <p>Bearing Void gathering light light his eavening unto dont afraid</p>
        <div id="mc_embed_signup">
          <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
            <div class="form-group ml-sm-auto">
              <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
              <div class="info"></div>
            </div>
            <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
            <div style="position: absolute; left: -5000px;">
              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
            </div>

          </form>
        </div>
        
      </div>
    </div>
  </section>
	<!-- ================ Subscribe section end ================= -->		  
