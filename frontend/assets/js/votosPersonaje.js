function registrarVotoLikePersonaje() {
    // se capturan los valores de los campos del formulario de registro
    var datos = new FormData(document.forms.namedItem("form-botones"));
    // se crea una instancia de ajax
    var ajax = new XMLHttpRequest();
    // se abre comunicación con el archivo destino
    ajax.open("POST", "../backend/registrarLikePersonaje.php", true)
    ajax.onload = function (event) {
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if (obj.ok) {
            
        } 
    }

    ajax.send(datos);
}

function registrarVotoDislikePersonaje() {
    // se capturan los valores de los campos del formulario de registro
    var datos = new FormData(document.forms.namedItem("form-botones"));
    // se crea una instancia de ajax
    var ajax = new XMLHttpRequest();
    // se abre comunicación con el archivo destino
    ajax.open("POST", "../backend/registrarDislikePersonaje.php", true)
    ajax.onload = function (event) {
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if (obj.ok) {
            
        } 
    }

    ajax.send(datos);
}