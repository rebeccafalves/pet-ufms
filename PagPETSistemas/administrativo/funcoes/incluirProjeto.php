<?php
/* Inclusуo de um projeto ao banco de dados */

/* Conexуo ao banco de dados */
include('../../includes/funcoes/conexao.php');

$projeto_nome = $_POST['projeto_nome'];
$data_ini = $_POST['data_ini'];
$descricao = $_POST['descricao'];
$id_usuario = $_POST['id_usuario'];
$tipo = $_POST['tipo'];

$in = null;

$projeto_nome = trim($projeto_nome);
if(empty($projeto_nome)){
	$in = 2;
}
else{
	/* Query de verificaчуo de projetos com mesmo nome */
	$query = "SELECT p.nome FROM projeto AS p WHERE p.nome = '$projeto_nome'";
	$query = mysql_query($query, $conexao);

	if($query == false){
		$in = 2;
	}
	else{
		while ($dados = mysql_fetch_array($query)){
			$in = 2;
		}

		$data_ini = substr($data_ini, -4) . substr($data_ini, 3, 2) . substr($data_ini, 0, 2);

		/* Insere um projeto no banco de dados */
		$insert = "INSERT INTO `pet-sistemas`.`projeto` (nome, data_ini, descricao, tipo, id_usuario) VALUES ('$projeto_nome', '$data_ini', '$descricao', '$tipo', '$id_usuario')";
		$result = mysql_query($insert);

		if($result == false){
			$in = 2;
		}
		else{
	
			/* Retorna o id do projeto */
			$query = "SELECT p.id_projeto FROM projeto AS p WHERE p.nome = '$projeto_nome'";
			$query = mysql_query($query, $conexao);
			
			if($query == false){
				$in = 2;
			}
			else{

				/* Pega o id do projeto */
				while ($dados = mysql_fetch_array($query)){
					$id_projeto = $dados[0];
				}

				/* Vincula um professor com um projeto */
				$insert = "INSERT INTO `pet-sistemas`.`usuario_projeto` (id_usuario, id_projeto, data_ini) VALUES ('$id_usuario', '$id_projeto', '$data_ini')";
				$result = mysql_query($insert);
				mysql_close($conexao);
	
				if ($result == false){
					$in = 2;
				}
				else {
					$in = 1;
				}
			}
		}
	}
}

header("Location: ../index.php?cod=cadastrarProjetos&in=$in");
?>