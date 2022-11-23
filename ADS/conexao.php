<?php

$servidor = "localhost";
$banco = "testeads";
$usuarioobd = "root";
$senhabd = "";

$conect = new mysqli($servidor,$usuarioobd,$senhabd, $banco);
if ($conect->connect_errno) {
    die ("falha ao conectar:".$conect->connect_error);


}

?>