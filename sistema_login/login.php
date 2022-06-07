<?php

$user = $_REQUEST["txt_user"];
$senha = $_REQUEST["txt_senha"];

if ($user == "admin" and $senha == 123) {
    echo 'Acesso OK';
} else {
    echo 'Acesso negado!';
}

?>