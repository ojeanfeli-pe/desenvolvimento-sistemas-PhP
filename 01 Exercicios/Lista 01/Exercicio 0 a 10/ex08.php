<!-- 8. Faça um script que peça a temperatura em graus Fahrenheit, transforme e
mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9). -->

<?php 

    $fahrenheit = 50;
    $celsius = (5 * ($fahrenheit - 32) / 9);
    
    echo "Qual a temperatura em Fahrenheit? " . $fahrenheit . "<br>";

    echo "A Temperatura em graus Celsius é de: " . $celsius . "<br>";

?>