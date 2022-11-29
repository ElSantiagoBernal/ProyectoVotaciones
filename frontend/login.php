<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="shortcut icon" href="assets/img/logoToy2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/formulario.css">

</head>
<body style="background-image: url('https://th.bing.com/th/id/OIP.BZyxEK-s2bvJYHQQaD5whAHaEh?pid=ImgDet&rs=1'); background-size: 100%;">
    <!-- <div class="container_login">
        <h4>Log In</h4>
        <form class="row g-3 needs-validation" novalidate>
            <div class="form-floating mb-3" title="Ingresa aqui tu correo electrónico.">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" required>Email address</label>
            </div>
            <div class="form-floating" title="Ingresa aqui tu contraseña.">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" required >Password</label>
            </div>
        </form>

        <button class="btn_ingresar" title="Ingresar." onclick="mostrarUsuarioIngresadoConExito()">Ingresar</button>
        <a href="../frontend/registrarUsuario.php" class="registrarse">Registrarse</a>
    </div>
-->
<!-- MENU DE OPCIONES
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
                <h3 style="color: white; margin-right: 420px; ">Ingresar</h3>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

-->

    <section class="vh-100">
        <div class="container py-5 h-70" style="background: none; border: none;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://th.bing.com/th/id/OIP.xdTE5--EcLHunNv9e932cwHaNK?pid=ImgDet&rs=1" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7  align-items-center">

                                <div class="card-body p-4 p-lg-5 text-black" >

                                    <span class="h1 fw-bold mb-0" style="margin-left: 40%; margin-bottom: 70px;">Log in</span>
                                    <form style="margin-top: 90px;" action="#" method="POST" name="form-login">
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresar a tu cuenta</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" class="form-control form-control-lg" name="nombreUsuario" id="nombreUsuario" required />
                                            <label class="form-label" for="form2Example17">Nombre de usuario</label>
                                            <p id="errorLoginUsuario" class="errorCampos">El usaurio no existe o las contraseñas no coinciden.</p>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" id="password" required />
                                            <label class="form-label" for="form2Example27">Contraseña</label>
                                        </div>
                                        <p id="errorCamposLogin" class="errorCampos">Debes completar todos los campos.</p>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-primary btn-block mb-4" type="button" onclick="validarCamposLogin();">Ingresar</button>
                                        </div>

                                        <a class="small text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81; margin-top: 20px;">¿No tienes una cuenta? <a href="../frontend/registrarUsuario.php" style="color: #393f81;">Registrarse aquí</a></p>
                                        <a href="#!" class="small text-muted">Términos de uso.</a>
                                        <div></div>
                                        <a href="#!" class="small text-muted">Política de privacidad.</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/SweetAlert.js"></script>
    <script src="../frontend/assets/js/validacionesLogin.js"></script>
</body>

</html>