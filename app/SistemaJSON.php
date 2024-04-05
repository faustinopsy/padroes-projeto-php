<?php
namespace Design\Patterns;
class SistemaJSON {
    public function receberDados($jsonData) {
        return json_encode(['status' => 'sucesso', 'mensagem' => 'Dados recebidos e processados Json']);
    }
}