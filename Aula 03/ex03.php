<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF SWITCH</title>
</head>

<body>

    <!-- Formulário para entrada do ano de nascimento -->
    <form action="" method="GET">
        <label for="num">Ano:</label>
        <!-- Campo de texto para entrada do ano -->
        <input name="ano" id="ano" type="text">
        <!-- Botão para submeter o formulário -->
        <button type="submit">Enviar</button>
    </form>

    <?php 
        // Verifica se o parâmetro 'ano' foi passado na URL
        if (isset($_GET['ano'])) {
            // Armazena o valor do parâmetro 'ano' em uma variável
            $ano = $_GET['ano'];
            // Calcula a idade com base no ano atual (2024)
            $idade = 2024 - $ano;
            // Exibe o ano e a idade calculada
            echo "Ano: {$ano} / Idade: {$idade} >";

            // Estrutura condicional para verificar a idade e exibir a mensagem correspondente
            if($idade > 18){
                // Idade maior que 18
                echo "Parabéns cidadão, você pode votar e dirigir!";
            } else if ($idade == 18) {
                // Idade igual a 18
                echo "Ano especial";
            } else if($idade >= 16 && $idade < 18){
                // Idade entre 16 e 17
                echo "Legal, já pode votar mas não dirigir :/";
            } else {
                // Idade menor que 16
                echo "Ainda não, calma lá!";
            }
        }
    ?>

</body>

</html>