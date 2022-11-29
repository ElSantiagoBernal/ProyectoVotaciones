$(document).ready(function() {
    $('#table_personajes').DataTable({
        "ajax": {
            "url": "../backend/obtenerPersonaje.php",
            "dataSrc": ""
        },
        "columns":[
            {"data": "nombre"},
            {"data": "tipo"},
            {"data": "likes"},
            {"data": "dislikes"},
        ]
    });

} );