<?php 
require 'vendor/autoload.php';
use Design\Patterns\SistemaXML;
use Design\Patterns\SistemaJSON;
use Design\Patterns\SistemaResp;
use Design\Patterns\SistemaRespAntesAdapter;
use Design\Patterns\SistemaRespAdapter;

class Cliente {
    public function enviarDados($data) {
            $xmlData = '<dados>
                            <nome>John Doe</nome>    
                            <idade>30</idade>
                        </dados>';
        if($data === 'json'){
            $resposta = new SistemaResp();
        }else{
            $resposta = new SistemaRespAntesAdapter();
        }
       
        echo $resposta->processarDados($xmlData);
        
    }
}


$cliente = new Cliente();
$cliente->enviarDados('json');
