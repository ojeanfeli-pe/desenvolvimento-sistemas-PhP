<?php 

    // Exibe um título principal para a aula
    echo "<h1> Aula 07 </h1>";
    
    // Função para criar uma quebra de linha
    function quebra(){
        echo "<br>";
    }

    $str = "Janela";
    // Exibe o último caractere da string
    echo $str[-1];

    // Substitui o caractere na posição 2 por "O"
    $str[2] = "O";
    echo $str;

    quebra();

    // Exibe o primeiro caractere da string seguido por uma nova linha
    echo $str[0] . "\nanuzilda";
   
    quebra();
    // Obtém e exibe o tamanho da string
    $tamanho = strlen($str);
    echo "Tamanho STR: " . $tamanho;

    quebra();
    // Itera sobre cada caractere da string e exibe-o em uma nova linha
    for ($i = 0; $i < $tamanho; $i++) { 
        echo "<br>" . $str[$i];
    }

    // Exibe strings usando aspas duplas e simples
    echo "<br>um teste de doido ";
    echo '<br>outro teste de maluco';
    
    echo "<br>olha \n essa string ";
    echo '<br> olha essa outra \n string';

    echo "<br>olha essa \\n barra";
    echo '<br> olha essa outra \n barra';

    quebra();

    $teste = "Jean";
    // Exibe strings com interpolação de variáveis
    echo "O {$teste} agora parou de falar";
    echo '<br><br> {$teste} agora parou de falar';

    quebra();
    // Exibe strings com caracteres de escape
    echo "<br>this isn't";
    echo '<br>this isn\'t';
    //echo '<br>this isn\\'t'; // Comentado devido ao erro de sintaxe

    quebra();
    // Exibe um caminho de arquivo com caracteres de escape
    echo "<br> Deletar C:\usuario\nadmin ?";
    echo '<br> Deletar C:\usuario\nadmin ?';

    quebra();
    
    // Função simples que retorna a soma de dois números
    function soma($a, $b){
        return $a + $b;
    }

    $num = 55;
    // Diferentes maneiras de exibir uma variável em uma string
    echo "<br>O resultado é: $num.";
    echo "<br>O resultado é: {$num}.";
    echo "<br>O resultado é: " . $num . ".";
    echo '<br>O resultado é: {$num}.';

    echo "<br>O Resultado é: " . soma(10, 15) . ".";
    echo "<br>O Resultado é: {soma(10,15)}."; // Não funciona como esperado

    $array = ["Azul", "Amarelo", "Verde"];
    // Exibe um valor de array dentro de uma string
    echo "<br>Valor do array: {$array[0]}";
    echo "<br>O resultado é: " . $array[0] . ".";

    quebra();
    $a = 10;
    // Cria uma variável variável
    $$a = 20;

    echo "<br>Valor 1: {$a} - Valor 2: {$$a}";
    echo $a;
    echo $$a;
    
    quebra();
    $novaVar = 80;
    // Usa heredoc para definir uma string com múltiplas linhas
    $heredoc = <<<TESTE

        <h2> O titulo da pagina </h2>
                    <p>O texto da
                     pagina</p>
        <p> {$novaVar} </p>
    

    TESTE;

    echo $heredoc;

    // Usa nowdoc para definir uma string com múltiplas linhas sem interpolação de variáveis
    $nowdoc = <<<'OUTROTESTE'

    <h2> O titulo da pagina </h2>
                    <p>O texto da
                     pagina</p>
        <p> {$novaVar} </p>

    OUTROTESTE;

    echo $nowdoc;
    
    quebra();
    // Obtém e exibe o tamanho de uma string
    $tamanho = strlen("1234nasoid");
    echo "Tamanho: " . $tamanho;

    $str = "McDonauilds";
    // Extrai uma substring da string original
    $parte = substr($str, 2, 8);
    echo "<br>Str: {$str}";
    echo "<br>Parte: {$parte}";
    
    // Converte a substring para maiúsculas e minúsculas
    echo "<br> Maíusculo: " . strtoupper($parte);
    echo "<br> Minusculo: " . strtolower($parte);
    
    // Substitui uma substring por outra
    $nova = str_replace("ui", "", $parte);
    echo "<br>Nova: {$nova}";
   
    // Demonstração de várias funções de manipulação de strings
    $input = "Alien";
    echo str_pad($input, 10); // Produz "Alien     "
    echo str_pad($input, 10, "-=", STR_PAD_LEFT); // Produz "-=-=-Alien"
    echo str_pad($input, 10, "_", STR_PAD_BOTH); // Produz "__Alien__"
    echo str_pad($input, 6, "__"); // Produz "Alien_"
    echo str_pad($input, 3, "*"); // Produz "Alien"
    
    // Função para criar um título estilizado com asteriscos
    function titulo($texto){
        $tamanho = 10 + strlen($texto);
        
        echo "\n<br>";
        echo str_pad("", $tamanho, "*");
        echo "\n<br>";
        echo str_pad($texto, $tamanho, "*", STR_PAD_BOTH);
        echo "\n<br>";
        echo str_pad("", $tamanho, "*");
        echo "\n<br>";
    }

    // Chama a função titulo com diferentes argumentos
    titulo("Aula Strings");
    titulo("Aula Strings - Aula Formulario");

?>