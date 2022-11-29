
$(document).ready(function () {

    var agenda = document.getElementById("agenda");
    var calendario = new FullCalendar.Calendar(agenda, {
        initialView: 'dayGridMonth',
        selectable: true,
        eventSources: '../backend/obtenerEvento.php',
        dateClick: function (info) {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            $('#id').val(null);
            $('#title').val(null);
            $('#description').val(null);
            $("#start").val(info.dateStr);
            $("#end").val(info.dateStr);
            $('#editableSource').val('none')
            myModal.show();
            /* alert('Clicked on: ' + info.dateStr);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('Current view: ' + info.view.type); */
            // change the day's background color just for fun

        },
        eventClick: function (info) {
            console.log("Info: " + info);
            $('#id').val(info.event.id);
            $('#title').val(info.event.title);
            $('#description').val(info.event.extendedProps.description);
            $('#start').val(moment(info.event.start).format("YYYY-MM-DDThh:mm"));
            console.log(moment(info.event.start));
            $('#end').val(moment(info.event.end).format("YYYY-MM-DDThh:mm"));
            $('#color').val(info.event.backgroundColor);
            $('#editableSource').val(info.event.extendedProps.editableSource)
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        },
        editable: true,

    });
    calendario.render();

    $('#guardarEvento').click(function (evento) {
        var data = new FormData();
        id = $("#id").val();
        title = $("#title").val();
        description = $("#description").val();
        color = $("#color").val();
        start = $("#start").val();
        end = $("#end").val();
        data.append("id", id);
        data.append("title", title);
        data.append("description", description);
        data.append("color", color);
        data.append("start", start);
        data.append("end", end);
        if (id > 0) {
            url = "../backend/actualizarEvento.php";
        } else {
            url = "../backend/registrarEvento.php";
        }

        var ajax = new XMLHttpRequest();
        ajax.open("POST", url);
        ajax.onload = function (data) {
            var resp = JSON.parse(ajax.response);
            console.log(resp);
            if (resp.msg == "El evento no se puede actualizar") {
                swalWithBootstrapButtons.fire(
                    'Error',
                    'Este evento no se puede actualizar',
                    'error'
                  )
            }else{
                document.getElementById("form-eventos").reset();
                location.reload();
            }
            $("#exampleModal").modal('hide');
            
        }
        ajax.send(data);
        evento.preventDefault();
    }
    )

    $('#eliminarEvento').click(function (evento) {
        var data = new FormData();
        id = $("#id").val();
        data.append("id", id);
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "../backend/eliminarEvento.php");
        ajax.onload = function (data) {
            var resp = JSON.parse(ajax.response);
            console.log(resp);
            if(resp.ok){
                alert("Se eliminó´el evento.")
            }
            document.getElementById("form-eventos").reset();
            $("#exampleModal").modal('hide');
            location.reload();
        }
        ajax.send(data);
    }
    )
});