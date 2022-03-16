<?php 

require_once '../classes/Produto.php';
require_once '../classes/Estoque.php';




$produto = new Produto();

class Main{

    private $estoque;
    private $produto;


    public function __construct(){
        
        $this->produto = new Produto;
        $ObjProd = $this->produto->criar(['Melacia']);
        $this->estoque = new Estoque($this->produto);

    }

}

new Main;