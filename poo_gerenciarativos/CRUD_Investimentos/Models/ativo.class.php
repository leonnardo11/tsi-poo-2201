<?php 

require_once __DIR__ . '/Model.class.php';

class Ativo extends Model{
    public function __construct(){
        $this->tabela = 'ativos';
        parent::__construct(); // chama o construtor da classe pai
    }

    function inserir(array $dados):?int{
      $stmt = $this->prepare("INSERT INTO {$this->tabela} (nome) VALUES (:nome)");

      $stmt->bindParam(':nome', $dados['nome']);
      if($stmt->execute()){
         echo $this->lastInsertId();
   }else{
      return false;
   }
   function atualizar(int $id, array $dados):bool{
      $stmt = $this->prepare("UPDATE{$this->tabela} SET nome =:nome WHERE id = :id");

      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':nome', $dados['nome']);


      $stmt->execute();

      if($stmt->rowCount() > 0){
         echo 'Editado';
         return true;
      }else{
         echo 'Não Editado';
         return false;
      }
    }
    function apagar(int $id):bool{
      return true;
    }
    function listar(int $id = null):?array{
     if($id){
         $stmt = $this->prepare("SELECT id, nome FROM{$this->tabela} WHERE id = :id");
         $stmt->bindParam(':id', $id);
     }else{
         $stmt = $this->prepare("SELECT  id, nome FROM {$this->tabela}");
     }

     $stmt->execute();
     $lista = [];

     $stmt->execute();
     while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
      $lista[] = $registro;
     } 
     return $lista;
  }
}
}

$ativo = new Ativo;
$ativo->inserir(['nome' => 'PETR4']);