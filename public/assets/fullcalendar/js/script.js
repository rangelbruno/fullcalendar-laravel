$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function sendEvent(route, data_) {

    $.ajax({
        url: route,
        data: data_,
        method: 'POST',
        dataType: 'json',
        success: function (json)  {
            if(json)
            {
                location.reload();
            }
        }
    });
}

function routeEvents(route) {
    return document.getElementById('calendar').dataset[route];
}

function resetForm(form){
   $(form).trigger('reset');
}