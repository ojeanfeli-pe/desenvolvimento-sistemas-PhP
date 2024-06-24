<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php 
        require_once "header.php"; // Inclui o cabeçalho da página que provavelmente contém a navegação
        session_start(); // Inicia a sessão para acessar e armazenar variáveis de sessão
        
        $usu = $_SESSION["usuario"] ?? null; // Obtém o nome de usuário da sessão ou define como null se não existir

        if(!is_null($usu)){
            // Se o usuário já estiver logado, redireciona para a página lista.php
            header("Location: lista.php");
            exit; // Termina a execução do script para evitar qualquer saída adicional indesejada
        } else {
            // Se não estiver logado, processa o formulário de login
            require_once "banco-antigo.php"; // Inclui o arquivo com funções para interagir com o banco de dados

            $usu = $_POST['usuario'] ?? null; // Obtém o nome de usuário enviado via POST ou define como null se não enviado
            $sen = $_POST['senha'] ?? null; // Obtém a senha enviada via POST ou define como null se não enviada

            if(!is_null($usu) && !is_null($sen)){
                // Se ambos usuário e senha foram enviados via POST, procede com a validação
                
                echo "~ [Usuario: $usu - Senha: $sen] ~ <br>"; // Exibe os dados recebidos do formulário
                
                // Consulta no banco de dados para verificar se o usuário existe
                $busca = $banco->query("SELECT * FROM usuarios WHERE usuario='$usu'");

                if($busca->num_rows == 0){
                    echo "<br> Usuário não existe";
                }else{
                    $obj = $busca->fetch_object();
                    echo "<br> boa";
                    echo "<br>" . $obj->cod;
                    echo "<br>" . $obj->usuario;
                    echo "<br>" . $obj->nome;
                    echo "<br>" . $obj->senha;

                    // Verifica se a senha digitada corresponde à senha no banco de dados
                    if(password_verify($sen, $obj->senha)){
                        echo "<br> sucesso!";
                        $_SESSION["usuario"] = $usu; // Define o nome de usuário na sessão
                        $_SESSION["cod_usuario"] = $obj->cod; // Define o código do usuário na sessão
                        header("Location: lista.php"); // Redireciona para a página lista.php após o login bem-sucedido
                        exit; // Termina a execução do script após o redirecionamento
                    }else{
                        echo "<br> sem sucesso :/ Senha incorreta";
                    }
                }
            }
        }
    ?>

    <div class="container mt-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    
</body>
</html>
