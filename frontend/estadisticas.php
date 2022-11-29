<?php
require("../backend/sesion.php");
require("../backend/cargarImagen.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Estadísticas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/img/logoToy2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
</head>

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
    <h3 style="color: white; margin-left: 700px; position: static;">Estadísticas</h3>
    <br>

    <!--TABLA-->
    <div class="container" style="padding: 20px; width: 70%;">
        <table id="table_personajes" class="table table-striped" style="width:100% ">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Cantidad me gustas</th>
                    <th>Cantidad no me gustas</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    
    <div class="input-group has-validation" style="margin-top: 10%; width: 300px;">
        <span class="input-group-text" id="inputGroupPrepend"><img src="assets/img/salir.png" alt="logo" width="35px" height="auto" onclick=" location='login.php'" style="cursor: pointer;"></span>
    </div>
    
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../frontend/assets/js/tabla.js"></script> 
    <script src="assets/js/SweetAlert.js"></script>

</body>

</html>