<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF SWITCH</title>
</head>

<body>

    <form action="" method="GET">
        <label for="num">Ano:</label>
        <input name="ano" id="ano" type="text">

        <button type="submit">Enviar</button>
    </form>


    <?php 

        $ano = $_GET['ano'];
        $idade = 2024 - $ano;
        echo "Ano: {$ano} / Idade: {$idade} >";

        if($idade > 18){
            echo "Parebens cidadao, voce pode votar e dirigir!";
        } else if ($idade == 18) {
            echo "ano especial";
        } else if($idade >= 16 && $idade < 18){
            echo "Legal, ja pode votar mas nao dirigir :/";
        } else {
            echo "Ainda não, calma lá!";
        }
        


    ?>

</body>

</html>