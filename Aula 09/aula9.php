<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        /*if(isset($_GET["n1"])){
            $n1 = $_GET["n1"];
        }else {
            $n1 = 0;
        }*/

        // $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;

        $n1 = $_GET["n1"] ?? 32.7;
    ?>


    <h1>Aula 9</h1>

    <form action="" method="get">
        <input type="text" name="n1" placeholder="<?php echo $n1;?>">
        <input type="text" name="n1" placeholder="<?= $n1 ?>">
        <input type="submit" value="Enviar">
    </form>

    <?php 
        echo "O seu numero é: {$n1}";

        /*session_start();

        echo $_SESSION["nome"];
        echo print_r($_SESSION);*/
    ?>

</body>

</html>