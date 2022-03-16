<?php 

chdir(__DIR__);
require_once '../classes/Produto.php';

//$produto = new Produto();
//$array = ['Primeiro', 'Segundo', 'Terceiro', 'Quarto'];
//$produto->criar($array);
//$produto->apagar(1);
//$produto->editar(1, $array);
//$produto->listar();


class Main{

    private $produto;

    public function __construct(){
        $this->produto = new Produto;

        $vetor = [];
        $this->novo($vetor);
    }

    function novo($vetor):void{
        
        if(is_array($vetor)){
            $this->produto->criar($vetor);
        }else{
            throw 'Erro';
        }
        
    }

    public function __destruct(){
        echo 'Destrutor Executado';
    }
}

new Main;