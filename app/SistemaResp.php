<?php
namespace Design\Patterns;
class SistemaResp {
    private $adapter;

    public function __construct() {
        $this->adapter = new SistemaRespAdapter();
    }

    public function processarDados($xmlData) {
        return $this->adapter->enviarDados($xmlData);
    }
}