<?php 

class Banco {

    private static $instance; // Instância única da classe
    private $banco; // Objeto mysqli para conexão com o banco de dados
    private $host = "localhost"; // Host do banco de dados
    private $user = "root"; // Usuário do banco de dados
    private $password = ""; // Senha do banco de dados
    private $database = "db_aula_segunda"; // Nome do banco de dados

    // Construtor privado para evitar instâncias diretas
    private function __construct() {
    
    }

    // Método estático para obter a instância única da classe
    public static function Instance() {
        if(self::$instance === null){
            self::$instance = new self;
            // Inicia a conexão com o banco de dados
            self::$instance->banco = new mysqli(self::$instance->host, self::$instance->user, self::$instance->password, self::$instance->database);    
        }
        return self::$instance;
    }

    // Método estático para executar consultas SQL no banco de dados
    static function query($q, $debug = false) : object | bool {
        // Obtém a instância única da classe Banco e executa a query
        $resp = self::Instance()->banco->query($q);
        
        // Debug: exibe a query e o resultado da execução
        if($debug){
            echo "<br> Query: $q"; 
            echo var_dump($resp);    
        }
        
        return $resp; // Retorna o resultado da query
    }

    // Método para fazer login de um usuário
    public function fazerLogin(string $usuario, string $senha) : bool {
        $q = "SELECT cod, usuario, nome, senha FROM usuarios  WHERE usuario='$usuario'";
        
        $busca = Banco::query($q); // Executa a consulta usando o método query estático da própria classe

        if($busca->num_rows > 0){
            $usu = $busca->fetch_object();
            
            // Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
            if(password_verify($senha, $usu->senha)){
                $resp = "Login :)";

                // Inicia a sessão se ainda não estiver iniciada e armazena informações do usuário na sessão
                if(session_id() == '') {
                    session_start();
                    $_SESSION["user"] = $usuario;
                    $_SESSION["user_id"] = $usu->cod;
                }
                return true; // Login bem-sucedido
            } else {
                $resp = "Senha Inválida :/";
                return false; // Senha incorreta
            }
        }

        return false; // Usuário não encontrado
    }

    // Método para criar um novo usuário no banco de dados
    function criarUsuario(string $usuario, string $nome, string $senha, $debug = false) : void {
        // Hash da senha para armazenamento seguro
        $senha = password_hash($senha, PASSWORD_DEFAULT);

        // Monta a query de inserção
        $q = "INSERT INTO usuarios(cod, usuario, nome, senha, tipo) VALUES (NULL, '$usuario', '$nome', '$senha', 'admin')";
    
        // Executa a query usando o método query estático da própria classe
        $resp = Banco::query($q);
        
        // Debug: exibe a query e o resultado da execução
        if($debug){
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }
    }

    // Método para deletar um usuário do banco de dados
    function deletarUsuario(string $usuario, $debug = false) : void {
        // Monta a query de deleção
        $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
        
        // Executa a query usando o método query estático da própria classe
        $resp = Banco::query($q);

        // Debug: exibe a query e o resultado da execução
        if($debug){
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }
    }
    
    // Método para atualizar informações de um usuário no banco de dados
    function atualizarUsuario(string $usuario, string $nome="", string $senha="", bool $debug=false) : void {
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
        
        // Executa a query usando o método query estático da própria classe
        $resp = Banco::query($q);

        // Debug: exibe a query e o resultado da execução
        if($debug){
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }
    }

}

?>
