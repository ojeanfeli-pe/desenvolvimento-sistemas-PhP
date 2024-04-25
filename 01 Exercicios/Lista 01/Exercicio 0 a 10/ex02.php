<!-- Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo. Obs. procure
por M_PI. -->

<?php 
    
    $raio = 3;
    $area = 3;

// CALCULANDO UM PERIMETRO
    $perimetro = 2 * M_PI * $raio;  

// CALCULANDO A ÁREA DO CIRCULO
    $area = M_PI * pow($raio, 2);

    
    echo "O perímetro do circulo é: " . $perimetro . "\n";
    echo "A área do circulo é: " . $area;

?>