<?php
include("conexao.php");
$id = "1";
$nome = "Marcos";
$sobrenome = "Bastos";
$fone = "4002-8922";

$sql = "INSERT INTO cliente (id, nome,sobrenome,fone) 
VALUES ('$id' ,'$nome', '$sobrenome', '$fone')";
if(mysqli_query($conect, $sql)){
    echo "deu certo";
}else{

    echo "Error".mysqli_connect_error($conect);

}
?>
