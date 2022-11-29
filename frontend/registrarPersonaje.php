<?php
require("../backend/sesion.php");
require("../backend/cargarImagen.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/img/logoToy2.png">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registrar personaje</title>
</head>

<body style="background-image: url('https://th.bing.com/th/id/OIP.BZyxEK-s2bvJYHQQaD5whAHaEh?pid=ImgDet&rs=1'); background-size: 100%;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
            <Button onclick="location.href = 'https://www.pixar.com/feature-films/toy-story'" style="background: none; border: none;"> <img src="assets/img/logoToy2.png" alt="LogoToy" width="60px" height="auto"></Button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/index.php">Votar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/registrarPersonaje.php">Registrar personaje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/estadisticas.php">Estadísticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/diagramas.php">Diagramas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/calendar.php">Calendar</a>
                    </li>
                </ul>
                <form class="d-flex" style="background-color: none; height: 30px; color: white; margin-right: 30px;">
                    <div></div>
                    <img src= <?php echo $ruta?> alt="img" style="border-radius: 15px; width: 30px; height: auto; ">
                    <p><?php echo $_SESSION['user']; ?></p>
                </form>
                
            </div>
        </div>
    </nav>


    <section class="text-center text-lg-start" style="margin-left: 450px; margin-top: 50px;" >
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4 ">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Registrar</h2>
                            <form action="#" method="POST" name="form-registroPersonaje">
                                <label for="" ></label>
                                <div class="form-floating mb-3" title="Ingresa aqui el nombre del personaje" style="text-align: left;">
                                    <input type="email" class="form-control" placeholder="Nombre del personaje" id="nombrePersonaje" name="nombrePersonaje" required>
                                    <label for="floatingInput" aria-required="false">Nombre del personaje</label>
                                    <p id="errorNombrePersonaje" class="errorCampos">Ya hay un personaje con ese nombre</p>
                                    <p id="errorNombrePersonaje2" class="errorCampos">Solo se aceptan letras.</p>
                                </div>
                                <div class="form-floating mb-3" title="Ingresa aqui el nombre del personaje" style="text-align: left;">
                                    <input type="text" class="form-control" id="tipoPersonaje" name="tipoPersonaje" required>
                                    <label for="floatingInput" aria-required="false">Tipo</label>
                                    <p id="errorTipoPersonaje"  class="errorCampos">Solo se aceptan letras.</p>
                                </div>
                                <div class="form-floating mb-3" title="Ingresa aqui tu contraseña.">
                                    <input type="text" class="form-control" id="descripcionPersonaje" name="descripcionPersonaje" required>
                                    <label for="floatingInput" aria-required="true">Descripción</label>
                                    <p id="errorDescripcionPersonaje" class="errorCampos">No se aceptan comillas dobles ni sencillas.</p>
                                    <p id="errorDescripcionPersonaje2" class="errorCampos">La descripción es muy extensa, se admiten como máximo 33 palabras</p>
                                </div>

                                <div class="form-group" style="text-align: left; padding-top: 30px;">
                                    <input type="file" class="form-control-file" id="file" name="file" accept="image/jpeg,image/jpg,image/png">
                                    <p id="errorWeightFile" class="errorCampos">La imágen no debe de exceder de <b>1mb</b></p>
                                    <p id="errorFileEmpty" class="errorCampos">Debes de adjuntar la imágen.</p>
                                </div>
                            </form>

                            <p id="errorCompletarCampos" class="errorCampos">Completa todos los campos.</p>
                            <button class="btn btn-primary btn-block mb-4" id="btn-registrar" type="" onclick="validarCamposRP()">Registrar personaje</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Jumbotron -->

    </section>
    <div class="input-group has-validation" style=" width: 300px;">
        <span class="input-group-text" id="inputGroupPrepend"><img src="assets/img/salir.png" alt="logo" width="35px" height="auto" onclick="location='login.php'" style="cursor: pointer;"></span>
    </div>


    <!-- <div class="container_registroP">
        <h4>Registro de personaje</h4>
        <div class="form-floating mb-3" title="Ingresa aqui el nombre del personaje">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" aria-required="false">Nombre del personaje</label>
        </div>
        <div class="form-floating" title="Ingresa aqui tu contraseña.">
            <input type="text" class="form-control" id="description" placeholder="Password">
            <label for="floatingPassword" aria-required="true">Descripción</label>
        </div>
        <button class="btnAddImage" title="Añadir imágen del personaje."><img src="assets/img/addimage.png" alt="addImage" width="200px" height="auto"></button>
        <button type="submit" class="btn-registrar" title="Ingresar." onclick=" mostrarPersonajeRegistradoConExito()">Registrar</button>
    </div>
-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/SweetAlert.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/SweetAlert.js"></script>
    <script src="assets/js/validacionesRP.js"></script>
</body>

</html>