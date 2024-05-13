<?php 

    function formulario($metodo, ...$campos){
        // echo "Testando...";
        // echo print_r($campos);

        echo '<form action="resp.php" method="' . $metodo .'">';
        
        // para cada campo dentro do $campos faça
        foreach($campos as $camp){
            // echo "<label for=\"\"> {$camp} </label>";
            echo "\n".'<br><label for="">'. ucfirst($camp) . ':</label>';
            echo "\n".'<input type="text" name="'. $camp . '" id="">';    
        }
        
        echo "\n".'<br><input type="submit" value="Enviar">';
        echo "\n".'</form>';

    }

?>