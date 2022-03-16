<?php

chdir(__DIR__);

require_once 'Usuario.php';
require_once '../interface/interfaceUsuario.php';

class Vendedor extends Usuario implements iUsuario{
    public function acao(array $idProduto):bool{
        echo "Executou ação do vendedor";
        return true;
    } 
}