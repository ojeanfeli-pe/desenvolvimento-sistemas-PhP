<pre>
<?php 

    // Conexão com o banco de dados MySQL usando MySQLi
    $banco = new mysqli("localhost", "root", "", "db-aulasegunda");

    // Função para buscar um usuário pelo nome de usuário
    function buscarUsuario($usuario){
        global $banco;
        
        // Monta a query SQL para selecionar usuário com base no nome de usuário
        $q = "SELECT usuario, nome, senha FROM usuario WHERE usuario='$usuario'";

        // Executa a query no banco de dados
        $busca = $banco->query($q);

        // Retorna o resultado da busca (um objeto mysqli_result)
        return $busca;
    }

    // Função para criar um registro de usuário no banco de dados
    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        // Hash da senha usando password_hash para armazenamento seguro
        $senha = password_hash($senha, PASSWORD_DEFAULT);

        // Monta a query SQL para inserir um novo usuário na tabela 'usuario'
        $q = "INSERT INTO usuario(cod, usuario, nome, senha) VALUES (NULL,'$usuario', '$nome', '$senha')";

        // Executa a query no banco de dados
        $resp = $banco->query($q);

        // Exibe a query executada e o resultado da execução para fins de depuração
        echo "Query: $q";
        echo var_dump($resp);
    }

    // Chamadas de função para criar usuários de exemplo
    criarUsuario("juninho", "jr", "12345");
    criarUsuario("andersulivan", "ander", "9876");
    
?>
</pre>