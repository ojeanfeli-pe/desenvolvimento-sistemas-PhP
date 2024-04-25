<?php

// Função para criar um formulário com base nos parâmetros
function formulario($action, $method, $campos) {
    echo '<form action="' . $action . '" method="' . $method . '">';
    
    // Loop através dos campos para criar os inputs
    foreach ($campos as $campo) {
        echo '<label for="' . $campo['name'] . '">' . $campo['label'] . '</label>';
        echo '<input type="' . $campo['type'] . '" name="' . $campo['name'] . '" id="' . $campo['name'] . '"><br>';
    }
    
    echo '<input type="submit" value="Enviar">';
    echo '</form>';
}

// Exemplo de utilização
$action = "processar_formulario.php"; // O arquivo PHP que processará o formulário
$method = "post"; // Método de envio do formulário (post ou get)

// Definição dos campos do formulário
$campos = array(
    array('label' => 'Nome:', 'name' => 'nome', 'type' => 'text'),
    array('label' => 'Email:', 'name' => 'email', 'type' => 'email'),
    array('label' => 'Idade:', 'name' => 'idade', 'type' => 'number')
);

// Chamada da função para criar o formulário
formulario($action, $method, $campos);

?>