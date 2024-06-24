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

    <?php 
        // Inclui o arquivo com funções do banco de dados
        require_once "banco.php";

        // Define a consulta SQL para buscar smartphones e suas respectivas empresas
        $q = "SELECT s.cod, s.nome AS smartNome, e.nome AS empresa FROM smartphone s JOIN empresa e ON s.empresa_cod = e.cod";

        // Executa a consulta
        $busca = $banco->query($q);

        // Exibe informações de depuração (para testes)
        echo print_r($busca);

        // Exemplo de como recuperar e exibir dados de um objeto retornados pela consulta
        // $obj_smartphone = $busca->fetch_object();
        // echo print_r($obj_smartphone);
    ?>

    <table>
        <tr>
            <th>COD</th>
            <th>NOME</th>
            <th>EMPRESA</th>
        </tr>

        <?php 
            // Itera sobre os resultados da consulta e exibe cada smartphone em uma linha da tabela
            while ($obj_smartphone = $busca->fetch_object()) { 
                echo "<tr>";
                echo "<td>$obj_smartphone->cod</td>";
                echo "<td>$obj_smartphone->smartNome</td>";
                echo "<td>$obj_smartphone->empresa</td>";
                echo "<td><a href=\"editar.php?p=" . $obj_smartphone->cod ."\">editar</a></td>";
                echo "</tr>";
            }
        ?>

    </table>

</body>

</html>
