<?php
$in = $_GET{"in"};

if($in == 1)
    echo "<script type='text/javascript'> alert('Membro Excluido com sucesso!')</script>";
else if($in == 2)
     echo "<script type='text/javascript'> alert('Membro não Excluido!')</script>";
?>


<h2 align="center"> Excluir Membros </h2>

<?php
include ("../includes/funcoes/conexao.php");
$query = "SELECT * FROM membros where nome <> 'admin' and registro not in (select id_membro from membro_projeto)";
$query = mysql_query($query, $conexao);
?>

<form id ="form" name="input" action="funcoes/deletarMembro.php" method="post">
    <h4>Selecione um Membro: </h4><select name="Membro">
        <?php while ($dados = mysql_fetch_array($query)) { ?>
            <option value="<?php echo $dados[1] ?>"><?php echo $dados[0] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Excluir"/>
   
</form><br/><br/>