function validarformularioderegistrodeusuario() 
{
    
  if (document.formimg.nombre.value == "") 
  {
  
    $("#avisonombre").show("fast");
  
    document.formimg.nombre.style.border = "1px solid red";
  
}
 
  if (
    document.formimg.nombre.value != "" ) {
    var formData = new FormData($("#form")[0]);
    var nombre = document.formimg.nombre.value;

    $.ajax({
      type: "POST",
      url: "anadirimagenes.php",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,

      beforeSend: function () {
        $("#nombrerepetido").hide("fast");
        $("#exito").hide("fast");
        $("#contenedor_carga").show("fast");
      },
      success: function (resp) {
        if (resp == "exito" || resp == " seinserto") {
          $("#errorimagen").hide("fast");
          $("#contenedor_carga").hide("fast");
          $("#nombrerepetido").hide("fast");
          $("#exito").show("fast");
        }
        if (resp == "nombrerepetido") {
          $("#contenedor_carga").hide("fast");
          $("#exito").hide("fast");
          $("#nombrerepetido").show("fast");

          document.formproductos.nombre.style.border = "1px solid red";
        }
        if (resp == "errorimagen") {
          $("#contenedor_carga").hide("fast");
          $("#exito").hide("fast");
          $("#errorimagen").show("fast");

          document.formproductos.nombre.style.border = "1px solid red";
        }
      },
    });
  }
}

/**zona de exito al validar */
function mostrar() {
  $("#unaimg").show("fast");
}

function validadonombre() {
  $("#avisonombre").hide("slow");
  document.formimg.nombre.style.border = "1px solid green";
}

function validarformularioimg(){
    if(document.formimg.nombre.value==""){
        $("#avisonombre").show("fast");
        document.formimg.nombre.style.border='1px solid red';
    }
        
            if(document.formimg.nombre.value!="")
             {
                 var nombre=document.formimg.nombre.value;
                 
                 
                 $.ajax({
  
                 type:"POST",
                 url:"anadirimagenes.php",
                 data:{nombre:nombre},
                  beforeSend: function(){
            alert("enviado");   
        },
  
                 });
             }
  
  }