<?php
require 'vendor/autoload.php';
use Design\Patterns\Administrador;
use Design\Patterns\AdministradorSupremo;
use Design\Patterns\Professor;
use Design\Patterns\Usuario;
use Design\Patterns\UsuarioFactory;
class Login {
    public function executar() {
        $login = readline('Digite seu login: ');
        $senha = readline('Digite sua senha: ');

        $perfil = 'professor'; 
        $usuario = UsuarioFactory::criar($perfil);

        if ($usuario->autenticar($login, $senha)) {
            $autorizacoes = $usuario->autorizar();

            echo "Bem-vindo, $login! Você tem acesso às seguintes funcionalidades: " . implode(', ', $autorizacoes);
        } else {
            echo 'Login ou senha incorretos.';
        }
    }
}

$login = new Login();
$login->executar();

