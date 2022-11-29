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
    var datos = new FormData(document.forms.namedItem("form-registro"));
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

function registrarse() {
    // se capturan los valores de los campos del formulario de registro
    var datos = new FormData(document.forms.namedItem("form-registro"));
    // se crea una instancia de ajax
    var ajax = new XMLHttpRequest();
    // se abre comunicación con el archivo destino
    ajax.open("POST", "../backend/registrarse.php", true)
    ajax.onload = function (event) {
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if (obj.ok) {
            location.href = "../frontend/index.php";
        } else if (obj.msg == "Este nombre de usuario ya se encuentra en uso") {
            document.getElementById("errorNombreUsuario").style.display = "block";
        }
    }
    ajax.send(datos);
}

function validarCampos() {
    validarPassword();
    validarConfirmPassword();
    validarTerms();
    validarImg();
    validarNombreUsuario();
    if (validarImg() && validarPassword() && validarConfirmPassword() && validarTerms() && validarNombreUsuario()) {
        subir_imagen();
        registrarse();
    }

}

function validarNombreUsuario() {
    usuario = nombres = document.getElementById("nombreUsuario").value;
    const regExp = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;

    if(usuario.match(regExp) != null){
        document.getElementById("errorNombreUsuario2").style.display = "none";
        document.getElementById("errorNombreUsuario3").style.display = "none";
        return true;
    }else{
        document.getElementById("errorNombreUsuario2").style.display = "block";
        document.getElementById("errorNombreUsuario3").style.display = "block";
        document.getElementById("errorNombreUsuario").style.display = "none";
        return false;
    }

}

function validarPassword() {
    password = document.getElementById("password").value;
    const regExp = /(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
    if (password.match(regExp) != null) {
        if (password.length > 7 && password.length < 17) {
            document.getElementById("errorPassword1").style.display = "none";
            document.getElementById("errorPassword2").style.display = "none";
            return true;
        } else {
            document.getElementById("errorPassword2").style.display = "block";
            return false;
        }
    } else {
        document.getElementById("errorPassword1").style.display = "block";
        return false;
    }
}

function validarConfirmPassword() {
    password = document.getElementById("password").value;
    password2 = document.getElementById("confirmPassword").value;
    if (password != null && password2 != null) {
        if (password != password2) {
            document.getElementById("errorConfirmPassword").style.display = "block";
            return false;
        } else {
            document.getElementById("errorConfirmPassword").style.display = "none";
            return true;
        }
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

function validarTerms() {
    terms = document.getElementById("invalidCheck").value;
    if (terms == "no") {
        document.getElementById("errorTerms").style.display = "block";
        return false;
    } else {
        document.getElementById("errorTerms").style.display = "none";
        return true;
    }
}

function aceptarTerminos() {
    terminos = document.getElementById("invalidCheck").value;
    if (terminos == "si") {
        document.getElementById("invalidCheck").value = "no";
    } else {
        document.getElementById("invalidCheck").value = "si";
    }
}




