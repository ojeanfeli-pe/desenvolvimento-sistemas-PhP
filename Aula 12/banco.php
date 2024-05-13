<pre>
<?php 

    $banco = new mysqli("localhost", "root", "", "db-aulasegunda");

    function buscarUsuario($usuario){
        global $banco;
        
        $q = "SELECT usuario, nome, senha FROM usuario WHERE usuario='$usuario'";

            $busca = $banco->query($q);
            //echo var_dump($busca);
            return $busca;

    }







    /*$busca = $banco->query("SELECT * FROM usuario");
    echo var_dump($busca);
    echo "<br>------------------------<br>";

    //$obj = $busca->fetch_object();
    //echo var_dump($obj);
    
    echo "<br>------------------------<br>";
    
    while($obj = $busca->fetch_object()){
        echo var_dump($obj);
    }

    echo "<br>------------------------<br>";

    $busca = $banco->query("SELECT usuario, nome, senha FROM usuario WHERE usuario='zezinho'");
    echo var_dump($busca);

    $obj = $busca->fetch_object();
    echo "<br>" . $obj->usuario;
    echo "<br>" . $obj->nome;
    echo "<br>" . $obj->senha;*/

    //ALTERAR SENHA 
    // $senhaNova = password_hash("122", PASSWORD_DEFAULT);
    // $q = "UPDATE usuario SET senha= 'senhaaa' WHERE usuario= 'pedroca'";
    // $resp = $banco-> query($q);
    // echo "Query: $q";
    // echo var_dump($resp);

    //DELETA O USUARIO DENTRO DO BANCO DE DADOS
    //$senhaNova = password_hash("122", PASSWORD_DEFAULT);
    // $q = "DELETE FROM usuario WHERE usuario= 'pedroca'";
    // $resp = $banco-> query($q);
    // echo "Query: $q";
    // echo var_dump($resp);

    function createOnDB($into, $values){
        global $banco;

        $q = "INSERT INTO $into VALUES $values";

        $resp = $banco-> query($q);
        echo "Query: $q";
        echo var_dump($resp);


    }

    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        //$q = "INSERT INTO usuario(cod, usuario, nome, senha) VALUES (NULL,'murilurva', 'murilo', '123')";

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        createOnDB("usuario(cod, usuario, nome, senha)",  "(NULL,'$usuario', '$nome', '$senha')");

        // $q = "INSERT INTO usuario(cod, usuario, nome, senha) VALUES (NULL,'$usuario', '$nome', '$senha')";
        // $resp = $banco-> query($q);
        // echo "Query: $q";
        // echo var_dump($resp);
    }

    criarUsuario("juninho", "jr", "12345");
    criarUsuario("andersulivan", "ander", "9876");
    
?>
</pre>