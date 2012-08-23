<?php
include ("../../includes/funcoes/conexao.php");

$id = mysql_fetch_field($result) + 1;
$data = $_POST["dataInicio"];
$titulo = $_POST["nomeCadastro"];
$conteudo = $_POST["desc"];
$autor = $_POST["autor"];
$assunto = $_POST["assunto"];
$tipo = $_POST["tipo"];
$arquivo = $_FILE["file"];


if (strlen($data) == 0) {
    echo "<script type='text/javascript'> alert('Nome Cadastro nao pode ser nulo!')</script>";
} else if (strlen($titulo) == 0) {
    echo "<script type='text/javascript'> alert('Data de Inicio nao pode ser nula!')</script>";
}else if (strlen($conteudo) == 0) {
    echo "<script type='text/javascript'> alert('Conteudo nao pode ser nulo!')</script>";
}else if (strlen($autor) == 0) {
    echo "<script type='text/javascript'> alert('Autor nao pode ser nulo!')</script>";
}else if (strlen($assunto) == 0) {
    echo "<script type='text/javascript'> alert('Assunto nao pode ser nulo!')</script>";
}else if(strlen(&tipo) == 0) {
	echo "<script type='text/javascript'> alert('Tipo não pode ser nulo!')</script>";
}else if (strlen($arquivo) == 0) {
    echo "<script type='text/javascript'> alert('Arquivo nao pode ser nulo!')</script>";
}else {
    $ins = "INSERT INTO `petsistemas`.`noticia` VALUES ('$id','$data','$titulo','$conteudo','$autor', '$assunto','$tipo','$arquivo')";

    $insere = mysql_query($ins);
    mysql_close($conexao);

    if ($insere == false)
        $in = 2;

    else
        $in = 1;

    header("Location: ../index.php?cod=cadastrarNoticias&in=$in");
}
?>

<script type="text/javascript">

    document.write(txt.length);

</script>

