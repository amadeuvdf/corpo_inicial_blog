<?php
include "banco.php";

$cadastro = array();
if(isset($_POST['mytextarea']) && isset($_POST['titulo']) && isset($_POST['autor'])){
    $cadastro['titulo'] = $_POST['titulo'];
    $cadastro['autor'] = $_POST['autor'];
    $cadastro['conteudo'] = $_POST['mytextarea'];
    gravar_post($con, $cadastro);
} else {
    echo "não foi";
}

unset($cadastro);
session_destroy();
header('Location: ../../index.php');

?>