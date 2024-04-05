<?php
namespace Design\Patterns;
class Whatsapp implements MensagemInterface {
    public function enviar($mensagem) {
        echo "Enviando mensagem push: $mensagem\n";
    }
}