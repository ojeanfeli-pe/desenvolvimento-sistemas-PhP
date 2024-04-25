<!-- 7. Faça um script que pergunte quanto você ganha por hora e o número de
horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido
mês. -->

<?php
$hora = 10;
$hrtrabalhadas = 8;
$dias = 5;
$mes = 20;
$salario = $hora * $hrtrabalhadas * $mes;

echo "Quanto você ganha por hora?  " . $hora . "<br>";
echo "Número de horas Trabalhadas?  " . $hrtrabalhadas . "<br>";
echo "Quantos dias Trabalhados no mês?  " . $mes . "<br>";
echo "Quantos dias Trabalha na semana?  " . $dias . "<br>";

echo "O salario do mês é: R$" . $salario . "<br>";


?>