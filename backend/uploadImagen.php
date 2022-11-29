<?php

if (isset($_POST['file'])) {
    $fileImage = $_POST['file'];
}
$name_temporal = $_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
move_uploaded_file($name_temporal, '../frontend/assets/img/uploads/' . $name);
$respuesta['ok'] = true;
$respuesta['status'] = 200;
$respuesta['msg'] = "Guardado exitosamente";
echo json_encode($respuesta);
