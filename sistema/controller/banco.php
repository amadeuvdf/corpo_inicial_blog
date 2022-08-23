<?php

$bdServidor  = '127.0.0.1';
$dbUsuario = 'usuarioTeste';
$dbSenha = 'usuarioTeste';
$dbBanco = 'banco_blog';

$con = mysqli_connect($bdServidor, $dbUsuario, $dbSenha, $dbBanco);

if (mysqli_connect_errno()) {
    echo "erro ao conectar ao banco de dados";
    die();
}

function gravar_post($con, $cadastro){

    $sqlGravar = "INSERT INTO 
    posts (titulo, autor, conteudo) 
    VALUES('{$cadastro['titulo']}','{$cadastro['autor']}','{$cadastro['conteudo']}')";

    
    mysqli_query($con, $sqlGravar);
}

function buscar_posts($con) {
    $sqlBusca = 'SELECT * FROM posts';
    $resultado = mysqli_query($con, $sqlBusca);

    $tarefas = array();
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function buscar_post($con, $id) {
    $sqlBusca = "SELECT * FROM posts WHERE idposts = '{$id}'";
    $resultado = mysqli_query($con, $sqlBusca);

    $tarefas = array();
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}
?>