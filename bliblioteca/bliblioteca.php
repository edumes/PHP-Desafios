<?php

$livro = (string)$_REQUEST["txt_livro"];
$usuario = (int)$_REQUEST["txt_usuario"];

if ($usuario == 1) {
    echo 'vc tem 5 dias para devolver o livro ' . $livro;
} else {
    echo 'vc tem 10 dias para devolver o livro ' . $livro;
}

?>