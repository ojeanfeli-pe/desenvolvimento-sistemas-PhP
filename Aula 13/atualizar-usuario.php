<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuario</title>
</head>
<body>
    
    <h1>Atualizar Usuario</h1>

    <?php 

        // Inclui o arquivo de conexão com o banco de dados
        require_once "banco.php";

        // Obtém os dados do formulário via POST
        $usu = $_POST['usuario'] ?? null;
        $nom = $_POST['nome'] ?? "";
        $sen = $_POST['senha'] ?? "";

        // Verifica se o usuário ou senha não foram informados
        if(is_null($usu) || $sen == ""){
            // Inclui o formulário para criar usuário
            require_once "form-criar-usuario.php";
        }else{
            // Inclui o formulário para criar usuário (apenas para testes)
            require_once "form-criar-usuario.php";
            
            // Mensagem de confirmação de atualização de usuário
            echo "<h3>Usuario $usu atualizado..</h3>";
            
            // Chama a função para atualizar o usuário no banco de dados
            atualizarUsuario($usu, $nom, $sen, false);
        }

        // Para debug: exibe o hash da senha usando password_hash
        // echo "<br>".  password_hash("senha47", PASSWORD_DEFAULT);

    ?>

</body>
</html>