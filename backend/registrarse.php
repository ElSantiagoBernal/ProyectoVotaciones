<?php
require("Conexion.php");
$respuesta="";
if (
    isset($_POST['nombreUsuario'], $_POST['password'], $_POST['confirmPassword']) and
    !empty($_POST['nombreUsuario']) and !empty($_POST['password']) and !empty($_POST['confirmPassword'])
) {
    $nombreUsuario = $_POST['nombreUsuario'];
    $pass = sha1($_POST['password']);
    $img = $_FILES['file']['name'];

    $con = new Conexion();
    $pdo = $con->conectar();

    $sqlV = ("SELECT '*' FROM usuario WHERE nombreUsuario = '" . $nombreUsuario . "'");
    $resul = mysqli_query($pdo, $sqlV);
    $estancia = mysqli_num_rows($resul);
    if ($estancia) {
        $respuesta['msg'] = "Este nombre de usuario ya se encuentra en uso.";
        $respuesta['ok'] = false;
    } else {
        $sql = "INSERT INTO usuario (nombreUsuario, contra, img, votos) VALUES ('$nombreUsuario', '$pass', '$img', 0)";
        if (mysqli_query($pdo, $sql)) {
            $respuesta['ok'] = true;
            $respuesta['status'] = 200;
            $respuesta['msg'] = "Usuario registrado.";
        } else {
            $respuesta['msg'] = "Problemas al registrar el usuario.";
        }
        $con->desconectar($pdo);
    }
} else {
    $respuesta['msg'] = "Debe diligenciar todos los campos.";
}
echo json_encode($respuesta);
