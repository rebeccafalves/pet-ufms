<?php
$in = $_GET{"in"};

if($in == 1)
    echo "<script type='text/javascript'> alert('Arquivo Excluido com sucesso!')</script>";
else if($in == 2)
     echo "<script type='text/javascript'> alert('Arquivo não Excluido!')</script>";
?>


<h2 align="center"> Excluir Arquivo do Faça Parte </h2>

<?php
include ("../includes/funcoes/conexao.php");
$query = "SELECT * FROM faca_parte order by idfaca_parte";
$query = mysql_query($query, $conexao);
?>

<form id ="form" name="input" action="funcoes/deletarFacaParte.php" method="post">
    <h4>O ultimo arquivo listado está sendo utilizado. <br/>
        Selecione um Arquivo para excluir: </h4><select name="Arquivo">
        <?php while ($dados = mysql_fetch_array($query)) { ?>
            <option value="<?php echo $dados[0] ?>"><?php echo $dados[1] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Excluir"/>
   
</form><br/><br/>