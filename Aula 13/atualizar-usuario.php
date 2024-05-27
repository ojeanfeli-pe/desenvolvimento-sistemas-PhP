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

        require_once "banco.php";

        $usu = $_POST['usuario'] ?? null;
        $nom = $_POST['nome'] ?? "";
        $sen = $_POST['senha'] ?? "";

        if(is_null($usu) || $sen == ""){
            require_once "form-criar-usuario.php";
        }else{
            require_once "form-criar-usuario.php"; // para testes
            echo "<h3>Usuario $usu atualizado..</h3>";
            // echo "~ [Usuario: $usu - Nome: $nom - Senha: $sen] ~ <br>";
            atualizarUsuario($usu, $nom, $sen, false);
            
        }

        // echo "<br>".  password_hash("senha47", PASSWORD_DEFAULT);

    ?>

</body>
</html>
