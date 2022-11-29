<?php
require_once("../backend/sesion.php");
require_once("../backend/conexion.php");

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $code = $_POST['id'];
    $user = $_SESSION['user'];

    $con = new Conexion();
    $pdo = $con->conectar();

    $sqlVal = ("SELECT * FROM votoxusuario WHERE usuario = '" . $user . "'" . " AND codigoPersonajeVXU = '" .$code  ."'" );
    $resultVal = mysqli_query($pdo, $sqlVal);
    
    $votos = 0;

    while ($row = $resultVal->fetch_assoc()) {
        $votos = $row['usuario'];
    }

    if ($votos == 0) {

        $sql = ("SELECT dislikes FROM personaje WHERE codigo = '" . $code . "'");
        $result = mysqli_query($pdo, $sql);

        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $dislikes = $row['dislikes'];
                }
                $newDislikes = $dislikes + 1;
                $sqlData = ("UPDATE personaje SET dislikes = " . $newDislikes . " WHERE codigo = '" . $code . "'");
                mysqli_query($pdo, $sqlData);
                $sqlDataDos = ("INSERT INTO votoxusuario (usuario, codigoPersonajeVXU) VALUES ('$user', '$code')");
                mysqli_query($pdo, $sqlDataDos);
                $respuesta['msg'] = "Voto registrado" . $user;
                $respuesta['ok'] = true;
            }
        }
    } else {
        $respuesta['ok'] = false;
        $respuesta['msg'] = "Este usuario ya votó.";
    }
    $con->desconectar($pdo);
} 

echo json_encode($respuesta);
