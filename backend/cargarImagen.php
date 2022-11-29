<?php
require("../backend/conexion.php");
require_once("../backend/sesion.php");

$user = $_SESSION['user'];
$con = new Conexion();
$pdo = $con->conectar();

$sql = ("SELECT img FROM usuario WHERE nombreUsuario =  '" . $user . "'");
$resul = mysqli_query($pdo, $sql);
$ruta = "";

if ($resul->num_rows > 0) {
    while ($row = $resul->fetch_assoc()) {
        $img = $row['img'];
        $ruta= "../frontend/assets/img/uploads/".$img;
    }
} else {
    echo 'Imágen no existe...';
}
$con->desconectar($pdo);
