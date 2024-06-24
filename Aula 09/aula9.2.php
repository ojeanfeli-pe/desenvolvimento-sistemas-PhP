<?php 
    // Define o tempo de vida do cookie da sessão para 10 segundos
    session_set_cookie_params(['lifetime' => 10]);
    // Inicia a sessão ou resume a sessão existente
    session_start();
    
    // Define variáveis de sessão
    $_SESSION["nome"] = "Jean";
    $_SESSION["pessoa"] = 
    [
        "nome" => "Jean",
        "idade" => 87,
    ];

    // Exibe o ID da sessão atual
    echo session_id();
    // Exibe os dados armazenados na sessão
    echo print_r($_SESSION);

    // Comentado: Limpa todos os dados da sessão
    // session_unset();
    // Comentado: Destrói a sessão atual
    // session_destroy();
?>
