<?php

require('conexao.php');
session_start();

$nome_original = $_FILES['foto']['name'];
$nome_tmp = $_FILES['foto']['tmp_name'];
$destino = "imagens/$nome_original";

if (isset($_SESSION['id'])){

    move_uploaded_file($nome_tmp, $destino);

    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $desc = $_POST['desc'];
    $foto = "$destino";
    $link = $_POST['link'];
    $valor = $_POST['valor'];




    $comando = "INSERT INTO `ofertas` (`id`, `id_usuario`, `nome`, `descricao`, `foto`, `link`, `valor`) 
    VALUES (NULL, '$id', '$nome', '$desc', '$foto', '$link', '$valor');";

    $linhas = $conexao->exec($comando);



    if($linhas > 0){
        echo "Oferta cadastrada com sucesso";

    }   else{
        echo "Erro ao salvar dados";
    }

}

$conexao = null;


?>