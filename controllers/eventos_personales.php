<?php
require_once (dirname(__FILE__).'/../administrator/db.php');

//conectar con la base de datos para solicitar todos los eventos y cargarlos en el calendario
session_start();
$id = $_SESSION["id"];
$con = Db::getConexion();


$stmt = $con->prepare("SELECT titulo_evento, fecha FROM eventos WHERE id_student = $id");
$stmt->execute();
$stmt->bind_result($title, $start);

while($stmt->fetch()){
  $return_arr[] = array(
    'title' => $title,
    'start' => $start);//es opcional es para que aparezca la hora
}

$con->close();

//codificar array en formato JSON
echo json_encode($return_arr);//Devuelve un string JSON codificado

?>
