<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    
    <h1>LOGIN</h1>
    <?php 
        
        session_start(); // Inicia a sessão PHP

        require_once "banco.php"; // Inclui o arquivo de conexão com o banco de dados

        $usu = $_POST['usuario'] ?? null; // Obtém o nome de usuário do formulário
        $sen = $_POST['senha'] ?? null; // Obtém a senha do formulário

        if(is_null($usu) || is_null($sen)){
            require_once "form-login.php"; // Se usuário ou senha não foram enviados, mostra o formulário de login
        } else {
            echo "~ [Usuario: $usu - Senha: $sen] ~ <br>"; // Apenas para debug, pode ser removido

            $busca = buscarUsuario($usu); // Função para buscar o usuário no banco de dados

            if($busca->num_rows == 0){
                echo "<br> Usuário não existe"; // Mensagem se o usuário não for encontrado no banco de dados
            } else {
                $obj = $busca->fetch_object(); // Obtém o objeto com os dados do usuário

                // Verifica se a senha digitada corresponde à senha armazenada no banco (comparação segura usando password_verify)
                if(password_verify($sen, $obj->senha)){
                    echo "<br> Login realizado com sucesso!";
                    
                    // Armazena o nome de usuário na sessão para indicar que o usuário está autenticado
                    $_SESSION["usuario"] = $usu;
                    
                    // Redireciona o usuário para outra página após o login bem-sucedido
                    header("Location: dashboard.php");
                    exit; // Encerra o script após o redirecionamento
                } else {
                    echo "<br> Senha incorreta :/"; // Mensagem se a senha estiver incorreta
                }
            }
        }
    ?>

</body>
</html>
