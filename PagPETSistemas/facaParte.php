<img src="images/pet.png" alt="A imagem não foi encontrada" width="200" height="220" ></img>
<h1><br/> Atualmente, não há vagas disponíveis.</h1>
Saiba mais sobre os grupos PET no portal do Ministério da Educação (<span ><a title="PET - MEC" href="http://portal.mec.gov.br/index.php?option=com_content&amp;task=view&amp;id=12223" target="_blank"><strong>link</strong></a></span>).


<?php
include ("includes/funcoes/conexao.php");
$query = "select caminho_arquivo from faca_parte where idfaca_parte = (select max(idfaca_parte) from faca_parte)";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
echo $row[1];
?>
</h1><br/>
(<a href="<?php echo $row[0]; ?>" target="_blank">Link para arquivo de inscrição</a>)

