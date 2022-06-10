<?php

class Usuario {

    private $bd;

    public function __construct(BD $bd){

        $this->bd =  $bd;
    }

    public function cadastrar(array $cadastro){

        $senha  = password_hash($cadastro['senha'],PASSWORD_DEFAULT);
        $nome  = $cadastro['nome'];
        $sobrenome  = $cadastro['sobrenome'];
        $email  = $cadastro['email'];


        if ($nome && $cadastro&& $email && $senha){

            if($this->jaCadastrado($email)){
                
                return [3, 'email ja cadastrado'];
            }

            $stmt = $this->bd->prepare('INSERT INTO login_user (nome, sobrenome, email, senha ) VALUES (:nome, :sobrenome, :email, :senha )');

            if ( $stmt->execute([':nome' => $nome,
                                ':sobrenome' => $sobrenome,  
                                ':email' => $email,
                                ':senha' => $senha]) 
            
                ) {

                 return true;    

            } else { 
                return [1 => 'Erro ao gravar no BD'];
            }
        }   else {
            return [2 => 'Preencha todos os campos'];
        }

    }
    public function jaCadastrado(string $email):bool{
            return false;
    }

    public function saoIguais(string $senha, string $confirma):bool{

        if($senha != $confirma){
          return false;
        }

        return true;
        
    }
}