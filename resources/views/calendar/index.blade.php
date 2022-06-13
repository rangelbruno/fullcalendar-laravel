<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />

<link href="{{ url('assets/fullcalendar/lib/main.css') }}" rel="stylesheet" type="text/css" />
<!-- Chamando o Bootstrap  -->
<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Chamando o CSS  -->
<link href="{{ url('assets/fullcalendar/css/style.css') }}" rel="stylesheet" type="text/css" />
<!-- Chamando o CSRF  -->
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
  @include('calendar.modal')
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 1</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 2</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 3</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 4</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 5</div>
        </div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div id='calendar-wrap'>
      <div 
            id='calendar'
            data-route-load-events="{{ route('routeLoadEvents') }}"
            data-route-event-update="{{ route('routeEventUpdate') }}"
      ></div>
    </div>

  </div>

<!-- Chamando o Jquery -->
<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>



<!-- Chamando o Bootstrap -->
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/popper.min.js') }}"></script>

<!-- Chamando o Moment -->
<script src="{{ url('assets/fullcalendar/js/moment.js') }}"></script>

<!-- Chamando o Calendar -->
<script src="{{ url('assets/fullcalendar/js/script.js') }}"></script>
<script src="{{ url('assets/fullcalendar/js/calendar.js') }}"></script>

<script src="{{ url('assets/fullcalendar/lib/main.js') }}"></script>
<script src="{{ url('assets/fullcalendar/lib/locales-all.min.js') }}"></script>
</body>
</html>
