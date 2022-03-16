<?php

chdir(__DIR__);

require_once 'Usuario.php';
require_once '../interface/interfaceUsuario.php';

class Cliente extends Usuario implements iUsuario{

    public function __constructor(Produto $objProd = null){
        parent::__constructor();
        echo "Construtor da Classe Cliente";
    }

    public function acao(array $idProduto):bool{
        echo "Executou ação do vendedor";
        return true;
    } 
}