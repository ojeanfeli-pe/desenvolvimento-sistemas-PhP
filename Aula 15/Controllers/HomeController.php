<?php

// Definição da classe HomeController
class HomeController {

    // Construtor da classe (vazio neste exemplo)
    function __construct() {
        
    }
    
    // Método index: exibe uma mensagem e carrega uma view com dados
    function index(){
        echo "<br>[HomeController] index()";
        
        // Dados para passar para a view
        $dados = ["titulo" => "TESTE MUITO LEGAL"];
        
        // Chamando o método para carregar a view
        $this->carregarView("testeFeliz", $dados);
    }

    // Método para carregar uma view com dados específicos
    function carregarView($nomeView, $dadosView){
        // Extrai os dados do array associativo para variáveis individuais
        extract($dadosView);

        // Caminho do arquivo da view
        $arquivo = "./$nomeView.php";

        // Verifica se o arquivo da view existe
        if(file_exists($arquivo)){
            // Inclui o arquivo da view
            require_once $arquivo;
        }else{
            // Encerra o script com uma mensagem de erro caso o arquivo não seja encontrado
            die("Erro no arquivo -> $arquivo");
        }
    }

}

?>