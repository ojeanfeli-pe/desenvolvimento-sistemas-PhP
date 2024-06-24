<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    <!-- Link para o CSS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Título da página -->
    <h1>Criar Usuário</h1>
    
    <!-- Formulário para criar usuário -->
    <form action="" method="post">
        <!-- Campo para inserir o nome de usuário -->
        <label for="">Usuário:</label>
        <input type="text" name="usuario" value="<?= $usuario ?>">

        <!-- Campo para inserir o nome -->
        <label for="">Nome:</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        
        <!-- Campo para inserir a senha -->
        <label for="">Senha:</label>
        <input type="text" name="senha" value="<?= $senha ?>">

        <!-- Botão de submit para enviar o formulário -->
        <input type="submit" value="Criar">
    </form>

    <!-- Exibição da resposta após submissão do formulário -->
    <h3> <?= $resp ?> </h3>
</body>
</html>
