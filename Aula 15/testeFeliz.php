<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de View</title>
</head>
<body>
    <h1>TESTE</h1>

    <!-- Exibindo o título dinâmico -->
    <h1><?= $titulo ?></h1>

    <!-- Exibindo os dados da view -->
    <pre>
        <?php echo var_dump($dadosView); ?>
    </pre>
</body>
</html>