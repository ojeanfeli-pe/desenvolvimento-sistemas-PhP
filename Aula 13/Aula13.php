<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefones</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h1>SMARTPHONES</h1>

    <pre>
    <?php 

        // Inclui o arquivo de conexão com o banco de dados
        require_once "banco.php";

        // Query para selecionar dados dos smartphones e suas respectivas empresas
        $q = "SELECT s.cod, s.nome AS smartNome, e.nome AS empresa FROM smartphone s JOIN empresa e ON s.empresa_cod = e.cod";

        // Executa a query no banco de dados
        $busca = $banco->query($q);

        // Para debug: exibe o resultado da query
        echo print_r($busca);

    ?>
    </pre>

    <table>
        <tr>
            <th>COD</th>
            <th>NOME</th>
            <th>EMPRESA</th>
            <th>EDITAR</th>
        </tr>

        <?php 
        // Itera sobre os resultados da query e exibe cada smartphone e sua empresa em uma linha da tabela
        while ($obj_smartphone = $busca->fetch_object()) { 
            echo "<tr>";
            echo "<td>$obj_smartphone->cod</td>";
            echo "<td>$obj_smartphone->smartNome</td>";
            echo "<td>$obj_smartphone->empresa</td>";
            echo "<td><a href=\"editar.php?p=" . $obj_smartphone->cod . "\">editar</a></td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>

</html>