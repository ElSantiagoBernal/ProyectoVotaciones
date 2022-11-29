
Swal.fire({
  title: 'Cargando...',
  timer: 2000,
  timerProgressBar: true,
  allowOutsideClick: false,
  allowEscapeKey: false,
  allowEnterKey: false,
  showLoading: true,
  didOpen: () => { swal.showLoading() }
})




function mostrarInformacionCard(nombre, tipo, descripcion, likes, dislikes) {
  if (dislikes == 0) {
    dislikes = "0";
  }
  if (likes == 0) {
    likes = "0";
  }
  console.log("likes: " + likes);
  console.log("Dislikes: " + dislikes);
  Swal.fire({
    title: nombre,
    html:
      '<b>Descripción:</b> ' + descripcion +
      '<br> <b>Tipo: </b>' + tipo +
      '<br><br>Likes: ' + likes +
      '<br> Dislikes: ' + dislikes,
    confirmButtonText: 'Aceptar'
  })
}

const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

function registrarLike(id) {

  var datos = new FormData();
  datos.append("id", id);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "../backend/registrarLikePersonaje.php", true)
  ajax.onload = function (event) {
    var obj = JSON.parse(ajax.response);
    console.log(obj);
    if (obj.ok) {
      swalWithBootstrapButtons.fire(
        'Voto registrado',
        'Tu voto ha sido registrado con éxito.',
        'success'
      )
    }else{
      swalWithBootstrapButtons.fire(
        'Error',
        'Este usuario ya votó por este personaje',
        'error'
      )
    }

  }

  ajax.send(datos);
}

function registrarDislike(id) {
  var datos = new FormData();
  datos.append("id", id);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "../backend/registrarDislikePersonaje.php", true)
  ajax.onload = function (event) {
    var obj = JSON.parse(ajax.response);
    console.log(obj);
    if (obj.ok) {
      swalWithBootstrapButtons.fire(
        'Voto registrado',
        'Tu voto ha sido registrado con éxito.',
        'success'
      )
    }else{
      swalWithBootstrapButtons.fire(
        'Error',
        'Este usuario ya votó por este personaje',
        'error'
      )
    }
  }

  ajax.send(datos);
}

function confirmarLike(id) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: '¿Estás seguro?',
    text: "No podrás votar más por este personaje.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Confirmar',
    cancelButtonText: 'Cancelar',
    reverseButtons: true,
  }).then((result) => {

    if (result.isConfirmed) {
      registrarLike(id);
    } else if (
      /*Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelado',
        'Has cancelado tu voto.',
        'error'
      )

    }
  })

}

function confirmarDislike(id) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: '¿Estás seguro?',
    text: "No podrás votar más por este personaje.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Confirmar',
    cancelButtonText: 'Cancelar',
    reverseButtons: true,
  }).then((result) => {
    if (result.isConfirmed) {
      registrarDislike(id);
      swalWithBootstrapButtons.fire(
        'Voto registrado',
        'Tu voto ha sido registrado con éxito.',
        'success'
      )
    } else if (
      /*Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelado',
        'Has cancelado tu voto.',
        'error'
      )

    }
  })

}

function mostrarInformacionCardDos() {
  Swal.fire({
    title: 'Buzz Lightyear',
    html:
      'Superhéroe de juguete y una figura de acción popularmente conocido por su frase: <b>«To infinity and beyond!»</b>' +
      ' (traducida como «Al infinito... ¡y más allá!» <br><br>Likes: ' + obtenerLikes("LikesBuzz") +
      '<br> Dislikes: ' + obtenerDislikes("DislikesBuzz"),
    confirmButtonText: 'Aceptar'
  })
}

function mostrarPersonajeRegistradoConExito() {
  Swal.fire({
    icon: 'success',
    title: 'El personaje ha sido registrado con éxito.',
    showConfirmButton: false,
    timer: 1500
  })
}

function mostrarVotacionRegistradaConExito() {
  Swal.fire({
    icon: 'success',
    title: 'Tu votación se ha registrado.',
    showConfirmButton: false,
    timer: 1000
  })
}

function mostrarUsuarioRegistradoConExito() {
  Swal.fire({
    icon: 'success',
    title: 'El usuario ha sido registrado con éxito.',
    showConfirmButton: false,
    timer: 1500
  })
}

function mostrarUsuarioIngresadoConExito() {
  Swal.fire({
    icon: 'success',
    title: 'El usuario ha ingresado con éxito.',
    showConfirmButton: false,
    timer: 1500
  })
}


