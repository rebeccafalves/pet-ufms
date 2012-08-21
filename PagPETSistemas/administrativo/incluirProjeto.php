<?php
include("../includes/funcoes/conexao.php");

$nome= $_POST["nomeProjeto"];
$data_ini =$_POST["dataInicio"];
$data_fim=$_POST["dataFim"];
$descr =$_POST["descr"];
$tipo=$_POST["tipo"];
$id_tutor=$_POST["tutor"];
$_checkbox = $_POST["aluno"];
$data_ini = substr($data_ini, -4).substr($data_ini, 3, 2 ).substr($data_ini, 0, 2);
$ins = "INSERT INTO `petsistemas`.`projeto`(nome, data_ini, data_fim, descricao, tipo, id_tutor) VALUES ('$nome','$data_ini',null,'$descr',
'$tipo','$id_tutor')";

$insere = mysql_query($ins);
$query = "SELECT max(ID) from projeto";
$query2 = mysql_query($query);
$linha = mysql_fetch_row($query2);
$_id = $linha[0];
foreach($_checkbox as $_valor){
    $ins = "INSERT INTO `petsistemas`.`membro_projeto`(id_membro, id_projeto) VALUES('$_valor', '$_id')";
	$insere = mysql_query($ins);
}

mysql_close($conexao);
if($insere == false)
    $in = 2;

else
    $in = 1;

// header("Location: index.php?cod=cadastrarProjetos&in=$in");


?>