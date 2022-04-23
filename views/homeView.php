<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<?php
session_start();
include("headerView.php");

?>


<div class="container mt-5 d-flex">
    <div class="col-md-8 offset-md-2">

        <div id='calendar'></div>

    </div>
    <div class="col-md-3 offset-md-2">
      <a href="../controllers/profileStudent.php">
        <button class="bg-primary">Perfil <i class="icon ion-md-person"></i></button>
      </a>

    </div>





<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {

  //aqui se cargan en el calendario los eventos recuperados con php de la BBDD
    eventSources: [

        // your event source
        {
          url: '../controllers/eventos_personales.php' // use the `url` property
        },
        {
          url: '../controllers/datos.php' // use the `url` property
        }

        // any other sources...

      ],


    initialView: 'dayGridMonth',
    locale: 'es',
    headerToolbar:{
        left:'prev,next today',
        center: 'title',
        right: 'dayGridMonth, timeGridWeek, timeGridDay, addEventButton'//añadimos el boton con addEventButton
    },
    customButtons: {
      addEventButton: {
        text: 'Añadir evento',
        click: function() {
          var dateStr = prompt('Introduce la fecha del evento en formato YYYY-MM-DD');//guardamos en dateStr la fecha introducida por el usuario
          var hora = prompt('Introduce la hora del evento en formato HH:MM:SS');
          var date = new Date(dateStr + 'T'+hora);
          var fecha_formatoBBDD = dateStr + ' ' +hora;
          var id = <?php echo $_SESSION["id"] ?>;
          var titulo = prompt('titulo evento');//guardamos el titulo del evento

          if (!isNaN(date.valueOf())) { // es valido el dato introducido?
            calendar.addEvent({
              title: titulo,
              start: date,
              //end:... //puedes ñadir hora para finalizar el evento
              //allDay: true //si pones el evento para todo el dia no puedes poner hora de inicio
            });
            alert('Has creado un nuevo evento. ahora actualiza la base de datos...');
            enviar_datos(titulo,fecha_formatoBBDD,id);
          } else {
            alert('Invalid date.');
          }
        }
      }
    }
  });
  calendar.render();
});



function enviar_datos(titulo,fecha_formatoBBDD,id){

  var parametros = {
      "titulo_evento":titulo,
      "fecha":fecha_formatoBBDD,
      "id":id
  };

    $.ajax({
       type: "POST",
       url: "../controllers/enviar_datos.php",
       data: parametros,
       success: function(data)
       {
        // document.getElementById("div_mostrar").innerHTML = data;
       },
       error: function (jqXHR, textStatus, error) {
           if (jqXHR.status === 0) {
             alert(textStatus+': No hay conexion con el servidor.');
           } else if (jqXHR.status == 404) {
               alert('Requested page not found. [404]');
           } else if (jqXHR.status == 500) {
               alert('Internal Server Error [500].');
           } else if (error === 'parsererror') {
               alert('Requested JSON parse failed.');
           } else if (error === 'timeout') {
               alert('Time out error.');
           } else if (error === 'abort') {
               alert('Ajax request aborted.');
           } else {
               alert('Error desconocido.');
          }
        }
   });

}

    </script>
<?php include("footerView.php");?>
