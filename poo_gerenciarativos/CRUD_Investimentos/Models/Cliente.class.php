<?php 

require __DIR__ . '/Model.class.php';

class Cliente extends Model{
    public function __construct(){
        parent::__construct(); // chama o construtor da classe pai
        $this->tabela = 'clientes';

    }
    function inserir(array $dados):?int{
        $stmt = $this->prepare("INSERT INTO {$this->tabela} (nome, telefone) VALUES (:nome, :telefone)");
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':telefone', $dados['telefone']);

          if($stmt->execute()){
               echo $this->lastInsertId();
         }        

        return null;
     }
     function atualizar(int $id, array $dados):bool{
         $stmt = $this->prepare("UPDATE clientes SET nome = :nome, telefone = :telefone WHERE id = :id");
         $stmt->bindValue(':nome', $dados['nome']);
         $stmt->bindValue(':telefone', $dados['telefone']);
         $stmt->bindValue(':id', $id);
         echo 'Editado';
         return $stmt->execute();
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
     
}

$cliente = new Cliente();

var_dump($cliente->atualizar(1, ['nome' => 'Leonardo', 'telefone' => '9949-9999']));