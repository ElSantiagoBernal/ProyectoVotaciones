<?php
require("../backend/sesion.php");
require("../backend/cargarImagen.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="shortcut icon" href="assets/img/logoToy2.png">
    <title>Diagramas</title>
</head>
<body>
<body style="background-image: url('https://th.bing.com/th/id/OIP.BZyxEK-s2bvJYHQQaD5whAHaEh?pid=ImgDet&rs=1'); background-size: 100%;">

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
                    <p><?php echo $_SESSION['user']; ?></p>
                </form>
            </div>
        </div>
    </nav>

    


    <br>
    <h3 style="color: white; margin-left: 700px; position: static;">Diagramas</h3>
    <br>
    <div class="container">
        <div class="row">
            <!-- Gráficos Estadísticos -->
            <div class="col-md-4">
                <h2 class="text-center mb-2">Total Me Gustas</h2>
                <canvas id="graficoMeGusta" width="150" height="150"></canvas>
            </div>
            <div class="col-md-4 position-relative">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <h1 class="text-center" style="color:red">VS</h1>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="text-center mb-2">Total No Me Gustas</h2>
                <canvas id="graficoNoMeGusta" width="150" height="150"></canvas>
            </div>
            <!-- Fin Gráficos Estadísticos -->            
        </div>
    </div>

    <div class="input-group has-validation" style="margin-top: 50px; width: 300px;">
        <span class="input-group-text" id="inputGroupPrepend"><img src="assets/img/salir.png" alt="logo" width="35px" height="auto" onclick=" location='login.php'" style="cursor: pointer;"></span>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/SweetAlert.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="../frontend/assets/js/graficos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

    
</body>
</html>