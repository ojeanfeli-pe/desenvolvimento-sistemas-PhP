<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - PHP</title>
</head>

<body>

    <header style="background-color: yellow;">
        <nav>
            <ul>
                <a href="./index.html">Menu</a>
                <a href="./formulario.html">Formulario</a>
                <a href="./tabela.html">Horarios</a>
            </ul>
        </nav>
    </header>


    <h1>Página Inicial</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel dolor bibendum, varius mi ut, facilisis
        metus. Nullam fermentum ut augue ac vulputate. Cras id massa bibendum, suscipit elit ut, faucibus erat. Nulla
        consectetur auctor lorem, sit amet feugiat felis pulvinar quis. Mauris at libero a turpis sodales efficitur at
        tempus lectus. Donec non mollis ipsum. Phasellus non fringilla est, eu ultrices elit. Pellentesque eget augue
        nec ex pellentesque pellentesque et non ipsum. Curabitur orci nisi, egestas sed dapibus sit amet, imperdiet a
        ex.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor, risus vel efficitur tristique, urna nisi
        sodales velit, feugiat luctus quam purus in velit. Duis dignissim, ipsum eget eleifend auctor, nisi nulla
        molestie sapien, nec interdum est nisl sed risus. Orci varius natoque penatibus et magnis dis parturient montes,
        nascetur ridiculus mus. Fusce tristique, turpis quis porttitor congue, diam eros pellentesque elit, a lacinia
        libero nibh sed sem. Vivamus pulvinar tortor non diam commodo, ac volutpat dui malesuada. Pellentesque ac libero
        ipsum. Aenean hendrerit purus eu velit commodo vehicula. Duis non commodo enim, sit amet venenatis nibh. In sed
        justo tristique, porta enim sed, tristique quam. Etiam cursus consequat ante, et luctus ex congue vitae. Etiam
        aliquet scelerisque maximus.</p>

    <div>
        <?php
        
            $nome = "Maria";
            $idade = 16;
            $cidade = "Curitiba";
            $faculdade = true;

            echo "<h2>Olá Mundo!</h2>";
            echo "Nome: " . $nome . " - <br>";
            echo "Idade: " . $idade;
        
        
        ?>
    </div>


</body>

</html>