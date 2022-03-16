<?php

chdir(__DIR__);
require_once 'Usuario.php';
require_once '../interfaces/usuarioIntrface.php';

class Categoria implements Crud {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $id_categoria;

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