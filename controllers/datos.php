<?php
//conectar con la base de datos para solicitar todos los eventos y cargarlos en el calendario
require_once (dirname(__FILE__).'/../administrator/db.php');

session_start();
$student_id = $_SESSION["id"];
$con = Db::getConexion();

$stmt = $con->prepare("SELECT class.name, schedule.day, schedule.time_start FROM class INNER JOIN enrollment ON class.id_course = enrollment.id_course INNER JOIN schedule ON class.id_schedule = schedule.id_schedule WHERE id_student = $student_id");
$stmt->execute();
$stmt->bind_result($name,$day,$hora);

while($stmt->fetch()){
  $return_arr[] = array(
    'title' => $name,
    'start' => $day." ".$hora);
}
  $con->close();

//codificar array en formato JSON
echo json_encode($return_arr); //Devuelve un string JSON codificado
?>
