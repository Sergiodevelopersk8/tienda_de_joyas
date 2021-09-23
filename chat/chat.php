 <?php
 include '../bd/config.php';
 include '../bd/class_mysql.php';
 include '../bd/conexion1.php';
 




  $consulta=mysqli_query($conexion,"select * from chatonline ");
  
  
    
  while($filausu = mysqli_fetch_array($consulta)){ ?>  
  
  <div id="datos-chat">
      <span style="color: #1c62c4;"><?php echo $filausu['nombre'];?>:</span>
 <span style="color: #848484;"><?php echo $filausu['mensaje'];?>:</span>
     
  
  </div>
  <?php } ?>
  
    

  
