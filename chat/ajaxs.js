function ajax()
{
    var req= new XMLHttpRequest();

    req.onreadystatechange= function ()
    {
if(req.readyState == 4 && req.status == 200)
{
document.getElementById('chat').innerHTML= req.responseText;

}
    }
    req.open('GET', 'chat.php', true);
    req.send();
}

setInterval(function(){ajax();},1000);

function ocultar(){
document.getElementById('contenedor').style.display = 'none';
document.getElementById('apreocultar').style.display = 'block'; 

}
function mostrar(){
    document.getElementById('contenedor').style.display = 'block';
    document.getElementById('apreocultar').style.display = 'none'; 
    }