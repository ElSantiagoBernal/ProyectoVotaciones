<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../frontend/login.php");
}

/*function cerrarSesion()
{
    session_destroy();
}*/