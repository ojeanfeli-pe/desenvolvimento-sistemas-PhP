<pre>
<?php 

    $banco = new mysqli("localhost", "root", "", "db_aula_segunda");


    function buscarUsuario($usuario){
        global $banco;

        $q = "SELECT usuario, nome, senha FROM usuarios WHERE usuario='$usuario'";

        $busca = $banco->query($q);
        // echo var_dump($busca);

        return $busca;
    }



    /*
    $busca = $banco->query("SELECT * FROM usuarios");
    echo var_dump($busca);
    echo "<br>---------------------<br>";
    
    $obj = $busca->fetch_object();
    echo var_dump($obj);
    
    echo "<br>---------------------<br>";
    
    while($obj = $busca->fetch_object()){
        echo var_dump($obj);
    }
    
    echo "<br>---------------------<br>";
    $busca = $banco->query("SELECT usuario, nome, senha 
    FROM usuarios WHERE usuario='zezinho'");

    echo var_dump($busca);
    
    $obj = $busca->fetch_object();
    echo "<br>" . $obj->usuario;
    echo "<br>" . $obj->nome;
    echo "<br>" . $obj->senha;
    */


    

   

    function createOnDB($into, $values){
        global $banco;

        $q = "INSERT INTO $into VALUES $values";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }
    
    function updateOnDB($database, $set, $where){
        global $banco;
        $q = "UPDATE $database SET $set WHERE $where";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }

    function deleteFromDB(string $database, string $where, bool $debug) : void{
        global $banco;
        
        $q = "DELETE FROM $database WHERE $where";
        $resp = $banco->query($q);
        
        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }
    



    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        // $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, 'pedroca', 'pedro', '122')";

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        // createOnDB("usuarios(cod, usuario, nome, senha)", "(NULL, '$usuario', '$nome', '$senha')");

        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";
        
        $resp = $banco->query($q);
        echo "Query: $q";
        echo var_dump($resp);
    }
    
    function atualizarUsuario($usuario, $nome="", $senha="", $debug=false){
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

        // $q = "UPDATE usuarios SET senha='$senha' WHERE usuario='$usuario'";
        $q = "UPDATE usuarios SET $set WHERE usuario='$usuario'";
        // updateOnDB("usuarios", $set, "usuario='$usuario'");
        // updateOnDB("usuarios", "nome='$nome', senha='$senha'", "usuario='$usuario'");


        $resp = $banco->query($q);
        
        if($debug){
            echo "Query: $q";
            echo var_dump($resp);
        }
    }


    function deletarUsuario(string $usuario) : void{
        global $banco;

        // deleteFromDB("usuarios", "usuario='$usuario'");
        $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
        $resp = $banco->query($q);

        echo "Query: $q";
        echo var_dump($resp);
    }
    



    // criarUsuario("zezinho", "arthur", "senha47");
    // criarUsuario("joaozinho", "joao", "AbC1");
    atualizarUsuario("joaozinho", "", "456", true);

?>
</pre>