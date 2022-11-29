<?php
require_once("../backend/sesion.php");
require_once("../backend/conexion.php");

$user = $_SESSION['user'];
$con = new Conexion();
$pdo = $con->conectar();

$sql = ("SELECT * FROM personaje WHERE codigo = '1'");
$result = mysqli_query($pdo, $sql);

if ( $result->num_rows > 0 ) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['nombre'];
        $descripcion = $row['descripcion'];
        $tipo = $row['tipo'];
        $dislikesCargar = $row['dislikes'];
        $likesCargar = $row['likes'];
        $img = $row['img'];
        $rutaImgPersonaje= "../frontend/assets/img/uploads/".$img;
    }
} 
$con->desconectar($pdo);
