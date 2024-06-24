<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Smartphone</title>
</head>

<?php 
    // Obtém o código do smartphone a ser editado da query string
    $cod = $_GET["p"] ?? null;

    // Inicializa variáveis para armazenar nome e empresa
    $nome = $_POST["nome"] ?? null;
    $empresa = $_POST["empresa"] ?? null;

    // Verifica se o código do smartphone foi passado na URL
    if(is_null($cod)){
        echo "Nenhum produto para editar."; // Mensagem caso não haja código válido
        return; // Interrompe a execução do script
    }

    require_once "banco.php"; // Inclui o arquivo de conexão com o banco de dados

    // Verifica se o nome e a empresa não foram recebidos via POST
    if(is_null($nome) || is_null($empresa)){
        // Monta a consulta SQL para buscar nome e empresa do smartphone pelo código
        $q = "SELECT nome, empresa_cod FROM smartphone WHERE cod='$cod'";
        
        // Executa a consulta
        $busca = $banco->query($q);
        
        // Obtém o objeto com os dados do smartphone
        $obj_smart = $busca->fetch_object();
        
        // Define o nome e a empresa com os valores obtidos do banco de dados
        $nome = $obj_smart->nome;
        $empresa = $obj_smart->empresa_cod;
    } else {
        // Caso tenha recebido nome e empresa via POST, atualiza o registro no banco de dados
        updateOnDB("smartphone", "nome='$nome', empresa_cod='$empresa'", "cod='$cod'");
        // Redireciona para a página de listagem após a atualização
        header("Location: Aula14.php");
    }
?>
<body>
    <!-- Formulário para editar nome e empresa do smartphone -->
    <form action="" method="post">
        <label for="">Cod:</label>
        <input type="text" name="cod" value="<?=$cod?>" disabled> <!-- Campo de código desabilitado -->
        <br><br>
        <label for="">Nome:</label>
        <input type="text" name="nome" value="<?=$nome?>"> <!-- Campo de nome preenchido com valor atual -->
        <br><br>
        <label for="">EMPRESA:</label>
        <input type="text" name="empresa" value="<?=$empresa?>"> <!-- Campo de empresa preenchido com valor atual -->

        <br><br>
        <input type="submit" value="Salvar"> <!-- Botão para enviar o formulário -->

    </form>

</body>

</html>
