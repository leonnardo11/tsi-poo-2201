<?php 

chdir(__DIR__);

require_once '../interface/interfaceCrud.php';
require_once '../interface/interfaceUsuario.php';

class Usuario implements interfaceCrud, iUsuario{
    
    private $email;
    private $nome;
    private $id;
    private $senha;
    private $id_perfil;

    public function __constructor(){
        echo 'Construtor da Classe Usuario';
    }

    protected function xpto(){
        echo "Método XPTO";
    }

    public function criar(array $dados):bool{
        echo "\nCriado usuario\n";
        return true;
    }
    public function apagar(int $id):bool{
        echo "\nApagado usuario $id\n";
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