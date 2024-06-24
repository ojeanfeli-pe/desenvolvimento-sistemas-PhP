<?php

// Definição da classe Lista
class Lista {

    // Construtor da classe (vazio neste exemplo)
    public function __construct() {
        
    }

    // Método para criar uma nova tarefa no banco de dados
    function criarTarefa(string $tarefa, int $codUsuario){
        // Monta a query SQL para inserir uma nova tarefa
        $q = "INSERT INTO tarefas(cod, tarefa, cod_usuario) VALUES (NULL, '$tarefa', '$codUsuario')";
        // Chama o método estático 'query' da classe Banco para executar a query
        Banco::query($q);
    }

    // Método para pegar todas as tarefas do banco de dados
    function pegarTarefas(){
        // Monta a query SQL para selecionar todas as tarefas
        $q = "SELECT * FROM tarefas";
        // Retorna o resultado da consulta chamando o método estático 'query' da classe Banco
        return Banco::query($q);
    }

    // Método para pegar todas as tarefas de um usuário específico do banco de dados
    function pegarTarefaDeUsuario(int $codUsuario){ 
        // Monta a query SQL para selecionar tarefas de um usuário específico
        $q = "SELECT * FROM tarefas WHERE cod_usuario='$codUsuario'";
        // Retorna o resultado da consulta chamando o método estático 'query' da classe Banco
        return Banco::query($q);
    }

}

?>