<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de imagens de imoveis</title>
</head>
<body>
    <h2>Sistema de Upload de arquivos</h2>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <p>Diretório: <input type="text" name="diretorio"></p>
        <p>Cômodo: <input type="text" name="nome"></p>
        <p><input name="userfile" type="file" /></p>
        <p><button type="submit"> Enviar Arquivo</button></p>
    </form>
</body>
</html>
