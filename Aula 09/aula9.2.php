<?php 

    session_set_cookie_params(['lifetime' => 10]);
    session_start();
    
    $_SESSION["nome"] = "Jean";
    $_SESSION["pessoa"] = 
    [
        "nome" => "Jean",
        "idade" => 87,
    ];

    echo session_id();
    echo print_r($_SESSION);

    // session_unset();
    // session_destroy();


?>