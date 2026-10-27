<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "barrefertas";
$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$senhaUsuario = $_GET['senha'];
$email = $_GET['email'];


$comando = "SELECT * FROM `usuario` WHERE `email` = '$email' AND `senha` = '$senhaUsuario'";

$stm = $conexao->prepare($comando);
$stm->execute();

$resultado = $stm->fetch(PDO::FETCH_ASSOC);

if($resultado){

    $_SESSION['id'] = $resultado['id'] ;
    $_SESSION['nome'] = $resultado['nome'] ;
    echo "Bem vindo {$resultado['nome'] }";
    echo "<br><br>";
    echo "<a href='sair.php'>Sair</a>";
} else{
    echo "E-mail ou senha    incorreto";
}

$conexao = null;

?>