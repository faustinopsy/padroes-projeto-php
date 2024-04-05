<?php
namespace Design\Patterns;
class SMS implements MensagemInterface {
    public function enviar($mensagem) {
        echo "Enviando SMS: $mensagem\n";
    }
}