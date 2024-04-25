<?php
//Função de criar um Texto, com Texto
function criarTitulo($texto)
{
    echo "<h1> ($texto) </h1>";
}
criarTitulo("Título aula 05 - Funções");
criarTitulo(25032024);
//Função calcular a média e saber se o aluno foi aprovado ou não
function calcularMedia($nome, $nota1, $nota2)
{
    $media = ($nota1 + $nota2) / 2;

    //Se a média for maior ou igual a 7 estará APROVADO, se não REPROVADO.
    if ($media >= 7) {
        echo "<p>O aluno(a) ($nome) foi aprovado com média ($media). </p> ";
    } else {
        echo "<p>O aluno(a) ($nome) foi reprovado com média... melhor nem saber.  </p>";
    }
}

//Função onde é calculado a média de cada aluno
calcularMedia("Artur", 3.5, 7.0);
calcularMedia("Emanuel", 4.5, 7.0);
calcularMedia("Filispina", 7.0, 7.0);

function somarNumero($num1, $num2)
{
    $soma = $num1 + $num2;
    echo "<li>{$num1} + {$num2} = {$soma}";
}
echo "Lista somas: ";
somarNumero(4, 5);
somarNumero(40, 35);
echo "<p>";


function somarNumeros(...$numeros)
{
    //echo print_r($numeros);
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    echo "Soma: {$soma}<p>";

    //$soma = $num1 + $num2;
    //echo "<li>{$num1} + {$num2} = {$soma}";
}

somarNumeros(40, 50, 60, 70, 80, 90, 100);
somarNumeros(100, 200, 300, 400, 500, 600, 31, 12, 11);

function seila($nome, $numero, $texto, ...$numeros)
{
    echo "<br>";
    echo var_dump($numeros);
    echo "<br>";
}

seila("nome", 20, "texto", 5, 7, 9);

$verdadeiro = true;

if ($verdadeiro) {
    function top($nome, $idade)
    {
        echo "Nome: {$nome} - Idade: {$idade}; <br>";
    }
}

top("Azul", 42);

function ThunderCats()
{
    echo "Thunder Thunder";
    function HeMan()
    {
        echo "<br> Eu tenho a Força";
    }
}

function SomaDePandora(&$numero)
{
    $numero += 5;
}

$valor = 10;

echo "<br>{$valor}";
SomaDePandora($valor);
echo "<br>{$valor}";

function subtracao($n1 = 10, $n2 = 5)
{
    $sub = $n1 - $n2;
    echo "<li> {$n1} - {$n2} = {$sub}";
}

subtracao();
subtracao(20);
subtracao(3, 4);

echo "<br> <br>";
function divisao(float $n1, float $n2)
{
    echo var_dump($n1);
    echo var_dump($n2);
    $divs = ($n1 / $n2);
    return $divs;
}

echo var_dump(1);
echo var_dump(2);
// divisão ("2", "4");

$conta = divisao(10, 5);
echo "<br>Conta: " . $conta;

function estranho()
{
    echo "Olá mundo!";
}

$dr = 'estranho';
$dr();

function conta($n1, $n2, &$res)
{
    $res = $n1 + $n2;
}

$resultado = 0;
conta(34, 21, $resultado);
echo "<br>{$resultado}";
?>