<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>

    <?php require_once "header.php"; ?> <!-- Inclui o cabeçalho da página -->

    <h1>Lista de Tarefas:</h1>

    <?php 
        session_start(); // Inicia a sessão para acessar as variáveis de sessão
        
        // Obtém as variáveis de sessão ou define como null se não existirem
        $usuario = $_SESSION['usuario'] ?? null;
        $cod_usuario = $_SESSION['cod_usuario'] ?? null;

        // Inclui o arquivo necessário
        require_once "banco.php"; // Arquivo com funções para interagir com o banco de dados
        require_once "./Model/Lista.php"; // Arquivo com a classe Lista para operações com tarefas
        $modelLista = new Lista(); // Instancia a classe Lista

        $novaTarefa = $_POST['tarefa'] ?? null; // Obtém a nova tarefa submetida via POST
        if(!is_null($novaTarefa) && !is_null($cod_usuario)){
            // Cria uma nova tarefa se houver usuário logado
            $modelLista->criarTarefa($novaTarefa, $cod_usuario);
        }

        if(is_null($cod_usuario)){
            // Se não houver usuário logado, busca todas as tarefas
            $busca = $modelLista->pegarTarefas();
        } else {
            // Se houver usuário logado, busca apenas as tarefas desse usuário
            $busca = $modelLista->pegarTarefaDeUsuario($cod_usuario);
        }
        
        // Itera sobre os resultados da busca de tarefas
        while($obj_lista = $busca->fetch_object()){
            if(is_null($cod_usuario)){ 
                // Se não houver usuário logado, mostra a tarefa com o código do usuário
                echo "<br> - $obj_lista->tarefa [usuario: $obj_lista->cod_usuario]";
            } else {
                // Se houver usuário logado, mostra apenas a tarefa
                echo "<br> - $obj_lista->tarefa";
            }
        }
    ?>

    <hr>
    <h1>Adicionar Tarefa:</h1>
    <form action="" method="post">
        <input type="text" name="tarefa" id="">
        <input type="submit" value="Adicionar">
    </form>

</body>
</html>
