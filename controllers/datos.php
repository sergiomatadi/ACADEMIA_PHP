<?php
//conectar con la base de datos para solicitar todos los eventos y cargarlos en el calendario
session_start();
$id_estudiante = $_SESSION["id"];
$con = new mysqli("localhost", "root", "", "wordpress25");
//$stmt = $con->prepare("SELECT name FROM class JOIN enrollment ON class.id_course = enrollment.id_course WHERE id_student = $estudiante");
//$stmt = $con->prepare("SELECT class.name, schedule.day FROM class, schedule WHERE class.id_schedule = schedule.id_schedule");
$stmt = $con->prepare("SELECT class.name, schedule.day, schedule.time_start FROM class INNER JOIN enrollment ON class.id_course = enrollment.id_course INNER JOIN schedule ON class.id_schedule = schedule.id_schedule WHERE id_student = $id_estudiante");
$stmt->execute();
$stmt->bind_result($name,$day,$hora);

while($stmt->fetch()){
  $return_arr[] = array(
    'title' => $name,
    'start' => $day." ".$hora);
}
  $con->close();

//codificar array en formato JSON
echo json_encode($return_arr);//Devuelve un string JSON codificado
?>
