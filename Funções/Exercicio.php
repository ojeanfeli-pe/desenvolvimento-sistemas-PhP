<?php
// Elabore um algoritmo qure receba um número n e retorne um vetor com os n primeiros termos da sequência de FIbonacci.
// Exemplo: n = 8, vetor ={1, 1, 2, 3, 5, 8, 13, 21}

function fibonacci($n)
{
    $fib = array();
    $fib[0] = 1;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}
$n = 8;
$vetor = fibonacci($n);

print_r($vetor);
?>