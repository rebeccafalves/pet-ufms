<?php

include ("../../includes/funcoes/conexao.php");

$idMembro = $_POST["Membro"];



$ins = "DELETE FROM membros where registro = '$idMembro'";

$insere = mysql_query($ins);
mysql_close($conexao);

if($insere == false)
    $in = 2;

else
    $in = 1;

 header("Location: ../index.php?cod=excluirMembros&in=$in");

?>
