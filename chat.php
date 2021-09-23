<!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="wrapper">
        <div class="title">Chatea con el Sr.Joyas</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hola soy el asitente virtual  </p>
                    <p>
                        <label>Por ahora solo puedo hacer esto.</label><br>
                        <label>1.Buscar producto</label><br>
                        <label>2.Proporcionar detalles de la tienda</label><br>
                        <label>3.Y te puedo abrir el YouTube si quieres</label><br>
                    </p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Ingrese la opción.." required>
                <button id="enviarMensaje">Enviar</button>
            </div>
        </div>
    </div>
</div>
<!-- ChatBot fin -->

<script>
    //Función para el chatbot
    $(document).ready(function(){
        $("#enviarMensaje").on("click", function(){
            $value = $("#data").val();
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
            $(".form").append($msg);
            $("#data").val('');
            
            // start ajax code
            $.ajax({
                url: 'ajax/chatbot.php',
                type: 'POST',
                data: 'text='+$value,
                success: function(result){
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                    speechSynthesis.speak(new SpeechSynthesisUtterance(result));

                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
    });
</script>
