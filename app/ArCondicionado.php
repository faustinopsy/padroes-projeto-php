<?php
namespace Design\Patterns;

class ArCondicionado implements ControladorInterface {
  private static $status = false;
    public function ligar() {
        self::$status = true;
        echo "Ar-condicionado ligado.\n";
    }
    public function desligar() {
        self::$status = false;
        echo "Ar-condicionado desligado.\n";
    }
    public static function getStatus() {
        return self::$status;
    }
    public static function setStatus($status) {
        self::$status = $status;
    }
}