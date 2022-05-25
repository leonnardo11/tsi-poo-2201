<?php 

require __DIR__ . '/Model.class.php';

class Carteira extends Model{

    function cliente(int $id_cliente):?array{
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