<?php
include ("../../includes/funcoes/conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$usuario = $_POST["nome_usuario"];
$senha = md5(utf8_encode($_POST["senha"]));
$permissao = $_POST["permissao"];
$descricao = $_POST["descricao"];
$status = $_POST["status"];
$data_ini_tutor = $_POST["data_ini_tutor"];
$data_ini_tutor = substr($data_ini_tutor, -4) . substr($data_ini_tutor, 3, 2) . substr($data_ini_tutor, 0, 2);
$radio = $_POST['radioButton'];
$data_nasc = $_POST["data_nasc"];
$data_nasc = substr($data_nasc, -4) . substr($data_nasc, 3, 2) . substr($data_nasc, 0, 2);
$rga = $_POST["rga"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$orgao = $_POST["org_exp"];
$telefone = $_POST["telefone"];
$foto = $_POST["foto"];
$endereco = $_POST["endereco"];
$lattes = $_POST["lattes"];
$data_ini_petiano = $_POST["data_ini_petiano"];
$data_ini_petiano = substr($data_ini_petiano, -4) . substr($data_ini_petiano, 3, 2) . substr($data_ini_petiano, 0, 2);
$pai = $_POST["pai"];
$mae = $_POST["mae"];

$query = "SELECT usuario.id_usuario FROM usuario where usuario.nome_usuario = '$usuario'";
$query = mysql_query($query, $conexao);

if (strlen($usuario) == 0) {
    $in = 3;
} else if (mysql_fetch_array($query)) {
    echo "<script type='text/javascript'> alert('Já existe alguém com este nome de usuário!')</script>";
    $in = 3;
} else {
    if ($radio == 'outro') {
        $ins = "INSERT INTO `pet-sistemas`.`usuario` (nome_usuario, senha, nome, permissao, descricao, email, status, lattes) VALUES ('$usuario', '$senha', '$nome', '$permissao', '$descricao', '$email', '$status', '$lattes')";
        $insere = mysql_query($ins);
    } else if ($radio == 'tutor') {
        $ins = "INSERT INTO `pet-sistemas`.`usuario` (nome_usuario, senha, nome, permissao, descricao, email, status, lattes) VALUES ('$usuario', '$senha', '$nome', '$permissao', '$descricao', '$email', '$status', '$lattes')";
        $insere = mysql_query($ins);
        if ($insere) {
            $query = "SELECT usuario.id_usuario FROM usuario where usuario.nome_usuario = '$usuario'";
            $query = mysql_query($query, $conexao);

            while ($dados = mysql_fetch_array($query)) {
                $ins = "INSERT INTO `pet-sistemas`.`tutor` (data_ini, id_usuario) VALUES ('$data_ini_tutor', '$dados[0]')";
                $insere = mysql_query($ins);
            }
        }
    } else if ($radio == 'petiano') {
        $ins = "INSERT INTO `pet-sistemas`.`usuario` (nome_usuario, senha, nome, permissao, descricao, email, status, lattes) VALUES ('$usuario', '$senha', '$nome', '$permissao', '$descricao', '$email', '$status', '$lattes')";
        $insere = mysql_query($ins);
        if ($insere) {
            $query = "SELECT usuario.id_usuario FROM usuario where usuario.nome_usuario = '$usuario'";
            $query = mysql_query($query, $conexao);
            while ($dados = mysql_fetch_array($query)) {
                $ins = "INSERT INTO `pet-sistemas`.`petiano` (rga, cpf, rg, org_exp, telefone, endereco, data_nasc, data_ini, id_usuario, pai, mae) VALUES ('$rga','$cpf','$rg','$orgao','$telefone','$endereco','$data_nasc','$data_ini_petiano','$dados[0]','$pai','$mae')";
                $insere = mysql_query($ins);
            }
        }
    }
    mysql_close($conexao);

    if ($insere == false)
        $in = 2;

    else
        $in = 1;
}
header("Location: ../index.php?cod=cadastrarUsuario&in=$in");
?>
<script type="text/javascript">

    document.write(txt.length);

</script>
