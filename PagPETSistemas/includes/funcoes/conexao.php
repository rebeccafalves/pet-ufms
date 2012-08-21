<?php
$conexao = mysql_connect("localhost", "root", "root") or die("falhou ao acessar o bd");
mysql_select_db("petsistemas", $conexao) or die("falhou ao acessar a tabela");
?>
