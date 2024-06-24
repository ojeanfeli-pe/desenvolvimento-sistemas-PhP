<?php 

    // Declara o uso de tipos estritos no PHP
    declare(strict_types=1);

    // Define uma função simples que imprime uma mensagem
    function nomeBonito(){
        echo "Testando minha funcao bonita";
    }

    // Define uma função que cria um título H1 com o texto fornecido
    function criaTitulo($texto){
        echo "<h1>{$texto}</h1>";
    }

    // Define uma função que cria um título H2 estilizado com bordas
    function tituloLegal($texto){
        echo "<h2>##############</h2>";
        echo "<h2>## {$texto} ##</h2>";
        echo "<h2>##############</h2>";
    }

    // Chama a função criaTitulo duas vezes com argumentos diferentes
    criaTitulo("Titulo Aula 5 - Funcoes");
    criaTitulo(76876789);

    // Chama a função tituloLegal com um argumento
    tituloLegal("Calculando Medias");

    // Define uma função que calcula a média de duas notas e imprime o resultado
    function calcularMedia($nome, $nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;

        // Verifica se a média é maior ou igual a 7
        if($media >= 7){
            echo "<p>O Aluno(a) {$nome} foi aprovado com média {$media}.</p>";
        }else{
            echo "<p>O Aluno(a) {$nome} foi reprovado com média... melhor não saber. ({$media})</p>";
        }
    }

    // Chama a função calcularMedia com diferentes argumentos
    calcularMedia("Artur", 3.5, 7.0);
    calcularMedia("Felipe", "6.5", "7.0");
    // calcularMedia("Gustavo", "6a", "7u"); // Esta linha causará um erro devido a tipos incorretos

    // Define uma função que soma dois números e imprime o resultado
    function somar($num1, $num2){
        $soma = $num1 + $num2;
        echo "<li>{$num1} + {$num2} = {$soma}";
    }

    // Define uma função que soma um número variável de argumentos
    function somarNumeros(...$numeros){
        echo "<li>";
        $soma = 0;
        foreach ($numeros as $num) {
            $soma += $num;
            echo "{$num} + ";
        }
        echo " = {$soma}";
    }

    echo "Listinha somas:";
    // Chama a função somar com diferentes argumentos
    somar(4, 5);
    somar(40, 35);
    // Chama a função somarNumeros com um número variável de argumentos
    somarNumeros(3, 2, 10, 40, 20, 50);

    // Define uma função que imprime os argumentos adicionais passados
    function seila($nome, $numero, $texto, ...$numeros){
        echo "<br>";
        echo var_dump($numeros);
    }

    // Chama a função seila com vários argumentos
    seila("nome", 10, "texto", 5, 7, 9, "texto", true);

    $veradeiro = true;

    // Define uma função condicionalmente
    if($veradeiro){
        function pessoa($nome, $idade){
            echo "<br><br>Nome: {$nome} - Idade: {$idade};";
        }
    }

    // Chama a função pessoa se $veradeiro for verdadeiro
    if($veradeiro){
        pessoa("William", 25);
    }

    // Define uma função que contém outra função
    function ThunderCats(){
        echo "<br>Thunder Thunder";

        // Define uma função dentro de outra função
        function HeMan(){
            echo "<br>Eu tenho a força!";
        }
    }

    // Chama a função ThunderCats e depois HeMan
    ThunderCats();
    HeMan();

    echo "<br>";

    // Define uma função que modifica o valor de um argumento passado por referência
    function SomaDePandora(&$numero){
        $numero += 5;
        $numero = 99;
        echo "<br>Variavel Numero: {$numero}";
    }

    $valor = 10;
    echo "<br>Variavel Valor: {$valor}";
    // Chama a função SomaDePandora com o argumento $valor
    SomaDePandora($valor);
    echo "<br>Variavel Valor: {$valor}";

    // Define uma função com parâmetros padrão
    function subtracao($n1=10, $n2=5){
        $sub = $n1 - $n2;
        echo "<li> {$n1} - {$n2} = {$sub}";
    }

    // Chama a função subtracao com diferentes argumentos
    subtracao();
    subtracao(20);
    subtracao(3, 4);

    echo "<br><br>";
    // Define uma função que exige argumentos de tipo float e retorna um float
    function divisao(float $n1, float $n2):float{
        echo var_dump($n1); // Exibe o tipo e valor de $n1
        echo var_dump($n2); // Exibe o tipo e valor de $n2
        $divs = ($n1 / $n2);
        return $divs;
    }

    echo var_dump(1); // Exibe o tipo e valor do número 1
    echo var_dump(2); // Exibe o tipo e valor do número 2

    // Chama a função divisao com argumentos float
    $conta = divisao(10, 5);
    echo "<br>Conta: " . $conta;

    // Define uma função simples que imprime uma mensagem
    function estranho(){
        echo "Ola Mundo!";
    }

    // Chama a função estranho usando uma variável que contém o nome da função
    $dr = 'estranho';
    $dr();

    // Define uma função que modifica o valor de uma variável passada por referência
    function conta($n1, $n2, &$res){
        $res = $n1 + $n2;
    }

    $resultado = 0;
    // Chama a função conta e modifica $resultado
    conta(34, 21, $resultado);
    echo "<br>{$resultado}";

?>