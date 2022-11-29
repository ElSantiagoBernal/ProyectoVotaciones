
const input = document.querySelector("#file");
var resultado = false;

input.addEventListener("change", function () {
    if (this.files.length <= 0) return;
    const archivo = this.files[0];
    if (archivo.size > 1000000) {
        document.getElementById("errorWeightFile").style.display = "block";
        resultado = false;
    } else {
        document.getElementById("errorWeightFile").style.display = "none";
        resultado = true;
    }
});

function subir_imagen() {
    // se capturan los valores de los campos del formulario de registro
    var datos = new FormData(document.forms.namedItem("form-registroPersonaje"));
    // se crea una instancia de ajax
    var ajax = new XMLHttpRequest();
    // se abre comunicación con el archivo destino
    ajax.open("POST", "../backend/uploadImagen.php", true)
    ajax.onload = function (event) {
        var obj = JSON.parse(ajax.response);
        console.log("IMG: ", obj)
        if (obj.ok) {
            console.log("img ok");
        }
    }
    ajax.send(datos);
}

function registrarPersonaje() {
    // se capturan los valores de los campos del formulario de registro
    var datos = new FormData(document.forms.namedItem("form-registroPersonaje"));
    // se crea una instancia de ajax
    var ajax = new XMLHttpRequest();
    // se abre comunicación con el archivo destino
    ajax.open("POST", "../backend/registrarPersonaje.php", true)
    ajax.onload = function (event) {
        var obj = JSON.parse(ajax.response);
        console.log("USER: ", obj)
        if (obj.ok) {
            mostrarPersonajeRegistradoConExito();
            document.forms.namedItem("form-registroPersonaje").reset();
        } else if (obj.msg == "Este nombre de personaje ya se encuentra en uso") {
            document.getElementById("errorNombrePersonaje").style.display = "block";
        }
    }

    ajax.send(datos);
}




function validarCamposRP() {
    validarDescripcion();
    validarImg();
    validarTipo();
    validarNombrePersonaje();
    validarExtensionDescripcion();
    if (resultado && validarImg && validarTipo() && validarDescripcion() && validarExtensionDescripcion) {
        subir_imagen();
        registrarPersonaje();
    }
}

function validarImg() {
    img = document.getElementById("file").value;
    if (img == "") {
        document.getElementById("errorFileEmpty").style.display = "block";
        return false;
    } else {
        document.getElementById("errorFileEmpty").style.display = "none";
        return true;
    }
}

function validarTipo() {
    const regExp = /^[a-zA-Z ÁÉÍÓÚáéíóú]+\S{2,40}$/i;
    tipo = document.getElementById("tipoPersonaje").value;
    if (tipo.match(regExp) != null) {
        if (tipo == "") {
            document.getElementById("errorCompletarCampos").style.display = "block";
            return false;
        } else {
            document.getElementById("errorCompletarCampos").style.display = "none";
            document.getElementById("errorTipoPersonaje").style.display = "none";
            return true;
        }
    } else {
        document.getElementById("errorTipoPersonaje").style.display = "block";
    }
}

function validarDescripcion() {
    const regExp = /^[^'"]*$/;
    descripcion = document.getElementById("descripcionPersonaje").value;
    if (descripcion.match(regExp) != null) {
        if (descripcion == "") {
            document.getElementById("errorCompletarCampos").style.display = "block";
            document.getElementById("errorDescripcionPersonaje").style.display = "none";
            return false;
        } else {
            document.getElementById("errorCompletarCampos").style.display = "none";
            return true;
        }
    } else {
        document.getElementById("errorDescripcionPersonaje").style.display = "block";
    }
}

function validarExtensionDescripcion (){
    descripcion = document.getElementById("descripcionPersonaje").value;
    if(descripcion.length > 33){
        document.getElementById("errorDescripcionPersonaje2").style.display = "block";
        return false;
    }else{
        document.getElementById("errorDescripcionPersonaje2").style.display = "none";
        return true;
    }
}


function validarNombrePersonaje() {
    const regExp = /^[a-zA-Z ÁÉÍÓÚáéíóú]+\S{2,40}$/i;
    var name = document.getElementById("nombrePersonaje").value;
    if (name.match(regExp) != null) {
        if (name == "") {
            document.getElementById("errorNombrePersonaje").style.display = "block";
            document.getElementById("errorNombrePersonaje2").style.display = "none";
            return false;
        } else {
            document.getElementById("errorNombrePersonaje").style.display = "none";
            return true;
        }
    } else {
        document.getElementById("errorDescripcionPersonaje").style.display = "block";
    }

}

