<pre>
<?php 

    // Conexão com o banco de dados
    $banco = new mysqli("localhost", "root", "", "db_aula_segunda");

   // FUNCOES EM COMUM 

    //Função para inserir dados no banco de dados.
  
    function createOnDB(string $into, string $values, bool $debug=false) : void {
        global $banco;

        $q = "INSERT INTO $into VALUES $values";
        
        $resp = $banco->query($q);

        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }
    
//Função para atualizar dados no banco de dados.

    function updateOnDB($database, $set, $where, bool $debug=false) : void {
        global $banco;
        $q = "UPDATE $database SET $set WHERE $where";
        
        $resp = $banco->query($q);

        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }

    //Função para deletar dados do banco de dados.

    function deleteFromDB(string $database, string $where, bool $debug=false) : void {
        global $banco;
        
        $q = "DELETE FROM $database WHERE $where";
        $resp = $banco->query($q);

        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }
    
    // FUNCOES DE USUARIO 

    function criarUsuario($usuario, $nome, $senha, bool $debug=false) : void {
        global $banco;

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";
        
        $resp = $banco->query($q);

        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }
    

    function atualizarUsuario($usuario, $nome="", $senha="", $debug=false) : void {
        global $banco;
        
        if($nome != "" && $senha != ""){
            $senha = password_hash($senha, PASSWORD_DEFAULT);
            $set = "nome='$nome', senha='$senha'";
        }else if($nome != ""){
            $set = "nome='$nome'";
        }else if($senha != ""){
            $senha = password_hash($senha, PASSWORD_DEFAULT);
            $set = "senha='$senha'";
        }

        $q = "UPDATE usuarios SET $set WHERE usuario='$usuario'";

        $resp = $banco->query($q);
        
        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }

 //Função para buscar um usuário no banco de dados.
  
    function buscarUsuario(string $usuario, bool $debug=false) {
        global $banco;

        $q = "SELECT usuario, nome, senha FROM usuarios WHERE usuario='$usuario'";

        $busca = $banco->query($q);

        return $busca;
    }

//Função para deletar um usuário do banco de dados.

    function deletarUsuario(string $usuario, bool $debug=false) : void {
        global $banco;

        $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
        $resp = $banco->query($q);

        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }
    // Exemplos de uso das funções
    // criarUsuario("zezinho", "arthur", "senha47");
    // criarUsuario("joaozinho", "joao", "AbC1");
    // atualizarUsuario("joaozinho", "", "456", true);

?>
</pre>