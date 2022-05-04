<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='
    1'>
        <thead >
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Total Ativos</th>
                <th>Ver Carteira</th>    
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente){
                echo "<tr>
                <td>{$cliente['id']}</td>
                <td>{$cliente['nome']}</td>
                <td>{$cliente['total_ativos']}</td>
                <td><a href='carteira.php?id={$cliente['id']}'>Ver Carteira</a></td>
                </tr>";
            }
            ?>
            
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>