<?php 

require __DIR__ . '/Model.class.php';

class Investimento extends Model{
    public function __construct(){
        parent::__construct(); // chama o construtor da classe pai
        $this->tabela = 'investimentos';
    }

    function inserir(array $dados):?int{
         $stmt = $this->prepare("INSERT INTO {$this->tabela} (qtd, id_ativo) VALUES (:qtd, :id_ativo)");
         $stmt->bindParam(':qtd', $dados['qtd']);
         $stmt->bindParam(':id_ativo', $dados['id_ativo']);
         if($stmt->execute()){
            return $this->lastInsertId();
      }else{
         return false;
      } 

     }

     function atualizar(int $id, array $dados):bool{
        $stmt = $this->prepare("UPDATE {$this->tabela} SET qtd = :qtd, id_ativo = :id_ativo, WHERE id = :id");
        $stmt->bindParam(':id', $id);
         $stmt->bindParam(':qtd', $dados['qtd']);
         $stmt->bindParam(':id_ativo', $dados['id_ativo']);
         $stmt->bindParam(':id_cliente', $dados['id_cliente']);
         $stmt->execute();

         if(stmt->rowCount() > 0){
            echo 'Editado';
            return true;
         }else{
            echo 'Não Editado';
            return false;
         }
     }
    
     function listar(int $id = null):?array{
         if($id){
             $stmt = $this->prepare("SELECT id,qtd,id_ativo FROM {$this->tabela} WHERE id = :id");
             $stmt->bindParam(':id', $id);
         }else{
             $stmt = $this->prepare("SELECT id,qtd,id_ativo FROM {$this->tabela}");
         }
         $lista = [];
         $stmt->execute();
         while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
          $lista[] = $registro;
         } 
         return $lista;
     }

     function carteiraCliente(int $id_cliente):?array{
        $stmt = $this->prepare("SELECT id,qtd,id_ativo FROM {$this->tabela} WHERE id_cliente = :id_cliente");
        $stmt->bindParam(':id_cliente', $id_cliente);
        $lista = [];
        $stmt->execute();
        while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
         $lista = $registro;
        } 
        return $lista;
     }
}

$investimento = new Investimento();
