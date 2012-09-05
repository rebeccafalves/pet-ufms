<?php
/* Inclusão de um projeto ao banco de dados */

/* Conexão ao banco de dados */
include('../../includes/funcoes/conexao.php');

$error = null;
$projeto_nome = null;
$data_ini = null;
$descricao = null;
$tipo = null;
$in = 2;


/* Verifica se o nome do projeto vem nulo */
if (isset($_POST['projeto_nome'])){
	$projeto_nome = $_POST['projeto_nome'];
	
	$projeto_nome = trim($projeto_nome);
	if(empty($projeto_nome)){
		/* Alerta de erro - Entrada inválida, por favor insira novamente o nome do projeto */
		$error = "Entrada inválida, por favor insira novamente o nome do projeto";
		header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
	}
}
else {
	header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
}

/* Verifica se a data de início vem nula */
if (isset($_POST['data_ini'])){
	$data_ini = $_POST['data_ini'];
	
	$data_ini = trim($data_ini);
	if(strlen($data_ini) == 0){
		/* Alerta de erro - Entrada inválida, por favor insira novamente a data de início do projeto */
		$error = "Entrada inválida, por favor insira novamente a data de início do projeto";
		header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
	}
}
else {
	header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
}

/* Verifica se a descração vem nula */
if (isset($_POST['descricao'])){
	$descricao = $_POST['descricao'];
	
	$descricao = trim($descricao);
	if(strlen($descricao) == 0){
		/* Alerta de erro - Entrada inválida, por favor insira novamente a descrição */
		$error = "Entrada inválida, por favor insira novamente a descrição";
		header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
	}
}
else {
	header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
}

/* Verifica se o tutor vem nulo */
if (isset($_POST['id_tutor'])){
	$id_tutor = $_POST['id_tutor'];
	
	$id_tutor = trim($id_tutor);
	if(strlen($id_tutor) == 0){
		/* Alerta de erro - Entrada inválida, por favor insira novamente o tutor */
		$error = "Entrada inválida, por favor insira novamente o tutor";
		header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
	}
}
else {
	header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
}

/* Verifica se o tipo vem nulo */
if(isset($_POST['tipo'])){
	$tipo = $_POST['tipo'];
	
	$tipo = trim($tipo);
	if(strlen($tipo) == 0){
		/* Alerta de erro - Entrada inválida, por favor insira novamente o tipo do projeto */
		$error = "Entrada inválida, por favor insira novamente o tipo do projeto";
		header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
	}
}
else {
	header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
}

/* Query de verificação de projetos com mesmo nome */
$query = "select p.nome from projeto as p where p.nome = '$projeto_nome'";
$query = mysql_query($query, $conexao);

while (mysql_fetch_array($query)){
	/* Alerta de erro - Este nome já existe, por favor insira novamente o nome do projeto */
	$error = "Este nome já existe, por favor insira novamente o nome do projeto";
	header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
}

$data_ini = substr($data_ini, -4) . substr($data_ini, 3, 2) . substr($data_ini, 0, 2);

$insert = "insert into 'pet-sistemas'.'projeto' (nome, data_ini, descricao, tipo) values ('$projeto_nome', '$data_ini', '$descricao', '$tipo')";
$insert = mysql_query($insert, $conexao);

$query = "select p.id_projeto from projeto as p where p.nome = '$projeto_nome'";
$query = mysql_query($query, $conexao);

while ($dados = mysql_fetch_array($query)){
	$id_projeto = $dados[0];
}

$insert = "insert into 'pet-sistemas'.'usuario_projeto' (id_usuario, id_projeto, data_ini) values ('$id_tutor', '$id_projeto', '$data_ini')";
$result = mysql_query($insert);

mysql_close($conexao);

if ($result == false){
	$in = 2;
}
else {
	$in = 1;
}

header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
?>