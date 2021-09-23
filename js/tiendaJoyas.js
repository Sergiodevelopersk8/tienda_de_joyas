    $(document).ready(function () {
        $.ajax({
            type: "post",
            url: "ajax/leerCarrito.php",
            dataType: "json",
            success: function (response) {
                if(response != ""){
                    llenaCarrito(response);
                }
            }
        });
        $.ajax({
            type: "post",
            url: "ajax/leerCarrito.php",
            dataType: "json",
            success: function (response) {
                if(response == ""){
                    $("#tblCarrito tbody").text("");
                }else{
                    llenarTablaCarrito(response);
                }
            }
        });
        function llenarTablaCarrito(response){
            $("#tblCarrito tbody").text("");
            var TOTAL=0;
            response.forEach(element => {
                var precio=parseFloat(element['subtotal']);
                var totalProd=element['cantidad']*precio;
                TOTAL=TOTAL+totalProd;
                $("#tblCarrito tbody").append(
                    `
                    <tr>
                        <td>
                            <div class="media" style="width=10px;">
                                <div class="" style="width=10px;">
                                    <img class="img-rounded" width="100" height="100" src="${element['foto']}" alt="">
                                </div>
                                <div class="media-body">
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<a style="text-decoration:none; color:gray;" href="index.php?modulo=detalleProducto&id=${element['id']}">${element['nombre']}</a></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>${'$ '+ element['subtotal']}</h5>
                         </td>
                        <td>
                            <div class="product_count">
                                <input type="text" name="qty" min="1" value="${element['cantidad']}" title="Quantity:" class="input-text qty valN" />
                                <button class="increase items-count" type="button"><i data-id="${element['id']}" data-tipo="mas" class="lnr lnr-chevron-up mas"></i></button>
                                <button class="reduced items-count" type="button"><i data-id="${element['id']}" data-tipo="menos" class="lnr lnr-chevron-down menos"></i></button>
                            </div>
                        </td>
                        <td>
                            <h5>${'$ '+ totalProd}</h5>  
                        </td>
                        <td>
                            <button class="btn btn-danger"><i data-id="${element['id']}" class="fa fa-trash borrarProducto" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    `
                );
            });
            $("#tblCarrito tbody").append(
                `
                <tr>
                    <td>
        
                    </td>
                    <td>
        
                    </td>
                    <td>
                        <h5>Total</h5>
                    </td>
                    <td>
                        <h5>${'$ '+TOTAL.toFixed(2) + ' MXN'}</h5>
                    </td>
                    </tr>
                    <tr class="out_button_area">
                    <td class="d-none-l">
                        </td>
                        <td class="">
                        </td>
                        <td>
                        </td>
                        <td>
                            <div class="checkout_btn_inner d-flex align-items-center">
                                <a class="gray_btn" style="text-decoration:none; color:red;" id="borrarCarrito" href="#">Eliminar todo el carrito&nbsp;&nbsp;<i class="fa fa-trash"></i></a>
                                <a class="primary-btn ml-2" id="yaPago" href="index.php?modulo=pagar">Pasar por la caja</a>
                            </div>
                    </td>
                    </tr>
                `
            );
        }
        $(document).on("click",".mas,.menos",function(e){
            e.preventDefault();
            var id=$(this).data('id');
            var tipo=$(this).data('tipo');
            var inval = $('.valN').val();
            $.ajax({
                type: "post",
                url: "ajax/cambiarCantidadProductos.php",
                data: {"id":id,"tipo":tipo, "cant":inval},
                dataType: "json",
                success: function (response) {
                    llenarTablaCarrito(response);
                    llenaCarrito(response);
                }
            });
        });
        $(document).on("click",".borrarProducto",function(e){
            e.preventDefault();
            var id=$(this).data('id');
            $.ajax({
                type: "post",
                url: "ajax/borrarProductoCarrito.php",
                data: {"id":id},
                dataType: "json",
                success: function (response) {
                    if(response == ""){
                        $("#tblCarrito tbody").text("");
                        llenaCarrito(response);
                    }else{
                        llenarTablaCarrito(response);
                        llenaCarrito(response);
                    }
                }
            });
        });
        $("#agregarCarro").click(function (e) { 
            e.preventDefault();
            var id = $(this).data('id');
            var imagen = $(this).data('img');
            var nombre = $(this).data('nom');
            var precio = $(this).data('precio');
            var cantidad = $('#cantidadProducto').val();
            var maximo = $(this).data('max');
            $.ajax({
                type: "post",
                url: "ajax/agregarCarrito.php",
                data: {
                    "id":id, 
                    "cantidad":cantidad,
                    "foto":imagen,
                    "nombre":nombre,
                    "maximo":maximo,
                    "precio":precio
                },
                dataType: "json",
                success: function (response) {
                    llenaCarrito(response);
                    $("#badgeProducto").hide(500).show(500);
                   // $("#iconoCarrito").click();
                }
            });
        });
        $(".agregarCarroP").click(function (e) { 
            e.preventDefault();
            var id = $(this).data('id');
            var imagen = $(this).data('img');
            var nombre = $(this).data('nom');
            var precio = $(this).data('precio');
            var cantidad = 1;
            var maximo = $(this).data('max');
            $.ajax({
                type: "post",
                url: "ajax/agregarCarrito.php",
                data: {
                    "id":id, 
                    "cantidad":cantidad,
                    "foto":imagen,
                    "nombre":nombre,
                    "maximo":maximo,
                    "precio":precio
                },
                dataType: "json",
                success: function (response) {
                    llenaCarrito(response);
                    $("#badgeProducto").hide(500).show(500);
                   // $("#iconoCarrito").click();
                }
            });
        });
        function llenaCarrito(response){
            var cantidad=Object.keys(response).length;
            if(cantidad>0){
                $("#badgeProducto").text(cantidad);
            }else{
                $("#badgeProducto").text("");
            }
        }
        $(document).on("click","#borrarCarrito",function(e){
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "ajax/borrarCarrito.php",
                dataType: "json",
                success: function (response) {
                    llenaCarrito(response);
                    $("#tblCarrito tbody").text("");
                }
            });
        });
        $(document).on("click","#registro",function(e){
            e.preventDefault();
            console.log("Registrado")
            var opcion = 1
            var pas = $('#password').val()
            var pass = $('#confirmaPassword').val()
            if(pas == pass){
                $.ajax({
                    type: "POST",
                    url: "ajax/usuario.php",
                    data: { 
                        "formulario" : $('#registroUser').serialize(),
                        "opcion" : opcion
                    },
                    success: function (response) {
                        console.log(response.toString())
                        if(response.toString() == 1){
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'bottom-start',
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                  toast.addEventListener('mouseenter', Swal.stopTimer)
                                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              Toast.fire({
                                icon: 'success',
                                title: 'Usuario Registrado.'
                              }) 
                              setTimeout(function() { window.location.href = 'index.php?modulo=login' }, 1500); 
                        }else{
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'bottom-start',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                  toast.addEventListener('mouseenter', Swal.stopTimer)
                                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              Toast.fire({
                                icon: 'error',
                                title: 'Error al registrarse.'
                              }) 
                        }
                    }
                });
            }else{
                $('#password').get(0).style = 'border: 1.5px solid red;'
                $('#confirmaPassword').get(0).style = 'border: 1.5px solid red;'
            }
        });
        $(document).on("click","#logueo",function(e){
            e.preventDefault();
            var email = $("#correoLo").val()
            var pass = $("#passLo").val()
            $.ajax({
                type: "post",
                url: "ajax/login.php",
                data: {"email":email, "pass": pass},
                success: function (response) {
                    if(response == 0){
                        $('.passwordd').get(0).style = ''
                        $('.emaill').get(0).style = ''
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-start',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                          })
                          Toast.fire({
                            icon: 'success',
                            title: 'Bienvenido a INFINITY GEMS JEWELRY.'
                          }) 
                          setTimeout(function() { window.location.href = 'index.php?modulo=inicio' }, 1500);  
                        }else{
                            $('.passwordd').get(0).style = 'border: 1.5px solid red;'
                            $('.emaill').get(0).style = 'border: 1.5px solid red;'
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'bottom-start',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                  toast.addEventListener('mouseenter', Swal.stopTimer)
                                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              Toast.fire({
                                icon: 'error',
                                title: 'Error al inicar sesión.'
                              }) 
                        }
                          
                }
            });
        });
        $(document).on("click","#passRec",function(e){
            e.preventDefault();
            console.log("Recupera pass")
            // $.ajax({
            //     type: "post",
            //     url: "ajax/borrarCarrito.php",
            //     dataType: "json",
            //     success: function (response) {
            //         llenaCarrito(response);
            //         $("#tblCarrito tbody").text("");
            //     }
            // });
        });
        $('.verPL').on('change', function() {
            var checked = this.checked
            if(checked.toString() == 'true'){
                $('#passLo').get(0).type = 'text'
            }else{
                $('#passLo').get(0).type = 'password'
            }
       });

       $('#verPP').on('change', function() {
        var checked = this.checked
        if(checked.toString() == 'true'){
            $('#passUsN').get(0).type = 'text'
        }else{
            $('#passUsN').get(0).type = 'password'
        }
        });
        
        $('.verPass').on('change', function() {
            var checked = this.checked
            if(checked.toString() == 'true'){
                verContrasena()
            }else{
                ocultaContrasena()
            }
       });

       function verContrasena(){
            $('#password').get(0).type = 'text'
            $('#confirmaPassword').get(0).type = 'text'
       }
       function ocultaContrasena(){
            $('#password').get(0).type = 'password'
            $('#confirmaPassword').get(0).type = 'password'
        }

        $(document).on("click","#actualizaPerfil",function(e){
            e.preventDefault();

            var nombre = $('#nomNuevo').val()
            console.log(nombre)
            // $.ajax({
            //     type: "post",
            //     url: "ajax/borrarCarrito.php",
            //     dataType: "json",
            //     success: function (response) {
            //         llenaCarrito(response);
            //         $("#tblCarrito tbody").text("");
            //     }
            // });
        });
    });