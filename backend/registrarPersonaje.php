<?php
    require("Conexion.php");

    if(isset($_POST['nombrePersonaje'], $_POST['tipoPersonaje'], $_POST['descripcionPersonaje']) and 
    !empty($_POST['nombrePersonaje']) and !empty($_POST['tipoPersonaje']) and !empty($_POST['descripcionPersonaje'])){

        $nombre = $_POST['nombrePersonaje'];
        $tipo = $_POST['tipoPersonaje'];
        $descripcion = $_POST['descripcionPersonaje'];
        $img = $_FILES['file']['name'];
        $likes = 0;
        $dislikes = 0;

        $con = new Conexion();
        $pdo = $con->conectar();

        $sqlV = ("SELECT '*' FROM personaje WHERE nombre = '" . $nombre . "'");
        $resul = mysqli_query($pdo, $sqlV);
        $estancia = mysqli_num_rows($resul);
        if ($estancia) {
            $respuesta['msg'] = "Este nombre de personaje ya se encuentra en uso.";
            $respuesta['ok'] = false;
        }else{
            $sql = "INSERT INTO personaje (nombre, tipo, descripcion, img, likes, dislikes) VALUES ('$nombre', '$tipo', '$descripcion', 
            '$img', '$likes', '$dislikes')";
            if(mysqli_query($pdo, $sql)){
                $respuesta['ok'] = true;
                $respuesta['status'] = 200;
                $respuesta['msg'] = "Personaje registrado.";
            }else{
                $respuesta['msg'] = "Problemas al registrar el personaje.";
            }
            $con -> desconectar($pdo);
        }

        
    } else {
        $respuesta['msg'] = "Debe diligenciar todos los campos";
    }

    echo json_encode($respuesta);