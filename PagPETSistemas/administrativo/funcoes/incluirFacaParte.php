<?php

include ("../../includes/funcoes/conexao.php");

if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
} else if ($type == "video/avi" || $size > 2000000) { //imagens que pode ser upload, e tamanho de arquivo maximo
    die("Arquivo não aceito ou tamanho acima do Limite.");
}
$temp = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];
$query = "select max(idfaca_parte) from faca_parte";
$result = mysql_query("$query");
$name = $_FILES['file']['name'];
$id = mysql_fetch_field($result) + 1;

move_uploaded_file($temp, "../../arquivos/facaParte/" .$name);

$query = <<<hereDoc
insert into petsistemas.faca_parte (caminho_arquivo) values ("arquivos/facaParte/$name")
hereDoc;

$sql = mysql_query($query);

if($sql == false){
    $in = 2;
}
else{
    $in = 1;
}

header("Location: ../index.php?cod=cadastrarFacaParte&in=$in" );
?>
