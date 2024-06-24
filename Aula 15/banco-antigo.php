<?php 

$banco = new mysqli("localhost", "root", "", "db_aula_segunda");

// Função para realizar o login de um usuário
function fazerLogin(string $usuario, string $senha) : bool {
    global $banco;
    $q = "SELECT cod, usuario, nome, senha FROM usuarios WHERE usuario='$usuario'";

    $busca = $banco->query($q);

    if($busca->num_rows > 0){
        $usu = $busca->fetch_object();
        
        // Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
        if(password_verify($senha, $usu->senha)){
            return true; // Senha válida, retorna verdadeiro
        } else {
            $resp = "Senha Inválida :/"; // Senha inválida, retorna falso com mensagem de erro
            return false;
        }
        
    }

    return false; // Usuário não encontrado, retorna falso
}

// Função para criar um novo usuário no banco de dados
function criarUsuario(string $usuario, string $nome, string $senha, $debug = false) : void {
    global $banco;

    // Hash da senha para armazenamento seguro
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    // Monta a query de inserção
    $q = "INSERT INTO usuarios(cod, usuario, nome, senha, tipo) VALUES (NULL, '$usuario', '$nome', '$senha', 'admin')";

    // Executa a query
    $resp = $banco->query($q);
    
    // Debug: exibe a query e o resultado da execução
    if($debug){
        echo "<br> Query: $q"; 
        echo var_dump($resp);
    }
}

// Função para deletar um usuário do banco de dados
function deletarUsuario(string $usuario, $debug = false) : void {
    global $banco;

    // Monta a query de deleção
    $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
    
    // Executa a query
    $resp = $banco->query($q);

    // Debug: exibe a query e o resultado da execução
    if($debug){
        echo "<br> Query: $q"; 
        echo var_dump($resp);
    }
}

// Função para atualizar dados de um usuário no banco de dados
function atualizarUsuario(string $usuario, string $nome="", string $senha="", bool $debug=false) : void {
    global $banco;

    $set = "";
    if($nome != "" && $senha != ""){
        // Se ambos nome e senha forem fornecidos
        $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
        $set = "nome='$nome', senha='$novaSenha'";
    } elseif($nome != ""){
        // Se apenas o nome for fornecido
        $set = "nome='$nome'";
    } elseif ($senha != ""){
        // Se apenas a senha for fornecida
        $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
        $set = "senha='$novaSenha'";
    }
    
    // Monta a query de atualização
    $q = "UPDATE usuarios SET $set WHERE usuario='$usuario'";
    
    // Executa a query
    $resp = $banco->query($q);

    // Debug: exibe a query e o resultado da execução
    if($debug){
        echo "<br> Query: $q"; 
        echo var_dump($resp);
    }

}

?>
