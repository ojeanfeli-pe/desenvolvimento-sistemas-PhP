<?php 
  // Inicia a sessão se ainda não estiver iniciada
  if(session_id() == '') {
    session_start();
  }

  // $navText é suposto ser definido em algum outro lugar do seu código
  // para exibir o texto desejado na navbar
?>

<nav class="navbar">
  <div class="container-fluid bg-dark text-white justify-content-start p-3">
    <!-- Link para a página inicial com texto dinâmico -->
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/"> <span class="navbar-brand mb-0 h1 text-white"> <?= $navText ?> </span> </a>
    
    <!-- Botão para fazer login -->
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/user/login"><button type="button" class="btn btn-primary">Fazer Login</button></a>
    
    <!-- Botão para criar conta -->
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/user/novo"><button type="button" class="btn btn-warning">Criar Conta</button></a>
    
    <!-- Botão para acessar a lista (pode ser "Minha Lista") -->
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/lista"><button type="button" class="btn btn-light">Minha Lista</button></a>
    
    <!-- Botão para fazer logout -->
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/user/logout"><button type="button" class="btn btn-danger">Logout</button></a>
  </div>
</nav>
