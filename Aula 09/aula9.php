<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        // Define $n1 como o valor recebido por GET, ou 32.7 se não houver valor
        $n1 = $_GET["n1"] ?? 32.7;
    ?>


    <h1>Aula 9</h1>

    <!-- Formulário que envia o valor de $n1 via GET -->
    <form action="" method="get">
        <!-- Campo de entrada para o valor de n1 com placeholder -->
        <input type="text" name="n1" placeholder="<?php echo $n1;?>">
        <!-- Campo de entrada para o valor de n1 utilizando short echo tag -->
        <input type="text" name="n1" placeholder="<?= $n1 ?>">
        <!-- Botão de envio do formulário -->
        <input type="submit" value="Enviar">
    </form>

    <?php 
        // Exibe o valor atual de $n1
        echo "O seu número é: {$n1}";

        /* 
        // Exemplo de uso de sessão (comentado)
        session_start();
        echo $_SESSION["nome"];
        echo print_r($_SESSION);
        */
    ?>

</body>

</html>