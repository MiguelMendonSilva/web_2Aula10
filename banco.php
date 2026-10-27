<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "barrefertas";
$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$nome = $_GET['nome'];
$email = $_GET['email'];
$senhaUsuario = $_GET['senha'];

$comando = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$nome', '$email', '$senhaUsuario')";

$linhas = $conexao->exec($comando);

if($linhas > 0){
    echo "Dados Salvos com sucesso";

}   else{
    echo "Erro ao salvar dados";
}

$conexao = null;


?>