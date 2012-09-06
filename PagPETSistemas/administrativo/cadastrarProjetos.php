<?php
include("../includes/funcoes/conexao.php");
?>

<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>

<?php

if(isset($_GET["in"]))
$in = $_GET["in"];

if ($in == 1)
    echo "<script type='text/javascript'> alert('Projeto cadastrado com sucesso!')</script>";
else if ($in == 2){
	echo "<script type='text/javascript'> alert('Não foi possivel realizar o cadastro de projeto!')</script>";
}

	
?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#date").focus(function(){
            $("#date").mask("99/99/9999");
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#datef").focus(function(){
            $("#datef").mask("99/99/9999");
        });
    });
</script>

<div>
    <h2 align="center">Cadastro de Projetos</h2> 
    <div>
        <form name="input" action="funcoes/incluirProjeto.php" method="post">
            <b>Nome do Projeto:</b>
            <input size="60px" type="text" name="projeto_nome" />
            <br />
			
            <b>Data de Inicio: </b>
            <input id="datef" maxlength="10" size="8px" type="text" name="data_ini" />
            <br />
            
            <b>Descrição:</b>
            <br />
            <textarea rows="10" cols="90" name ="descricao"></textarea>
            <br />
            
            <?php
            $query = "select u.id_usuario, u.nome from usuario as u";
            $query = mysql_query($query, $conexao);
            ?>
            
            <b>Proprietário:  </b><select  name="id_usuario" style="width:300px">
                <?php while ($dados = mysql_fetch_array($query)) { ?>
                    <option value="<?php echo $dados[0] ?>"><?php echo $dados[1] ?></option>
                <?php } ?>
            </select>
            <br />
            
            <b>Tipo:  </b><select name="tipo">
                <option value="1">ensino</option>
                <option value="2">pesquisa</option>
                <option value="3">extensão</option>
            </select>
            <br />
            
            <?php
            $query = "SELECT * FROM usuario";
            $query = mysql_query($query, $conexao);
            ?>
			
			<b>Arquivo: </b>
			<br/>
			
			<input type="file" name="arquivo_id_arquivo" accept="image/*" />
			<br />
			
            <input type="submit" value="Gravar"/>
			
		   </form>
    </div>
</div>


