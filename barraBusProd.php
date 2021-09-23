<div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Categorias</div>
            <ul class="main-categories">
              <li class="common-filter">
                <form action="#">
                  <ul>
                  <?php
                  $consultaC = Mysql::Consulta('SELECT * FROM categoriaproducto GROUP BY nombreCategoria');
                  $result = mysqli_num_rows($consultaC);
                  if($result > 0){
                  while ($row = mysqli_fetch_array($consultaC)) {
                  ?>
                    <li class="filter-list">
                      <input class="pixel-radio" type="radio" id="<?php echo $row['idCategoriaProducto']; ?>" name="radioCat">
                      <label for="men"><?php echo $row['nombreCategoria']; ?><span> (54)</span></label>
                    </li>
                  <?php
                    }
                  }else{
                  ?>
                    <input class="pixel-radio disabled" type="radio" id="" name="noHay">
                    <label for="men">No hay categorias<span> (0)</span></label>
                  <?php } ?>
                  </ul>
                </form>
              </li>
            </ul>
          </div>
          <div class="sidebar-filter">
            <div class="top-filter-head">Filtros de productos</div>
            <div class="common-filter">
              <div class="head">Marcas</div>
              <form action="#">
                <ul>
                  <?php
                  $consultaM = Mysql::Consulta('SELECT marcaProd, COUNT(marcaProd) AS cuantos FROM productos GROUP BY marcaProd');
                  $result = mysqli_num_rows($consultaM);
                  if($result > 0){
                      while ($row = mysqli_fetch_array($consultaM)) {
                  ?>
                  <li class="filter-list"><input class="pixel-radio" type="radio" id="<?php echo $row['marcaProd']; ?>" name="radMarca"><label for="apple"><?php echo $row['marcaProd']; ?><span>(<?php echo $row['cuantos']; ?>)</span></label></li>
                  <?php 
                    }
                  }else{
                  ?>
                    <input class="pixel-radio disabled" type="radio" id="" name="noHayM">
                    <label for="men">No hay marcas<span> (0)</span></label>
                  <?php } ?>
                </ul>
              </form>
            </div>
            <div class="common-filter">
              <div class="head">Material</div>
              <form action="#">
                <ul>
                  <?php
                  $consultaMa = Mysql::Consulta('SELECT materialProducto, COUNT(materialProducto) AS contador FROM productos GROUP BY materialProducto');
                  $result = mysqli_num_rows($consultaMa);
                  if($result > 0){
                      while ($row = mysqli_fetch_array($consultaMa)) {
                  ?>
                  <li class="filter-list"><input class="pixel-radio" type="radio" id="<?php echo $row['materialProducto']; ?>" name="radioMat"><label for="black"><?php echo $row['materialProducto']; ?><span>(<?php echo $row['contador']; ?>)</span></label></li>
                  <?php
                    }
                  }else{
                  ?>
                    <input class="pixel-radio disabled" type="radio" id="" name="noHayMat">
                    <label for="men">No hay materiales<span> (0)</span></label>
                  <?php } ?>
                </ul>
              </form>
            </div>
          </div>
        </div>		