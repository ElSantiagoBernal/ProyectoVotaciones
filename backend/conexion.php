<?php
class Conexion
{
    const DB_HOST = "localhost";
    const DB_NAME = "bd_votaciones";
    const DB_USERNAME = "root";
    const DB_PASSWORD = "Santiibernal10";

    public function conectar()
    {
        $host = self::DB_HOST;
        $db = self::DB_NAME;
        $username = self::DB_USERNAME;
        $pass = self::DB_PASSWORD;

        $conexion = mysqli_connect($host, $username, $pass, $db) or die("Error en la conexión.");
        return $conexion;
    }

    public function desconectar($conexion)
    {
        mysqli_close($conexion);
    }
}
