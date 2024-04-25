<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF SWITCH</title>
</head>

<body>

    <form action="" method="GET">
        <label for="num">Sexo do bebe:</label>
        <input name="sexo" id="sexo" type="text">

        <button type="submit">Enviar</button>
    </form>


    <?php 

        $sexo = $_GET['sexo'];
        echo $sexo;

        switch ($sexo) {
            case 'M':
                echo "M - Masculino";
                break;
            
            case 'F':
                echo "F - Feminino";
                break;
            
            default:
                echo "Opção Inválida";
                break;
        }


    ?>

</body>

</html>