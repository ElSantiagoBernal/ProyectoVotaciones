<?php
require_once("sesion.php");
require_once("../backend/conexion.php");

if(isset($_POST['id']) and !empty($_POST['id'])){
    $id = $_POST['id'];
    $con = new Conexion();
    $pdo = $con->conectar();

    $sql = "DELETE FROM evento WHERE id = '$id'";

    if(mysqli_query($pdo, $sql) ){
        $respuesta['ok'] = true;
        $respuesta['status'] = 200;
        $respuesta['msg'] = "Evento eliminado";
    }else{
        $respuesta['msg'] = "Problemas al eliminar el evento";
    }
    $con->desconectar($pdo);
} else {
    $respuesta['msg'] = "Debe diligenciar el campo id del evento";
}

echo json_encode($respuesta);
