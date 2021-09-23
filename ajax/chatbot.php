<?php
// getting user message through ajax
include_once "../bd/class_mysql.php";
$getMesg = MysqlQuery::RequestPost("text");

//checking user query to database query
$check_data = Mysql::Consulta("SELECT respuestas FROM chatbot WHERE consultas LIKE '%$getMesg%'");
$existe = mysqli_num_rows($check_data);
// if user query matched to database query we'll show the reply otherwise it go to else statement
if($existe > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_array($check_data);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['respuestas'];
    echo $replay;
}else{
    /** speechSynthesis.speak(new SpeechSynthesisUtterance(text));
 */
    echo  "Hola, por favor selecccione una opción válida";
}

?>