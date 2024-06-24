<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>

<?php 
    // Obtém o código do produto a ser editado da query string
    $cod = $_GET["p"] ?? null;
    // Obtém os dados enviados pelo formulário
    $nome = $_POST["nome"] ?? null;
    $empresa = $_POST["empresa"] ?? null;

    // Se não houver código, exibe uma mensagem e encerra o script
    if(is_null($cod)){
        echo "Nenhum produto para editar.";
        return;
    }

    // Inclui o arquivo com funções do banco de dados
    require_once "banco.php";

    // Se não foram recebidos dados do formulário, busca os dados atuais do produto
    if(is_null($nome) || is_null($empresa)){
        // Monta a query para buscar nome e empresa do produto com o código especificado
        $q = "SELECT nome, empresa_cod FROM smartphone WHERE cod='$cod'";
        
        // Executa a busca no banco de dados
        $busca = $banco->query($q);
        // Obtém o objeto com os dados do produto
        $obj_smart = $busca->fetch_object();
        // Atribui os valores obtidos às variáveis $nome e $empresa
        $nome = $obj_smart->nome;
        $empresa = $obj_smart->empresa_cod;
    } else {
        // Se foram recebidos dados do formulário, atualiza o produto no banco de dados
        updateOnDB("smartphone", "nome='$nome', empresa='$empresa'", "cod='$cod'");
        // Redireciona para a página principal (ou outra página desejada após a edição)
        header("Location: Aula 14.php");
    }
?>

<body>
    <!-- Formulário para editar o produto -->
    <form action="" method="post">
        <label for="cod">Cod:</label>
        <input type="text" name="cod" value="<?= $cod ?>" readonly>
        <br><br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <br><br>
        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa" value="<?= $empresa ?>">
        <br><br>
        <input type="submit" value="Salvar">
    </form>

</body>

</html>