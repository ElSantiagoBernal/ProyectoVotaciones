<?php
require_once("sesion.php");
require_once("../backend/conexion.php");

if (isset($_POST['title'], $_POST['description']) and 
    !empty($_POST['title']) and !empty($_POST['description'])) {

    $titulo = $_POST['title'];
    $descripcion = $_POST['description'];
    $color = $_POST['color'];
    $inicio = $_POST['start'];
    $final = $_POST['end'];
    $status = "CREATED";

    $con = new Conexion();
    $pdo = $con->conectar();

    $sql = "INSERT INTO evento (title, description, status, color, start, end, editableSource) VALUES ('$titulo','$descripcion','$status','$color','$inicio','$final', 0)";
    $result = mysqli_query($pdo, $sql);

    if ($result) {
        $respuesta['ok'] = true;
        $respuesta['status'] = 200;
        $respuesta['msg'] = "Evento registrado";
    } else {
        $respuesta['msg'] = "Problemas al registrar el evento";
    }
    $con->desconectar($pdo);

} else {
    $respuesta['msg'] = "Debe diligenciar todos los campos";
}
echo json_encode($respuesta);
