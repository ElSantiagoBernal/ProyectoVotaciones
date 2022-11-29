<?php
require_once("../backend/conexion.php");

$con = new Conexion();
$pdo = $con->conectar();

$sql = "SELECT id, title, description, status, color, start, end, editableSource FROM evento";

$result = mysqli_query($pdo, $sql);
$respuesta = $result->fetch_all(MYSQLI_ASSOC);

if ($result->num_rows <= 0) {
    $respuesta['msg'] = "No hay eventos Registrados";
} 

echo json_encode($respuesta);