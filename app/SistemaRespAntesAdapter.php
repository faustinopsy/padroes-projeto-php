<?php
namespace Design\Patterns;
class SistemaRespAntesAdapter {
    public function processarDados($xmlData) {
        $sistema3 = new SistemaXML();
        $responseXml = $sistema3->receberDados($xmlData);
        return $responseXml;
    }
}
