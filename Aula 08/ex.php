<?php 
    function formulario($nomes, ...$metodos){

        echo '<form method="' . $nomes . ' ">';
        
        foreach ($metodos as $metodo) {
            echo '<label for=" ' . $metodo . ' ">' . $metodo . ': </label><br>';
            echo '<input name="nome" id "nome" type="text"><br><br>'; 
             
        }
        echo '<button type = "submit">Enviar</button>';

        echo '</form>';
    }

    formulario( "Email", "Nome", "Idade", "Cor", "Cep");



?>