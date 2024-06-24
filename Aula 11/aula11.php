<pre>
<?php 
    // Conexão com o banco de dados MySQL usando mysqli
    $banco = new mysqli("localhost", "root", "", "db_aula_segunda");
    // Verifica se houve algum erro na conexão
    if ($banco->connect_error) {
        die("Erro na conexão: " . $banco->connect_error);
    }

    // Executa uma consulta SQL para buscar informações do usuário 'zezinho'
    $busca = $banco->query("SELECT usuario, nome, senha FROM usuarios WHERE usuario = 'zezinho'");
    // Verifica se a consulta foi bem-sucedida
    if (!$busca) {
        die("Erro na consulta: " . $banco->error);
    }

    // Extrai um objeto representando o resultado da consulta
    $obj = $busca->fetch_object();

    // Imprime o objeto retornado da consulta
    echo print_r($obj);

    // Exibe os valores de cada propriedade do objeto
    echo "<br> Usuário: " . $obj->usuario;
    echo "<br> Nome: " . $obj->nome;
    echo "<br> Senha: " . $obj->senha;
    
    // Fecha a tag <pre>
?>
</pre>