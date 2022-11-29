<?php
require("Conexion.php");

if (isset($_POST['nombreUsuario'], $_POST['password']) and !empty($_POST['nombreUsuario']) and !empty($_POST['password'])) {
    $nombreUsuario = $_POST['nombreUsuario'];
    $pass = sha1($_POST['password']);

    $con = new Conexion();
    $pdo = $con->conectar();

    $sql = ("SELECT '*' FROM usuario WHERE nombreUsuario = '" . $nombreUsuario . "'" . "AND contra = '" . $pass . "'");
    $resul = mysqli_query($pdo, $sql);
    $estancia = mysqli_num_rows($resul);
    if ($estancia) {
        /*SI ESTA EN LA BASE*/
        $respuesta['ok'] = true;
        $respuesta['status'] = 200;
        $respuesta['msg'] = "Usuario logueado.";
        session_start();
        $_SESSION['user'] = $nombreUsuario;
    } else {
        /*NO ESTA EN LA BASE*/
        $respuesta['ok'] = false;
        $respuesta['msg'] = "Problemas al loguear.";
    }
    $con->desconectar($pdo);
} else {
    $respuesta['msg'] = "Debe diligenciar todos los campos";
}

echo json_encode($respuesta);
