<?php
require('C:\xampp\htdocs\ecoin\Banco\conectaBD.php');
error_reporting(0);
session_start();
/*if (empty($_POST['email']) || empty($_POST['password'])){
    echo '<script> Os dados fornecidos estão incorretos. </script>';
    include('login.html');
}*/
$consulta = $bd -> prepare('SELECT
                                nome, email, senha, perm
                                FROM
                                usuarios
                                WHERE
                                email = :email');
            $consulta -> execute([':email' => $_POST['email']]);
            $retornoConsulta = $consulta -> fetch(PDO::FETCH_ASSOC);
if(isset($_SESSION['usuario']) == false){
            if ($retornoConsulta['perm'] == 'admin'){
                $_SESSION['perm'] = true;
            }
            else{
                $_SESSION['perm'] = false;
            }
            if($retornoConsulta && $_POST['email'] == $retornoConsulta['email'] && password_verify($_POST['password'], $retornoConsulta['senha'])){
                $_SESSION['usuario'] = $retornoConsulta['nome'];
                echo'<script> alert("Usuário autenticado") </script>';
                echo"<meta http-equiv='refresh' content='0;url=menu.php'>";
                $_SESSION['logado'] = true;
            }
    }

else{
        if(isset($retornoConsulta['nome'])){
            echo"<meta http-equiv='refresh' content='0;url=menu.php'>";
        }
}

                            
                            




