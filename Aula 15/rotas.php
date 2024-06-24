<?php 

class Rotas{

    public $controller = "HomeController"; // Controlador padrão
    public $funcao = "index"; // Função padrão
    public $parametros = array(); // Array para armazenar parâmetros da URL

    function __construct() {
        $url = $this->getUrl(); // Obtém a URL e a quebra em partes

        if(is_null($url)){
            // Se não houver URL específica, ação padrão (home, por exemplo)
        }else{
            // Procura o Controller
            $nomeClasse = ucfirst($url[0]) . "Controller"; // Gera o nome da classe do controller
            $filePath = "./Controllers/$nomeClasse.php"; // Caminho do arquivo do controller

            if(file_exists($filePath)){
                $this->controller = $nomeClasse; // Define o controller encontrado
                array_shift($url); // Remove o primeiro elemento (controller) do array
            }
            
            // Procura a Função
            if(isset($url[0]) && !empty($url[0])){
                $this->funcao = $url[0]; // Define a função encontrada
                array_shift($url); // Remove a função do array
            }

            // Os elementos restantes no array são considerados parâmetros da função
            if(count($url) > 0){    
                $this->parametros = $url; // Define os parâmetros restantes
            }
        }

        require_once "./Controllers/$this->controller.php"; // Inclui o arquivo do controller
        $this->controller = new $this->controller; // Instancia o objeto do controller
        // Chama a função do controller com os parâmetros
        call_user_func_array([$this->controller, $this->funcao], $this->parametros);
    }

    // Obtém a URL e a quebra em partes
    function getUrl(){
        $url = $_GET["url"] ?? null;

        if(is_null($url)){
            return null;
        }else{
            // Separa a URL em partes usando "/"
            $url_nova = explode("/", $url);
            return $url_nova;
        }

        return null;
    }

}

?>
