<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        // Inclui o arquivo 'usuarios.php' uma vez (se já não estiver incluído)
        require_once "usuarios.php";

        // Obtém os valores enviados via método POST, se existirem; caso contrário, define como null
        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;

        // Verifica se tanto o usuário quanto a senha foram enviados
        if (!is_null($usuario) && !is_null($senha)) {
            // Verifica se o usuário e senha são válidos utilizando a função verUsuarios
            if (verUsuarios($usuario, $senha)) {
                echo "<br> - Fazendo Login";
                echo "<h2>Bem Vindo....</h2>";
            } else {
                echo "<br> - Tente Novamente";
                // Inclui o formulário de login novamente se o login não for válido
                require_once "form-login.php";    
            }
        } else {
            // Inclui o formulário de login se os campos não foram preenchidos
            require_once "form-login.php";
        }
    ?>

</body>

</html>