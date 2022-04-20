
<?php

//conectar con la base de datos para solicitar todos los eventos y cargarlos en el calendario
session_start();
$id = $_SESSION["id"];
$con = new mysqli("localhost", "root", "LvV!aqwC^5Hwgw86lZ", "wordpress25");
//$stmt = $con->prepare("SELECT name FROM class JOIN enrollment ON class.id_course = enrollment.id_course WHERE id_student = $estudiante");
//$stmt = $con->prepare("SELECT class.name, schedule.day FROM class, schedule WHERE class.id_schedule = schedule.id_schedule");
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

/*
$title = "evento1";
$start = '2022-04-21';

$return_arr[] = array(
  'title' => $title,
  'start' => $start);*/



/*
session_start();
//conectar con la base de datos para solicitar todos los eventos y cargarlos en el calendario
  $con = new mysqli("localhost", "jorge", "jcblrp9$", "wordpress25");
  $stmt = $con->prepare("SELECT titulo_evento, fecha FROM eventos");
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
*/
/*
$title = "evento1";
$start = '2022-04-21';

$return_arr[] = array(
  'title' => $title,
  'start' => $start);*/
?>
