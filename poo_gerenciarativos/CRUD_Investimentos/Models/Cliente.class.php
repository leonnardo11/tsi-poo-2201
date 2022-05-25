<?php 

require_once __DIR__ . '/Model.class.php';
require_once __DIR__.'/investimento.class.php';

class Cliente extends Model{
    private Investimento $investimento;

    public function __construct(){
        parent::__construct(); // chama o construtor da classe pai
        $this->tabela = 'clientes';
        $this->investimento = new Investimento();

    }
    function inserir(array $dados):?int{
        $stmt = $this->prepare("INSERT INTO {$this->tabela} (nome, telefone) VALUES (:nome, :telefone)");
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':telefone', $dados['telefone']);

          if($stmt->execute()){
               echo $this->lastInsertId();

         }else{
            return null;
         }        

        
     }
     function atualizar(int $id, array $dados):bool{
         $stmt = $this->prepare("UPDATE clientes SET nome = :nome, telefone = :telefone WHERE id = :id");
         $stmt->bindValue(':nome', $dados['nome']);
         $stmt->bindValue(':telefone', $dados['telefone']);
         $stmt->bindValue(':id', $id);
         $stmt->execute();

         if($stmt->rowCount() > 0){
            echo 'Editado';
            return true;
         }else{
            echo 'Não Editado';
            return false;
         }
     }

    

     function listar(int $id = null):?array{
        if($id){
            $stmt = $this->prepare("SELECT id,nome,telefone FROM {$this->tabela} WHERE id = :id");
            $stmt->bindParam(':id', $id);
        }else{
            $stmt = $this->prepare("SELECT id,nome,telefone FROM {$this->tabela}");
        }
        $lista = [];
        $stmt->execute();
        while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
         $lista[] = $registro;
        } 
        return $lista;
     }

     function carteira(int $id_cliente):?array{
        return $this->investimento($id_cliente);
     }
     
}



