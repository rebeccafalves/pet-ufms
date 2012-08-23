<?php
include("../includes/funcoes/conexao.php");
?>

<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>
<script type="text/javascript" >
    $(document).ready(function() {
        $("#dadosNoticia").hide("fast");
    });
    
    $(document).ready(function() {
        $("#mostrarDados").click(function() {
            $("#dadosProjeto").show("fast");
        });
    });
</script>


<?php
$in = $_GET{"in"};

if ($in == 1)
    echo "<script type='text/javascript'> alert('Noticia Alterada com sucesso!')</script>";
else if ($in == 2)
    echo "<script type='text/javascript'> alert('Noticia não Alterada!')</script>";
?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#date").focus(function(){
            $("#date").mask("99/99/9999");
        });
    });
</script>

<div>
    <h2 align="center">Alterar Noticias</h2> 
    <div>
        <form name="input" action="atualizarNoticia.php" method="post">
            <?php
            $query1 = "select * from noticia";
            $query1 = mysql_query($query1, $conexao);
            ?>
            
            <b>Noticias:  </b><select  name="id_projeto" style="width:300px">
                <?php while ($dados = mysql_fetch_array($query1)) { ?>
                    <option value="<?php echo $dados[5] ?>"><?php echo $dados[0] ?></option>
                <?php } ?>
            </select>
            <input id ="mostrarDados" type="button" value="Pesquisar"/>
            
            <?php
            $query2 = "select * from projeto where noticia.id_noticia =  ";
            $query2 = mysql_query($query2, $conexao);
            
				/*if(isset($_POST['id_noticia'])){
						$id_noticia = $_POST['id_noticia'];
				}*/           
            ?>
            
            <br />
            
            <div id="dadosNoticia">
			
            	<b>Data de Inicio: </b><input id="datef" maxlength="10" size="8px" type="text" name="dataInicio" />
				<br/><br/>
			
			
				<b>Titulo:</b><input size="60px" type="text" name="nomeCadastro" />
				<br/><br/>

				<b>Conteudo da Noticia:</b><br/><textarea rows="10" cols="30" name ="desc"></textarea>
				<br/><br/>
			
				<b>Autor: </b> <input size= "100px"type= "text" name= "autor" />
				<br/><br/>
			
				<b>Assunto: </b> <input size= "100px" type= "text" name= "assunto" />
				<br/><br/>
			
				<b>Tipo:</b>
				<select name="tipo">
					<option value="1">ensino</option>
					<option value="2">pesquisa</option>
					<option value="3">extens&atildeo</option>
				</select>
				<br/><br/>
			
				<input size = "100px" type="file" id="file" name="file" />
				<br/><br/>
						
				<input type = "submit" value = "Atualizar" />
            </div>
         </form>
    </div>
</div>