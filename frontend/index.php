<?php
require("../backend/sesion.php");
require("../backend/cargarImagen.php");
require("../backend/cargarInfoPersonajes.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Votar</title>
    <link rel="shortcut icon" href="assets/img/logoToy2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/menu.css">


    <!-- CSS -->
</head>

<body style="background-image: url('https://th.bing.com/th/id/OIP.BZyxEK-s2bvJYHQQaD5whAHaEh?pid=ImgDet&rs=1'); background-size: 100%;">




    <!--<div class="cardUno">
        <div class="personaje">
            <center>
                <h2 style="margin-top: 20px;"><?php echo $name ?></h2>
            </center>
            <button class="imagenPersonaje" onclick="mostrarInformacionCardUno('<?php echo $name ?>','<?php echo $tipo ?>','<?php echo $descripcion ?>','<?php echo $likesCargar ?>', '<?php echo $dislikesCargar ?>')"> <img src='<?php echo $rutaImgPersonaje ?>' alt="Woody" width="180px" height="230px"></button>
            <form action="#" method="POST" name="form-botones">
                <div class="botones" style="margin-top: 30px;">
                    <input type="text" class="like" readonly name="btn-like1" id="btn-like1" value="Like" onclick="confirmarVotoLike()" style="text-align: center;">
                    <input type="text" class="dislike" readonly name="btn-dislike1" id="btn-like1" value="Dislike" onclick="confirmarVotoDislike()" style="text-align: center;">

                </div>
            </form>
        </div>
    </div>


    <div class="cardDos">
        <div class="personaje">
            <center>
                <h2 style="margin-top: 20px;">Buzz Lightyear</h2>
            </center>
            <button class="imagenPersonaje" onclick=" mostrarInformacionCardDos()">
                <img src="assets/img/buzz.png" alt=""></button>

            <form action="#" method="POST" name="form-botones">
                <div class="botones" style="margin-top: 60px;">
                    <input type="text" class="like" readonly name="btn-like2" id="1" value="Like" onclick="sumarLikeBuzz(), mostrarVotacionRegistradaConExito()" style="text-align: center;">
                    <input type="text" class="dislike" readonly name="btn-dislike2" id="1" value="Dislike" onclick="sumarDislikeBuzz(), mostrarVotacionRegistradaConExito()" style="text-align: center;">
                </div>

            </form>

        </div>
    </div>-->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <form class="d-flex" style="background-color: none; height: 30px; color: white; margin-right: 30px; ">
                    <img src='<?php echo $ruta ?>' alt="img" style="border-radius: 15px; width: 30px; height: auto;" onclick="">
                    <p id ><?php echo $_SESSION['user']; ?></p>
                </form>
            </div>
        </div>
    </nav>
    
    <br>
    <h3 style="color: white; margin-left: 740px; position: static;">Votar</h3>
    <br>
    <div class="container" style="background: none; border: none;">
        <!-- Tarjetas de personajes -->
        <div class="row row-cols-1 row-cols-md-4 g-4" id="tarjetas">
            <!-- <div class="col">
                <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">Descripción.</p>
                    <button type="button" class="btn btn-primary">Me gusta</button>
                    <button type="button" class="btn btn-warning">No me gusta</button>
                </div>
                </div>
            </div> -->
        </div>
        <!-- Fin Tarjetas de personajes -->
    </div>
    <div class="input-group has-validation" style="margin-top: 50px; width: 300px;">
        <span class="input-group-text" id="inputGroupPrepend"><img src="assets/img/salir.png" alt="logo" width="35px" height="auto" onclick=" location='login.php'" style="cursor: pointer;"></span>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/SweetAlert.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="../frontend/assets/js/validacionesLogin.js"></script>
    <script src="assets/js/tarjetas.js"></script>
    <!--JS-->
</body>

</html>