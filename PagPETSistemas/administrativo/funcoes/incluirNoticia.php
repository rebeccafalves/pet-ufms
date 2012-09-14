<?php
include ("../../includes/funcoes/conexao.php");

$id = mysql_fetch_field($result) + 1;
$data = $_POST["dataInicio"];
$data = substr($data, -4) . substr($data, 3, 2) . substr($data, 0, 2);
$autor = $_POST["id_usuario"];
$titulo = $_POST["nomeCadastro"];
$conteudo = $_POST["desc"];
$assunto = $_POST["assunto"];
$tipo = $_POST["tipo"];



if (strlen($data) == 0){
    echo "<script type='text/javascript'> alert('Nome Cadastro nao pode ser nulo!')</script>";
} else if (strlen($titulo) == 0){
    echo "<script type='text/javascript'> alert('Data de Inicio nao pode ser nula!')</script>";
}else if (strlen($conteudo) == 0){
    echo "<script type='text/javascript'> alert('Conteudo nao pode ser nulo!')</script>";
}else if (strlen($autor) == 0){
    echo "<script type='text/javascript'> alert('Autor nao pode ser nulo!')</script>";
}else if (strlen($assunto) == 0){
    echo "<script type='text/javascript'> alert('Assunto nao pode ser nulo!')</script>";
}else if(strlen($tipo) == 0){
	echo "<script type='text/javascript'> alert('Tipo não pode ser nulo!')</script>";
}else {
    $ins = "INSERT INTO `pet-sistemas`.`noticia` (data,titulo,conteudo,autor,assunto, tipo) VALUES ('$data','$titulo','$conteudo','$autor', '$assunto','$tipo')";

    $insere = mysql_query($ins);
    mysql_close($conexao);

    if ($insere == false)
        $in = 2;

    else
        $in = 1;
}

    header("Location: ../index.php?cod=cadastrarNoticias&in=$in");
?>

<script type="text/javascript">

    document.write(txt.length);

</script>

