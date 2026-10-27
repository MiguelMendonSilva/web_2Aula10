<?php
require('conexao.php');


$comando = "SELECT `foto`, `valor` FROM `ofertas` ORDER BY `id` DESC";

$stm = $conexao->prepare($comando);
$stm->execute();


while($resultado = $stm->fetch(PDO::FETCH_ASSOC)){

    echo "<img src='{$resultado['foto']}' height='100px'>";
    echo "<br><h2>";
    echo $resultado['valor'];
    echo "</h2><br>";
}


?>