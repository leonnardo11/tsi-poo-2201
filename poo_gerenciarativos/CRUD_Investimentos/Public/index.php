<?php

require_once '../Models/Cliente.class.php';
require_once '../Models/Investimento.class.php';


class Main{
    private Cliente $cliente;

    public function __construct(){
        

        $this->cliente = new Cliente();

        $this->listarClientes();
    }

    public function listarClientes(){
        $clientes = $this->cliente->listar();
        //Pra cada Cliente
       
        foreach($clientes as $cliente){
    
        $carteira = $this->cliente->carteira($cliente['id']); //Pega a carteira do cliente
        $totalAtivos = 0; //Inicializa o total de ativos


        foreach($carteira as $cadaAtivo){
            $totalAtivos += $cadaAtivo['qtd']; //Soma o total de ativos
            
        }

        
        require_once '../Views/clientes.listar.php';
       
    }
    }
}

new Main;