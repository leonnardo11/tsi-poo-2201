<?php 

require_once 'Cliente.php';

class Main{
    private $cliente;
        private $usuario;
    public function __constructor(){
        
        $cliente = new Cliente;
    }
}

new Main;