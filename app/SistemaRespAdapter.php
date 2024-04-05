<?php
namespace Design\Patterns;
use SimpleXMLElement;
class SistemaRespAdapter {
    public function enviarDados($xmlData) {
        $jsonData = json_encode(simplexml_load_string($xmlData));

        $sistema3 = new SistemaJSON();
        $responseJson = $sistema3->receberDados($jsonData);

        $responseArray = json_decode($responseJson, true); 
        $responseXml = new SimpleXMLElement('<resposta/>');
        foreach ($responseArray as $key => $value) {
            $responseXml->addChild($key, $value);
        }

        return $responseXml->asXML();
    }
}
