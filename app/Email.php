<?php
namespace Design\Patterns;

class Email implements MensagemInterface {
    public function enviar($mensagem) {
        echo "Enviando email: $mensagem\n";
    }
}