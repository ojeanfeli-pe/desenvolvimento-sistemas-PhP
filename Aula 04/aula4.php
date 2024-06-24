<?php 

    echo "<h2> AULA 4 - FOR </h2>";

    echo "<h3>FOR</h3>";
    // Loop for que executa de 0 a 9
    for ($var = 0; $var < 10; $var++){
        echo "Viva o PHP! - {$var} <br>";
    }
    
    echo "<h3>WHILE</h3>";
    
    echo "0 a 50 - 2 em 2: ";
    $a = 0;
    // Loop while que incrementa $a de 2 em 2 até 50
    while ($a <= 50):
        echo " {$a} ";
        $a += 2;
    endwhile;
    
    // Outro loop while que continua de onde o anterior parou, mas não será executado
    while ($a <= 50){
        echo " {$a} ";
        $a += 2;
    }
    
    echo "<h3>DO WHILE</h3>";
    
    $numero = 86;
    // Loop do-while que será executado pelo menos uma vez
    do {
        echo "Numero: {$numero} <br>"; 
        $numero += 3;
    } while($numero < 85); // Condição falsa, então o loop só executa uma vez
    
    echo "<h3>LISTA / ARRAY</h3>";
    // Declaração e inicialização de um array
    $comidas = array("Batata", "Miojo", "Polenta");

    // Exibindo um elemento específico do array
    echo $comidas[2];
    echo "<br>";
    
    // Modificando e adicionando elementos no array
    $comidas[3] = "Arroz";
    $comidas[1] = 50.3;
    $comidas[20] = "Feijão";
    echo print_r($comidas); // Exibe o conteúdo do array

    // Conta o número de elementos no array
    $totalComida = count($comidas);
    echo "<br> {$totalComida}";

    echo "<br><br>Lista de Compra: ";

    // Comentário: Loop for comentado
    /*
    for ($i=0; $i < $totalComida; $i++) { 
        echo "<li>Item {$i}: - " . $comidas[$i];
    }
    */

    // Loop foreach para iterar sobre os elementos do array
    foreach ($comidas as $comida){
        echo "<li>Item: - " . $comida;
    }

    /*
        Comentário explicativo sobre o array
        $comidas[2]

        //  [0] => Batata [1] => Miojo [2] => Polenta 
        [3] => Arroz [20] => Feijão
        
        para cada $comida dentro $comidas faça:
            $comida 
    */

    echo "<h3>Array com Índice em String: </h3>";
    // Declaração e inicialização de um array associativo
    $pessoa = array("nome" => "Rogerio", "idade" => 15);
    echo print_r($pessoa); // Exibe o conteúdo do array

    // Loop foreach para iterar sobre os elementos do array associativo
    foreach ($pessoa as $key => $value) {
        echo "<li> {$key} - {$value}";
    }

    echo "<h3>Array de Arrays: </h3>";
    // Declaração e inicialização de um array multidimensional
    $varias_pessoas = array(
        "pessoa1" => array("nome" => "José", "idade" => 15, "esta" => "feliz"),
        "pessoa2" => array("nome" => "Maria", "idade" => 17, "esta" => "triste"),
        "pessoa3" => array("nome" => "Arthur", "idade" => 18, "esta" => "com fome")
    );

    // Loop foreach para iterar sobre cada pessoa no array multidimensional
    foreach($varias_pessoas as $uma_pessoa){
        echo "<br><br>";
        // echo print_r($uma_pessoa); // Comentado para exibição direta dos elementos

        foreach ($uma_pessoa as $key => $value) {
            echo "<li> {$key} - {$value}";
        }
    }

    // Declaração e inicialização de um array multidimensional com chaves mistas
    $array_de_arrays = [
        array("Al Joao"=> ["Joao", "Outro Joao"], "Maria", "José"), 
        array("Al Joao"=> 20, 30, 17), 
        array("Al Joao"=> true, true, false)
    ];

    // Exibe o conteúdo do array multidimensional
    // $array_de_arrays[0]["Al Joao"]
    echo print_r($array_de_arrays);

?>