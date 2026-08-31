<?php
class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = Database::conexion();
    }

    public function verificarLogin($usuario, $password) {
        $sql = "SELECT * FROM usuarios WHERE user = '$usuario' AND password = '$password'";
        $resultado = $this->db->query($sql);
        return $resultado->fetch_assoc()
    }
    public function actualizarSaldo($id, $nuevoSaldo) {
        $sql = "UPDATE usuarios SET saldo = $nuevoSaldo WHERE id = $id";
        return $this->db->query($sql);
    }
}
?>