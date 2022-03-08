<?php 

class Usuario {
    private $nome;
    private $email;
    private $nasc;

    public function seLogar(){
        echo "Logado";
    }

    public function seDeslogar(){
        echo "Tchau"
    }

    public function setNome(){

    }
}

$leonardo = new Usuario;

$leonardo->seLogar();