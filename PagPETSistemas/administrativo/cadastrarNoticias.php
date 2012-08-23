<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>

<?php
$in = $_GET{"in"};

if ($in == 1)
    echo "<script type='text/javascript'> alert('Noticia Cadastrada com sucesso!')</script>";
else if ($in == 2)
    echo "<script type='text/javascript'> alert('Noticia não Cadastrada!')</script>";
?>


<script type="text/javascript">
    $(document).ready(function(){
        $("#datef").focus(function(){
            $("#datef").mask("99/99/9999");
        });
    });
</script>

<div id="main">
    <h2 align="center">P&aacutegina Para Cadastro de Noticias</h2> 
    <div id="cadastroNoticias">
        <form name="input" action="incluirCadastro.php" method="post">
		
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
						
			<input type = "submit" value = "Enviar Cadastro" />

	<div/>
<div/>


            
			
			
