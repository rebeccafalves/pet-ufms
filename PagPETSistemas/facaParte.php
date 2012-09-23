<img src="images/pet.png" alt="A imagem não foi encontrada" width="200" height="220" ></img>
<h1><br/> Atualmente, não há vagas disponíveis.</h1>
Saiba mais sobre os grupos PET no portal do Ministério da Educação (<span ><a title="PET - MEC" href="http://portal.mec.gov.br/index.php?option=com_content&amp;task=view&amp;id=12223" target="_blank"><strong>link</strong></a></span>).


<?php
include ("includes/funcoes/conexao.php");
$query = "select caminho_id_arquivos from faca_parte where id_faca_parte = (select max(id_faca_parte) from faca_parte)";
$result = mysql_query($query);
$row = mysql_fetch_row($result);

$query1 = "select caminho from arquivos where id_arquivos = $row[0]";
$result1 = mysql_query($query1);
$caminho = mysql_fetch_row($result1);
?>
<?php echo $caminho[0]."koko"; ?>
</h1><br/>
(<a href="<?php echo $caminho[0]; ?>" target="_blank">Link para arquivo de inscrição</a>)

