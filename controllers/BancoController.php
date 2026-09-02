<?php
class BancoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new UsuarioModels();
    }
        public function login() {
        $user = isset($_GET['u']) ? $_GET['u'] : '';
        $pass = isset($_GET['p']) ? $_GET['p'] : '';
        if ($user != '' & $pass != '') {
            $usuarioLogueado = $this->modelo->verificarLogin($user, $pass);
            
            if ($usuarioLogueado) {
                echo "LOGIN EXITOSO.<br>";
                echo "Bienvenido, " . $usuarioLogueado['usuario'] . "<br>";
                echo "Saldo actual: $" . $usuarioLogueado['saldo'];
            } else {
                echo "ERROR: Credenciales incorrectas.";
            }
        } else {
            echo "ADVERTENCIA: Falta ingresar usuario (u) o password (p).";
        }
        $titulo ="login"
        include "views/login.php";
    }

public function retiro() {
        $idUsuario = 1;
        $saldoActual = 1500;
        $montoRetiro = isset($_GET['monto']) ? $_GET['monto'] : 0;
        $mensaje = '';
        $nuevoSaldo = $saldoActual;

        if ($montoRetiro > 0) {
            if ($montoRetiro <= $saldoActual) {
                $nuevoSaldo = $saldoActual - $montoRetiro;
                $this->modelo->actualizarSaldo($idUsuario, $nuevoSaldo);
                $mensaje = "RETIRO APROBADO.";
            } else {
                $mensaje = "ERROR: Fondos insuficientes.";
            }
        } else {
            $mensaje = "Por favor, indique el monto a retirar en la URL (monto=X).";
        }

        $titulo = "Retiro";
        include 'views/retiro.php';
    }

    public function listarUsuarios() {
        $usuarios = $this->modelo->listarUsuarios();
        $titulo = "Listado de Usuarios";
        include 'views/usuarios.php';
    }
}
?>