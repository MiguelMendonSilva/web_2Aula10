<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="salva_oferta.php" method="post" enctype="multipart/form-data">
        <label>Nome da Oferta: </label>
        <input type="text" name="nome"> <br><br>
        <label>Descrição: </label>
        <input type="text" name="desc"><br><br>
        <label>Foto: </label>
        <input type="file" name="foto"><br><br>
        <label>Link: </label>
        <input type="text" name="link"><br><br>
        <label>Valor: </label>
        <input type="text" name="valor"><br><br>

        <button type="submit">Entrar</button>
</body>
</html>