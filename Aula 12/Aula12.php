<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Banco</title>
</head>

<body>
    <pre>
    <?php 
        
        // Inclui o arquivo que contém a função de conexão com o banco de dados
        require_once "banco.php";

        // Obtém os dados enviados pelo formulário através do método POST
        $usu = $_POST['usuario'] ?? null;
        $sen = $_POST['senha'] ?? null;
    
        // Verifica se os dados de usuário e senha foram recebidos
        if(is_null($usu) || is_null($sen)){
            // Se um dos campos estiver vazio, exibe o formulário de login
            require_once "form-login.php";
        }else{
            // PARA TESTES: Reexibe o formulário de login (pode ser para testes, comentar em produção)
            require_once "form-login.php";

            // Exibe os dados de usuário e senha recebidos para fins de depuração
            echo "~ [Usuario: $usu - Senha: $sen]~";

            // Busca o usuário no banco de dados com base no nome de usuário
            $busca = buscarUsuario($usu);

            // Verifica se a busca retornou algum resultado (se o usuário existe)
            if($busca->num_rows == 0){
                echo "<br> Usuário não existe";
            }else{
                echo "<br> Muito bem!";

                // Obtém o objeto representando o usuário encontrado no banco de dados
                $obj = $busca->fetch_object();
                echo "<br>Usuário: " . $obj->usuario;
                echo "<br>Nome: " . $obj->nome;
                echo "<br>Senha do Banco de Dados: " . $obj->senha; 

                // Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
                // Utiliza password_verify para comparar a senha digitada com a senha hash armazenada
                if(password_verify($sen, $obj->senha)){
                    echo "<br> Sucesso! Senha correta";
                }else{
                    echo "<br> Sem sucesso: Senha incorreta";
                }
            }
        }
        // Para fins de teste ou desenvolvimento, exibe o hash de uma senha em branco
        echo "<br> Hash da senha em branco: " . password_hash("", PASSWORD_DEFAULT);
    ?>
    </pre>

</body>

</html>