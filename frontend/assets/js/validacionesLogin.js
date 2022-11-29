var username = "";

function loguearse() {
    // se capturan los valores de los campos del formulario de registro
    var datos = new FormData(document.forms.namedItem("form-login"));
    // se crea una instancia de ajax
    var ajax = new XMLHttpRequest();
    // se abre comunicación con el archivo destino
    ajax.open("POST", "../backend/loguearse.php", true)
    ajax.onload = function (event) {
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if (obj.ok) {
            location.href = "../frontend/index.php";
        } else if (obj.msg == "Problemas al loguear.") {
            document.getElementById("errorLoginUsuario").style.display = "block";
            document.getElementById("errorCamposLogin").style.display = "none";
        } else if (obj.msg == "Debe diligenciar todos los campos") {
            document.getElementById("errorCamposLogin").style.display = "block";
            document.getElementById("errorLoginUsuario").style.display = "none";
        }
    }
    ajax.send(datos);
}

function obtenerNombreUsuario(){
    return username;
}

function validarCamposLogin() {
    username = document.getElementById("nombreUsuario").value;
    loguearse();
}




