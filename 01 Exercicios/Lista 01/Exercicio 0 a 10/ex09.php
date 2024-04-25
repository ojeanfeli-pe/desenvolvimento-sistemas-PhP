<!-- 9. Faça um script que peça a temperatura em graus Celsius, transforme e
mostre em graus Fahrenheit. -->

<?php 
   $celsius = 30;
   $fahrenheit = ($celsius * 1.8) + 32 ;
   
   echo "Qual a temperatura em Celsius? " . $celsius . "<br>";

   echo "A Temperatura em graus Fahrenheit é de: " . $fahrenheit . "<br>";
?>