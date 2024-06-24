<?php
$usuarios = [
    ["usu" => "pedroca", "nome" => "pedro", "senha" => "122"],
    ["usu" => "zezinho", "nome" => "arthur", "senha" => "senha47"],
    ["usu" => "joaozinho", "nome" => "joao", "senha" => "AbC1"]
];

// Função para verificar se o usuário e senha existem no array $usuarios
function verUsuarios($user, $sen){
    global $usuarios;  // Permite acessar a variável $usuarios dentro da função

    for ($i = 0; $i < count($usuarios); $i++) {
        if ($usuarios[$i]['usu'] == $user && $usuarios[$i]['senha'] == $sen) {
            return true;  // Retorna true se o usuário e senha forem encontrados
        }
    }

    return false;  // Retorna false se o usuário e senha não forem encontrados
}

// Exemplo de uso da função para verificar um usuário específico
// verUsuarios("joaozinho", "AbC1");
?>