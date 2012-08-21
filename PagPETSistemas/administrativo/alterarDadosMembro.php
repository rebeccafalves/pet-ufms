<?php



$id = $_POST["Membro"];

$conexao = mysql_connect("localhost", "root", "root") or die("falhou ao acessar o bd");
mysql_select_db("petsistemas", $conexao) or die("falhou ao acessar a tabela");
$query = "SELECT * FROM membros where registro ='$id'";
$query = mysql_query($query, $conexao);
$row = mysql_fetch_row($query);
echo $row[0];

?>