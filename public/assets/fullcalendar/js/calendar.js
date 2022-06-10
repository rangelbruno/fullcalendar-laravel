document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      locale: 'pt-br',
      navLinks: true,
      editable: true,
      selectable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      dayMaxEvents: true, // allow "more" link when too many events
      //events: 'https://fullcalendar.io/api/demo-feeds/events.json?overload-day',
   
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },
      eventDrop: function(event){
          alert('event Drop');
      },
      eventClick: function(event){
          alert('event Click');
      },
      eventResize: function(event){
          alert('event Resize');
      },
      select: function(event){
          alert('event Select');
      },
      events: routeEvents('routeLoadEvents'),
    });
    calendar.render();

  });