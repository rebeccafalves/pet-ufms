<?php
include("../includes/funcoes/conexao.php");
?>

<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>

<?php
$in = $_GET{"in"};

if ($in == 1)
    echo "<script type='text/javascript'> alert('Publicação Cadastrada com sucesso!')</script>";
else if ($in == 2)
    echo "<script type='text/javascript'> alert('Publicação não Cadastrada!')</script>";
?>


<script type="text/javascript">
    $(document).ready(function(){
        $("#datef").focus(function(){
            $("#datef").mask("99/99/9999");
        });
    });
</script>

<div id="main">
    <h2 align="center"> Cadastro de Publicações</h2> 
    <div id="cadastroPublicacoes">
        <form name="input" action="funcoes/incluirPublicacao.php" method="post" enctype = "multipart/form-data">
		
			
			
            <b>Titulo:</b><input size="60px" type="text" name="titulo_publ" />
            <br/><br/>

            <b>Assunto:</b><br/><textarea rows="10" cols="30" name ="assunto"></textarea>
            <br/><br/>

			<?php
            $query = "select u.id_usuario, u.nome from usuario as u";
            $query = mysql_query($query, $conexao);
            ?>

            <b>Autor:  </b><select  name="id_usuario" style="width:200px">
                <?php while ($dados = mysql_fetch_array($query)) { ?>
                    <option value="<?php echo $dados[0] ?>"><?php echo $dados[1] ?></option>
                <?php } ?>
            </select>
            <br />
			
		    <b>Data de Publicação: </b><input id="datef" maxlength="10" size="8px" type="text" name="data_Publ" />
            <br/><br/>		

		
            <br/><br/>
			
			 <input size = "100px" type="file" id="file" name="file" />
			<br/><br/> 
			<!-- comentário!!! -->
						
			<input type = "submit" value = "Enviar Cadastro" />

	<div/>
<div/>


            
			
			
