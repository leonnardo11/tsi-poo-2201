<?php

chdir(__DIR__);
require_once '../interface/interfaceCrud.php';
require_once '../interface/interfaceUsuario.php';

class Produto implements InterfaceCrud{
  

    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $id_categoria;

  
    public function criar (array $dados):bool{
        echo "\nproduto criado";
        return true;
    }
    public function apagar(int $id):bool{
        echo "\nproduto atualizado $id\n";
        return true;
    }
    public function editar (int $id, array $dados):bool{
        echo "\nproduto deletado";
        return true;
    }

    public function listar(int $id = null): array{
        echo "\nproduto listando";
        return[];
    }

}