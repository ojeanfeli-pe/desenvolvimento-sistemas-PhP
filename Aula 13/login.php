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
        // Inclui o arquivo com funções do banco de dados
        require_once "banco.php";

        // Obtém os valores enviados pelo formulário
        $usu = $_POST['usuario'] ?? null;
        $sen = $_POST['senha'] ?? null;

        // Se não foram recebidos usuário e senha, exibe o formulário de login
        if(is_null($usu) || is_null($sen)){
            require_once "form-login.php";
        } else {
            // require_once "form-login.php"; // para testes

            // Exibe os dados recebidos para teste
            echo "~ [Usuario: $usu - Senha: $sen] ~ <br>";

            // Busca o usuário no banco de dados
            $busca = buscarUsuario($usu);

            // Se não encontrou nenhum usuário, exibe mensagem de usuário não existente
            if($busca->num_rows == 0){
                echo "<br> Usuário não existe";
            } else {
                echo "<br> Usuario encontrado";
                
                // Obtém o objeto com os dados do usuário
                $obj = $busca->fetch_object();
                echo "<br> Nome: " . $obj->usuario;
                echo "<br> Nome: " . $obj->nome;
                echo "<br> Senha: " . $obj->senha;

                // Verifica se a senha digitada corresponde à senha armazenada no banco
                // if($sen === $obj->senha){
                if(password_verify($sen, $obj->senha)){
                    echo "<br> Login bem-sucedido!";
                } else {
                    echo "<br> Senha incorreta :/";
                }
            }
        }
    ?>

</body>

</html>
