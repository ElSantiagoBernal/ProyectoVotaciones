<?php
require("../backend/sesion.php");
require("../backend/cargarImagen.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
    <link rel="shortcut icon" href="assets/img/logoToy2.png">
    <title>Calendar</title>
</head>

<body>

    <body style=" background-image: url('https://th.bing.com/th/id/OIP.BZyxEK-s2bvJYHQQaD5whAHaEh?pid=ImgDet&rs=1'); background-size: 100%;">


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
        <div class="container" style="background-color: white; color: black;">
            <div class="row">
                <div class="col-md-12">
                    <div id="agenda">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" enctype="multipart/form-data" name="form-eventos" id="form-eventos" method="POST">
                            <input type="text" class="form-control" id="id" name="id" style="display: none;">
                            <div class="mb-3">
                                <label for="title" class="form-label">Evento</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Título del evento">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción del evento"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="start" class="form-label">Inicio</label>
                                <input type="datetime-local" class="form-control" id="start" name="start" placeholder="Fecha de inicio">
                            </div>
                            <div class="mb-3">
                                <label for="end" class="form-label">Fin</label>
                                <input type="datetime-local" class="form-control" id="end" name="end" placeholder="Fecha de fin">
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="color" class="form-control" id="color" name="color" placeholder="Color del evento">
                            </div>
                            <div class="mb-3">
                                <label for="tipo">Tipo de edición</label>
                                <select name="editableSource" id="editableSource" disabled>
                                    <option value="none" selected>No se puede seleccionar</option>
                                    <option value="0">Editable</option>
                                    <option value="1">No editable</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="guardarEvento">Guardar</button>
                        <button type="button" class="btn btn-danger" id="eliminarEvento">eliminar</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Fin Modal -->
        <!-- EMAIL-->
        <!--<br>
        <div class="card-body text-black bg-white">
            <form action="../Backend/enviarEmail.php" method="POST" name="form-login">
                <h1 class="text-center">Manda correo</h1>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" required>
                        <label for="correo">Correo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="mensaje" class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje" required>
                        <label for="mensaje">mensaje</label>
                    </div>
                    <input type="submit" value="Enviar Mensaje" id="btnSend">
                </div>
            </form>
        </div>-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="assets/js/SweetAlert.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.min.js"></script>
        <script src="../frontend/assets/js/moment.js"></script>
        <script src="../frontend/assets/js/calendario.js"></script>
    </body>

</html>