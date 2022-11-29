<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrar usuario</title>
    <link rel="shortcut icon" href="assets/img/logoToy2.png">
    <link rel="stylesheet" href="assets/css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-image: url('https://th.bing.com/th/id/OIP.BZyxEK-s2bvJYHQQaD5whAHaEh?pid=ImgDet&rs=1'); background-size: 100%;">
    <!--    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <Button onclick="location.href = 'https://www.pixar.com/feature-films/toy-story'" style="background: none; border: none;"> <img src="assets/img/logoToy2.png" alt="LogoToy" width="60px" height="auto"></Button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../frontend/registrarUsuario.php">Crear cuenta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/login.php">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/index.php">Votar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/registrarPersonaje.php">Registrar personaje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../frontend/estadisticas.php">Estadísticas</a>
                    </li>
                </ul>
                <h3 style="color: white; margin-right: 380px; ">Crear cuenta</h3>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
-->

    <!--
    <div class="container_RU">
        <h4>Registrarse</h4>
        <form class="row g-3 " action="#" method="POST" name="form-registro">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombres"  name="nombres" title="Ingresa aquí tu nombre"required>
                <p id="errorNombres" class="errorCampos">Solo se aceptan letras.</p>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id = "apellidos"  name="apellidos" title="Ingresa aquí tu apellido"required>
                <p id="errorApellidos" class="errorCampos">Solo se aceptan letras.</p>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario"
                    class="errorCampos" title="Ingresa aquí tu nombre de usuario" required>
                    <p id="errorNombreUsuario" class="errorCampos">Ya hay otro usuario con ese nombre.</p>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label" id="passwordRU">Contraseña</label>
                <input type="password" class="form-control" class="errorCampos" id="password"  name="password" title="Ingresa aquí tu contraseña"required>
                <p id="errorPassword1" class="errorCampos">Debe tener una minúscula, una mayúscula y un número como mínimo.</p>
                <p id="errorPassword2" class="errorCampos">La contraseña debe tener de 8-16 caracteres.</p>
            </div>

            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" title="Ingresa aquí la descripción del personaje" required>
                <p id="errorConfirmPassword" class="errorCampos">Las contraseñas no coinciden</p>
            </div>
           
            <div class="col-12">
                <div class="form-check-accept">
                    <input class="form-check-input" type="checkbox" value="no" id="invalidCheck" onclick="aceptarTerminos()" required>
                    <label class="form-check-label" for="invalidCheck">
                        Acepto terminos y condiciones
                    </label>
                    <p id="errorTerms" class="errorCampos">Debes aceptar términos y condiciones.</p>
                </div>
            </div>
            <button class="btn btn-primary"  id="btn-registrar" type="button" onclick="validarCampos();">Registrarse</button>
        </form>
    
-->

    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
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
                            <h2 class="fw-bold mb-5">Registrarse ahora</h2>
                            <form action="#" method="POST" name="form-registro">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <!--<div class="row">
                                    
                                </div>-->

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" class="errorCampos" title="Ingresa aquí tu nombre de usuario" required>
                                    <label class="form-label" for="form3Example3">Nombre de usuario</label>
                                    <p id="errorNombreUsuario" class="errorCampos">Ya hay otro usuario con ese nombre.</p>
                                    <p id="errorNombreUsuario2" class="errorCampos">Solo se pueden utilizar caracteres alfanuméricos, guión bajo y punto.</p>
                                    <p id="errorNombreUsuario3" class="errorCampos">El punto y el guión bajo no se pueden usar a los extremos.</p>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" class="form-control" class="errorCampos" id="password" name="password" title="Ingresa aquí tu contraseña" required>
                                    <label class="form-label" for="form3Example4">Contraseña</label>
                                    <p id="errorPassword1" class="errorCampos">Debe tener una minúscula, una mayúscula y un número como mínimo.</p>
                                    <p id="errorPassword2" class="errorCampos">La contraseña debe tener de 8-16 caracteres.</p>
                                </div>

                                <!-- confirm password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" title="Ingresa aquí la descripción del personaje" required>
                                    <label class="form-label" for="form3Example4">Confirmar contraseña</label>
                                    <p id="errorConfirmPassword" class="errorCampos">Las contraseñas no coinciden</p>
                                </div>
                                <!--Insert Image-->
                                <div class="form-group" style="text-align: left; padding-top: 30px;">
                                    <input type="file" class="form-control-file" id="file" name="file" accept="image/jpeg,image/jpg,image/png">
                                    <p id="errorWeightFile" class="errorCampos">La imágen no debe de exceder de <b>1mb</b></p>
                                    <p id="errorFileEmpty" class="errorCampos">Debes adjuntar la imágen de tu usuario.</p>
                                </div>
                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <div class="form-check-accept">
                                        <input class="form-check-input" type="checkbox" value="no" id="invalidCheck" onclick="aceptarTerminos()" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Acepto términos y condiciones
                                        </label>
                                        <p id="errorTerms" class="errorCampos">Debes aceptar términos y condiciones.</p>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button class="btn btn-primary btn-block mb-4" id="btn-registrar" type="button" onclick="validarCampos();">Registrarse</button>
                                <!-- Register buttons -->
                                <!-- <div class="text-center">
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                                -->
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://www.cinemascomics.com/wp-content/uploads/2016/06/toy-story-3.jpg" class="w-100 rounded-4 shadow-4" alt="" height="900px" style="border-radius: 20px;" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/SweetAlert.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/validacionesRU.js"></script>
</body>

</html>