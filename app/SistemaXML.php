<?php
namespace Design\Patterns;
class SistemaXML {
    public function receberDados($xmlData) {
        $responseXml = '<resposta><status>sucesso</status><mensagem>Dados recebidos e processados em XML</mensagem></resposta>';
        return $responseXml;
    }
}
