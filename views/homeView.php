<?php include("headerView.php");?>


<div class="container mt-5">
    <div class="col-md-8 offset-md-2">
        
        <div id='calendar'></div>

    </div>

</div>

<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'es',
          headerToolbar:{
              left:'prev,next today',
              center: 'title',
              right: 'dayGridMonth, timeGridWeek, timeGridDay'
          }
        });
        calendar.render();
      });

    </script>
<?php include("footerView.php");?>
