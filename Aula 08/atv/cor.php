<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seletor de Cor</title>
</head>

<body>
    <h3>Selecione a cor desejada: </h3>
    <form method="post">
        <input type="color" name="cor">
        <input type="submit" value="Selecionar">
    </form>

    <?php 
    // Verifica se a cor foi selecionada e define a cor de fundo da página
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cor"])) {
        $cor = $_POST["cor"];
        echo "<style>body { background-color: $cor; }</style>";
    }
    ?>

</body>

</html>