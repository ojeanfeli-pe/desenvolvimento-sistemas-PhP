<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF SWITCH</title>
</head>

<body>

    <!-- Formulário para entrada do sexo do bebê -->
    <form action="" method="GET">
        <label for="num">Sexo do bebe:</label>
        <!-- Campo de texto para entrada do sexo -->
        <input name="sexo" id="sexo" type="text">
        <!-- Botão para submeter o formulário -->
        <button type="submit">Enviar</button>
    </form>

    <?php 
        // Verifica se o parâmetro 'sexo' foi passado na URL
        if (isset($_GET['sexo'])) {
            // Armazena o valor do parâmetro 'sexo' em uma variável
            $sexo = $_GET['sexo'];
            // Exibe o valor digitado
            echo $sexo;

            // Estrutura de controle switch para verificar o valor do sexo
            switch ($sexo) {
                case 'M':
                    // Caso o valor seja 'M', exibe 'Masculino'
                    echo "M - Masculino";
                    break;
                
                case 'F':
                    // Caso o valor seja 'F', exibe 'Feminino'
                    echo "F - Feminino";
                    break;
                
                default:
                    // Caso o valor não seja nem 'M' nem 'F', exibe 'Opção Inválida'
                    echo "Opção Inválida";
                    break;
            }
        }
    ?>

</body>

</html>