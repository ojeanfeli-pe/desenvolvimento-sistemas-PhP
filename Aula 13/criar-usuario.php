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

        require_once "banco.php";

        $usu = $_POST['usuario'] ?? null;
        $nom = $_POST['nome'] ?? null;
        $sen = $_POST['senha'] ?? null;

        if(is_null($usu) || is_null($sen)){
            require_once "form-criar-usuario.php";
        }else{
            // require_once "form-criar-usuario.php"; // para testes
            // echo "~ [Usuario: $usu - Nome: $nom - Senha: $sen] ~ <br>";
            criarUsuario($usu, $nom, $sen, false);
            echo "<h2>Usuario Criado</h2>";            
        }

    ?>

</body>
</html>
