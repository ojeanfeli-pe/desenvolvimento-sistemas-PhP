<?php 

    echo "<h1> Aula 07 </h1>";
    
    function quebra(){
        echo "<br>";
    }

    $str = "Janela";
    echo $str[-1];

    $str[2] = "O";
    echo $str;

    quebra();

    echo $str[0] . "\nanuzilda";
   
    quebra();
    $tamanho = strlen($str);
    echo "Tamanho STR: " . $tamanho;

    quebra();
    for ($i = 0; $i < $tamanho; $i++) { 
        echo "<br>" . $str[$i];
    }

    echo "<br>um teste de doido ";
    echo '<br>outro teste de maluco';
    
    echo "<br>olha \n essa string ";
    echo '<br> olha essa outra \n string';

    echo "<br>olha essa \\n barra";
    echo '<br> olha essa outra \n barra';

    quebra();

    $teste = "Jean";
    echo "O {$teste} agora parou de falar";
    echo '<br><br> {$teste} agora parou de falar';

    quebra();
    echo "<br>this isn't";
    echo '<br>this isn\'t';
    //echo '<br>this isn\\'t';

    quebra();
    echo "<br> Deletar C:\usuario\nadmin ?";
    echo '<br> Deletar C:\usuario\nadmin ?';

    quebra();
    
    function soma($a, $b){
        return $a + $b;
    }

    $num = 55;
    echo "<br>O resultado é: $num.";
    echo "<br>O resultado é: {$num}.";
    echo "<br>O resultado é: " . $num . ".";
    echo '<br>O resultado é: {$num}.';

    echo "<br>O Resultado é: " . soma(10,15) . ".";
    echo "<br>O Resultado é: {soma(10,15)}.";

    $array = ["Azul", "Amarelo", "Verde"];
    echo "<br>Valor do array: {$array[0]}";
    echo "<br>O resultado é: " . $array[0] . ".";

    quebra();
    $a = 10;
    $$a = 20;

    echo "<br>Valor 1: {$a} - Valor 2: {$$a}";
    echo $a;
    echo $$a;
    
    quebra();
    $novaVar = 80;
    $heredoc = <<<TESTE

        <h2> O titulo da pagina </h2>
                    <p>O texto da
                     pagina</p>
        <p> {$novaVar} </p>
    

    TESTE;

    echo $heredoc;

    $nowdoc = <<<'OUTROTESTE'

    <h2> O titulo da pagina </h2>
                    <p>O texto da
                     pagina</p>
        <p> {$novaVar} </p>

    OUTROTESTE;

    echo $nowdoc;
    
    quebra();
    $tamanho = strlen("1234nasoid");
    echo "Tamanho: " . $tamanho;

    $str = "McDonauilds";
    $parte = substr($str, 2, 8);
    echo "<br>Str: {$str}";
    echo "<br>Parte: {$parte}";
    
    echo "<br> Maíusculo: " . strtoupper($parte);
    echo "<br> Minusculo: " . strtolower($parte);
    
    $nova = str_replace("ui","", $parte);
    echo "<br>Nova: {$nova}";
   
    /*
    number_format() //formatar um número
    printf() //imprimir e formatar 
    print_r() // mostrar array

    var_dump()// mostra array e tipo de variaveis
    
    trim() //remove espaços antes e depois da string
    ltrim() // só remove oq vem antes da string
    rtrim() // só remove oq vem depois da string

    str_word_count() //contagem de palavras
    explode() // quebra elas em array ["eu", "estou", "cansado"]
    str_split()//faz a mesma que a de cima
    implode()
    join()

    strtoupper() // TUDO MAIUSCULO
    strtolower() // TUDO MINUSCULO
    ucfirst() // Só essa maiuscula
    ucwords() // As palavras ficam assim

    strrev() // retorna a string ao contrario - nome = emon
    strpos() // Janela - ela -> 3
    stripos() // Janela - Ela -> 3

    str_pad($input , 10) // preenche sempre com a quantidade de caracteres que você quer

    */

    $input = "Alien";
    echo str_pad($input, 10); //produces "Alien     "
    echo str_pad($input, 10, "-=", STR_PAD_LEFT); //produces "-=-=-Alien"
    echo str_pad($input, 10, "_", STR_PAD_BOTH); //produces "__Alien__"
    echo str_pad($input, 6, "__"); //produces "Alien_"
    echo str_pad($input, 3, "*");//produces "Alien"
    
    function titulo($texto){
        $tamanho = 10 + strlen($texto);
        
        echo "\n<br>";
        echo str_pad("",  $tamanho, "*");
        echo "\n<br>";
        echo str_pad($texto,  $tamanho, "*", STR_PAD_BOTH);
        echo "\n<br>";
        echo str_pad("",  $tamanho, "*");
        echo "\n<br>";

    }

    titulo("Aula Strings");
    titulo("Aula Strings - Aula Formulario");

?>