<?php
require_once("../backend/conexion.php");

if (
    isset($_POST['id'], $_POST['title'], $_POST['description']) and
    !empty($_POST['title']) and !empty($_POST['description'])
) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $color = $_POST['color'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $status = "CREATED";

    $con = new Conexion();
    $pdo = $con->conectar();

    $sqlSearch = "SELECT editableSource FROM evento WHERE id = '" . $id  . "'";
    $resultSearch = mysqli_query($pdo, $sqlSearch);
    if ($resultSearch->num_rows > 0) {
        while ($row = $resultSearch->fetch_assoc()) {
            $editableSource = $row['editableSource'];
        }
        if ($editableSource == 0) {

            $sql = "UPDATE evento SET title = '$title', description = '$description', 
                  status = '$status', color = '$color', start = '$start', end = '$end' WHERE id = '$id'";
            $result = mysqli_query($pdo, $sql);

            if ($result) {
                $respuesta['ok'] = true;
                $respuesta['status'] = 200;
                $respuesta['msg'] = "Evento actualizado";
            } else {
                $respuesta['msg'] = "Problemas al actualizar el evento";
            }
        } else {
            $respuesta['ok'] = false;
            $respuesta['msg'] = "El evento no se puede actualizar";
        }
    }
} else {
    $respuesta['msg'] = "Debe diligenciar todos los campos del evento";
}

echo json_encode($respuesta);
