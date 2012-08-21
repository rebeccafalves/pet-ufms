<?php

$conexao = mysql_connect("localhost", "root", "root") or die("falhou ao acessar o bd");
mysql_select_db("petsistemas", $conexao) or die("falhou ao acessar a tabela");

$nome = $_POST["nomeMembro"];
$datNasc = $_POST["dataNascMembro"];
$senha = md5(utf8_encode($_POST["senhaMembro"]));
$registro = $_POST["registroMembro"];
$curso = $_POST["Curso"];
$email = $_POST["emailMembro"];
$tipo = $_POST["Tipo"];
$status = $_POST["Status"];
$permissao = $_POST["Permissao"];
$descricao = $_POST["descricaoMembro"];
 

$ins = "INSERT INTO `petsistemas`.`membros` VALUES ('$nome','$registro','$email','$curso',
'$datNasc','$descricao','$permissao', '$senha','$tipo','$status')";

$insere = mysql_query($ins);
mysql_close($conexao);
 


?>
