<?php
include('../bd/config.php');
include('../bd/conexion1.php');
$registros=mysqli_query($conexion,"select * from categoriaproducto order by idCategoriaProducto desc");
cerrarconexion();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/imgcss.css">
    <link rel="stylesheet" type="text/css" href="css/imgcss2.css">
    <link rel="stylesheet" type="text/css" href="css/imgcss3.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lemonada" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src='js/imgup.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
    <title>Document</title>
</head>
<body>
<a href="dashadmi.php"><div class="ellogo"> <img class="logoempresa" src="../img/logo.png"></div></a>

  <form  action="valida_fotos.php" method="POST" enctype="multipart/form-data">
  <p>Nombre:</p>
<input type="text" name="nombre" value="" id="nombreinput">
<br>
<br>
<div class="container">
<div class="wrapper" id="wr" >
<div class="image">

<img src="" alt=" " id="recib">

</div>
<div class="content">
  <div class="icon"> <i class="fas fa-cloud-upload-alt"></i> </div>
  <div class="text">no se a subido nada</div>
</div>

<div class="file-name">nombre del archivo</i></div>

</div>
<input type="file" name="img1" id="img1"  >
<label for="img1">
<span><p id="p1">selecciona la primera imagen</p></span>

</label>


</div>
<div class="container2">
<div class="wrapper2" id="wr" >
<div class="image2">

<img src=""  id="recib2"  >

</div>
<div class="content">
  <div class="icon"> <i class="fas fa-cloud-upload-alt"></i> </div>
  <div class="text">no se a subido nada</div>
</div>

<div class="file-name2">nombre del archivo</i></div>

</div>
<input type="file" name="img2" id="img2"  >
<label for="img2">
<span><p id="p2">selecciona la 2 imagen</p></span>

</label>


</div>
<div class="container3">
<div class="wrapper3" id="wr" >
<div class="image3">

<img src="" alt=" " id="recib3">

</div>
<div class="content">
  <div class="icon"> <i class="fas fa-cloud-upload-alt"></i> </div>
  <div class="text"> <p id="p3"> no se a subido nada</p></div>
</div>

<div class="file-name3">nombre del archivo</i></div>

</div>
<input type="file" name="img3" id="img3"  >
<label for="img3">
<span>selecciona la 3 imagen</span>

</label>


</div>

<input type="submit" name="enviar" value="Enviar" id="enviar"> 
</form>

<script>
  
 const cancelbtn = document.querySelector("#cancel-btn");

const filename = document.querySelector(".file-name");
const filename2 = document.querySelector(".file-name2");
const filename3 = document.querySelector(".file-name3");

const defaultbtn = document.querySelector("#img1");
const defaultbtn2 = document.querySelector("#img2");
const defaultbtn3 = document.querySelector("#img3");
const custombtn = document.querySelector("#custom-btn");
//const img = document.querySelector("img");
const img = document.querySelector("#recib");
const img2 = document.querySelector("#recib2");
const img3 = document.querySelector("#recib3");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_]+$/;
 /* function defaultbtnActive()

{
  defaultbtn.click();
}*/
defaultbtn.addEventListener("change", function(){

const file = this.files[0];
if(file)
{
  const reader = new FileReader();
  reader.onload=function(){
  const result = reader.result;
  
  img.src= result;
  
 
 // document.getElementById('wr').style.display = 'block'; 
}
reader.readAsDataURL(file);
}
if(this.value){
  let valueStore =this.value.match(regExp);
  filename.textContent=valueStore;
}

});

defaultbtn2 .addEventListener("change", function(){

const file = this.files[0];
if(file)
{
  const reader = new FileReader();
  reader.onload=function(){
 
  const result2 = reader.result;
  
  img2.src= result2;
  
 
 // document.getElementById('wr').style.display = 'block'; 
}
reader.readAsDataURL(file);
}
if(this.value){
  let valueStore2 =this.value.match(regExp);
  filename2.textContent=valueStore2;
}

});

defaultbtn3.addEventListener("change", function(){

const file = this.files[0];
if(file)
{
  const reader = new FileReader();
  reader.onload=function(){
 
  const result3 = reader.result;
 
  img3.src= result3;
 
 // document.getElementById('wr').style.display = 'block'; 
}
reader.readAsDataURL(file);
}
if(this.value){
  let valueStore3 =this.value.match(regExp);
  filename3.textContent=valueStore3;
}

});

</script>

</body>
</html>