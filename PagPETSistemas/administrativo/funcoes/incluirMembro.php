<?php
include ("../../includes/funcoes/conexao.php");

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

$datNasc = substr($datNasc, -4) . substr($datNasc, 3, 2) . substr($datNasc, 0, 2);

if (strlen($nome) == 0) {
    echo "<script type='text/javascript'> alert('Nome nao pode ser nulo!')</script>";
} else if (strlen($datNasc) == 0) {
    echo "<script type='text/javascript'> alert('Data de Nascimento nao pode ser nula!')</script>";
}else if (strlen($senha) == 0) {
    echo "<script type='text/javascript'> alert('Senha nao pode ser nula!')</script>";
}else if (strlen($registro) == 0) {
    echo "<script type='text/javascript'> alert('Registro nao pode ser nulo!')</script>";
}else if (strlen($curso) == 0) {
    echo "<script type='text/javascript'> alert('Curso nao pode ser nulo!')</script>";
}else if (strlen($email) == 0) {
    echo "<script type='text/javascript'> alert('E-mail nao pode ser nulo!')</script>";
}else if (strlen($permissao) == 0) {
    echo "<script type='text/javascript'> alert('Permissão nao pode ser nula!')</script>";
}else {
    $ins = "INSERT INTO `petsistemas`.`membros` VALUES ('$nome','$registro','$email','$curso', '$datNasc','$descricao','$permissao', '$senha','$tipo','$status')";

    $insere = mysql_query($ins);
    mysql_close($conexao);

    if ($insere == false)
        $in = 2;

    else
        $in = 1;

    header("Location: ../index.php?cod=cadastrarMembros&in=$in");
}
?>

<script type="text/javascript">

    document.write(txt.length);

</script>
