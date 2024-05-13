<?php 

    echo "<h2> AULA 4 - FOR </h2>";

    echo "<h3>FOR</h3>";
    for ($var = 0; $var < 10; $var++){
        echo "Viva o PHP! - {$var} <br>";
    }
    
    echo "<h3>WHILE</h3>";
    
    echo "0 a 50 - 2 em 2: ";
    $a = 0;
    while ($a <= 50):
        echo " {$a} ";
        $a += 2;
    endwhile;
    
    
    while ($a <= 50){
        echo " {$a} ";
        $a += 2;
    }
    
    echo "<h3>DO WHILE</h3>";
    
    $numero = 86;
    do {
        echo "Numero: {$numero} <br>"; 
        $numero += 3;
    }while($numero < 85);
    
    echo "<h3>LISTA / ARRAY</h3>";
    $comidas = array("Batata", "Miojo", "Polenta");

    echo $comidas[2];
    echo "<br>";
    
    $comidas[3] = "Arroz";
    $comidas[1] = 50.3;
    $comidas[20] = "Feijão";
    echo print_r($comidas);

    $totalComida = count($comidas);
    echo "<br> {$totalComida}";

    echo "<br><br>Lista de Compra: ";

    
    /*for ($i=0; $i < $totalComida; $i++) { 
        echo "<li>Item {$i}: - " . $comidas[$i];
    }*/

    foreach ($comidas as $comida){
        echo "<li>Item: - " . $comida;
    }


    /*
        comidas[2]

        //  [0] => Batata [1] => Miojo [2] => Polenta 
        [3] => Arroz [20] => Feijão
        
        para cada $comida dentro $comidas faça:
            $comida 


    */


    echo "<h3>Array dom Indice em Str: </h3>";
    $pessoa = array("nome" => "Rogerio", "idade" => 15);
    echo print_r($pessoa);

    foreach ($pessoa as $key => $value) {
        echo "<li> {$key} - {$value}";
    }

    echo "<h3>Array de array: </h3>";
    $varias_pessoas = array(
        "pessoa1" => array("nome" => "José", "idade" => 15, "esta" => "feliz"),
        "pessoa2" => array("nome" => "Maria", "idade" => 17, "esta" => "triste"),
        "pessoa3" => array("nome" => "Arthur", "idade" => 18, "esta" => "com fome")
    );

    foreach($varias_pessoas as $uma_pessoa){
        echo "<br><br>";
        // echo print_r($uma_pessoa);

        foreach ($uma_pessoa as $key => $value) {
            echo "<li> {$key} - {$value}";
        }


    }




    $array_de_arrays = [
        array("Al Joao"=> ["Joao", "Outro Joao"], "Maria", "José"), 
        array("Al Joao"=> 20, 30, 17), 
        array("Al Joao"=> true, true, false)
    ];

    // $array_de_arrays[0]["Al Joao"]
    echo print_r($array_de_arrays);

?>