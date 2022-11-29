var username = "";


function sumarLikeWoody() {
    if (localStorage.getItem("LikesWoody")) {
        var total = parseInt(localStorage.getItem("LikesWoody")) + 1;
        localStorage.setItem("LikesWoody", total);
    } else {
        localStorage.setItem("LikesWoody", 1);
    }
}

function sumarDislikeWoody() {
    if (localStorage.getItem("DislikesWoody")) {
        var total = parseInt(localStorage.getItem("DislikesWoody")) + 1;
        localStorage.setItem("DislikesWoody", total);
    } else {
        localStorage.setItem("DislikesWoody", 1);
    }
}

function sumarLikeBuzz() {
    if (localStorage.getItem("LikesBuzz")) {
        var total = parseInt(localStorage.getItem("LikesBuzz")) + 1;
        localStorage.setItem("LikesBuzz", total);
    } else {
        localStorage.setItem("LikesBuzz", 1);
    }
}

function sumarDislikeBuzz() {
    if (localStorage.getItem("DislikesBuzz")) {
        var total = parseInt(localStorage.getItem("DislikesBuzz")) + 1;
        localStorage.setItem("DislikesBuzz", total);
    } else {
        localStorage.setItem("DislikesBuzz", 1);
    }
}

function obtenerLikes(Personaje) {
    return localStorage.getItem(Personaje);
}

function obtenerDislikes(personaje) {
    return localStorage.getItem(personaje);
}

function validarContraseñas (){
    var contra = document.getElementById("passwordRU").value;
    alert("La contra es " + contra);
    console.log("contra: " + contra);
}