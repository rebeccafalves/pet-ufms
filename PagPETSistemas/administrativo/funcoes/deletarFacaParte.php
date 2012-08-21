<?php

include ("../../includes/funcoes/conexao.php");

$idFacaParte = $_POST["Arquivo"];

$query = "SELECT * FROM faca_parte where idfaca_parte = '$idFacaParte'";
$query = mysql_query($query, $conexao);
$dados = mysql_fetch_array($query);
$caminho = $dados[1];

$ins = "DELETE FROM faca_parte where idfaca_parte = '$idFacaParte'";

unlink("../../$caminho");
$insere = mysql_query($ins);
mysql_close($conexao);

if($insere == false)
    $in = 2;

else
    $in = 1;

 header("Location: ../index.php?cod=excluirFacaParte&in=$in");

?>
