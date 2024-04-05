<?php
require 'vendor/autoload.php';

use Design\Patterns\MensagemInterface;
use Design\Patterns\SMS;
use Design\Patterns\Email;
use Design\Patterns\Whatsapp;

function notificarUsuario(MensagemInterface $mensageiro, $mensagem) {
    $mensageiro->enviar($mensagem);
}

notificarUsuario(new Email(), "Olá via Email!");
notificarUsuario(new SMS(), "Olá via SMS!");
notificarUsuario(new Whatsapp(), "Olá via Whatsapp!");





