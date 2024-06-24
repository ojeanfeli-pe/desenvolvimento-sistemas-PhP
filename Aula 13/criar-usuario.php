<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuario</title>
</head>
<body>
    
    <h1>Novo Usuario</h1>

    <?php 

        // Inclui o arquivo com funções do banco de dados
        require_once "banco.php";

        // Obtém os dados do formulário via POST
        $usu = $_POST['usuario'] ?? null;
        $nom = $_POST['nome'] ?? null;
        $sen = $_POST['senha'] ?? null;

        // Verifica se o nome de usuário ou senha não foram fornecidos
        if(is_null($usu) || is_null($sen)){
            // Se não foram fornecidos, inclui o formulário para criar usuário
            require_once "form-criar-usuario.php";
        }else{
            // Se foram fornecidos, cria o usuário no banco de dados
            criarUsuario($usu, $nom, $sen, false);
            echo "<h2>Usuario Criado</h2>";            
        }

    ?>

</body>
</html>