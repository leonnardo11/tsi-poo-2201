<?php

chdir(__DIR__);
require_once '../interface/interfaceCrud.php';
require_once '../interface/interfaceUsuario.php';


class Estoque implements interfaceCrud {
    private $id;
    private $qtd;
    private $id_produto;
    private $local;
    private $limite_min;
    private $produto;

    public function __construct(Produto $objProd = null){
        if(is_object($objProd)){
            $this->produto = $objProd;
        }
    }

    public function criar(array $dados):bool{
        echo "\nCriado Produto\n";
        return true;
    }
    public function apagar(int $id):bool{
        echo "\nApagado Produto $id\n";
        return true;
    }
    public function editar(int $id, array $dados):bool{
        echo "\nEditado usuario $id\n";
        return true;
    }
    public function listar(int $id = null):array{
        echo "\nListado usuario $id\n";
        return [];
    }

    function acao(array $idProduto):bool{
        echo "Acão genérica para usuários";
        return true;
    }

}