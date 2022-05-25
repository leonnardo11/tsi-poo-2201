<?php 

abstract class Model extends PDO {
    protected string $tabela;
    public function __construct(){
        include_once '../Config/db.php';
        if(!defined('DSN') || !defined('DB_USER')){
            throw new Exception('Configurações de banco de dados não encontradas');
        }
        parent::__construct(DSN, DB_USER);
    }
    abstract function inserir(array $dados):?int;
     abstract function atualizar(int $id, array $dados):bool;

     function apagar(int $id):bool{
        {
             $stmt = $this->prepare("DELETE FROM {$this->tabela} WHERE id = :id");
             $stmt->bindParam(':id', $id);
             $stmt->execute();

             if($stmt->rowCount() > 0){
                 echo 'apagado';
                 return true;
             }else{
                   echo 'Não apagado';
                   return false;
            }
         }
      }
    abstract function listar(int $id = null):?array;
}