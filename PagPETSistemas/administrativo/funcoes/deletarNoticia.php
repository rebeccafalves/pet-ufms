<?php

include ("../../includes/funcoes/conexao.php");

$idNoticia = $_POST["Noticia"];



$ins = "DELETE FROM noticia where registro = '$idNoticia'";

$insere = mysql_query($ins);
mysql_close($conexao);

if($insere == false)
    $in = 2;

else
    $in = 1;

 header("Location: ../index.php?cod=excluirMembros&in=$in");

?>