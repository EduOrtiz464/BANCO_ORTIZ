<?php
class Database {
    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "", "BANCO_ORTIZ");
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        return $conexion;
    }
}
?>