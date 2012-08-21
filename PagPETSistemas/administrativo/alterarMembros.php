
<h2 align="center"> Alterar Membros </h2>


<?php
/*include ("../includes/funcoes/conexao.php");
$query = "SELECT * FROM membros";
$query = mysql_query($query, $conexao);
?>
<?php
function teste()
{
echo "<script language='javascript'> alert('teste') </script>";
}

if (isset($_GET['teste'])){
teste();
}
?>
<a href="teste">teste</a> 



<form id ="form" name="input" action="javascript:mostrarDadosMembro()">
    <h4>Selecione um Membro: </h4><select name="Membro">
        <?php while ($dados = mysql_fetch_array($query)) { ?>
            <option value="<?php echo $dados[1] ?>"><?php echo $dados[0] ?></option>
        <?php } ?>
    </select><input TYPE="BUTTON" VALUE="acao" onclick='javascript:teste()' value="Ver Dados"/>
   
</form><br/><br/>

<script language="javascript">
    function mostrarDadosMembro() {
        $id = $_POST["Membro"]; <?php echo "AAAA" ?>
        
        $query = "SELECT * FROM membros where registro ='$id'";
        $query = mysql_query($query, $conexao);
        $row = mysql_fetch_row($query);

        $nome = $row[0];

    }
</script>


<b>Nome: </b><input size="60px" type="text" name="nomeMembro" value='<?php echo $nome ?>'/>
<b>Data de Nascimento: </b><input id="date" maxlength="10" size="8px" type="text" name="dataNascMembro"/>
<!--<b>Dia: </b><input id="date" maxlength="2" size="2px" type="text" name="diaNascMembro" />
<b>Mês: </b><input id="date" maxlength="2" size="2px" type="text" name="mesNascMembro" />
<b>Ano: </b><input id="date" maxlength="4" size="4px" type="text" name="anoNascMembro" />-->
<br/><br/>
<b>Senha:</b><input size="15px" type="password" name="senhaMembro" />
<b>Número do Registro: </b><input size="30px" type="text" name="registroMembro" />

<?php
$conexao = mysql_connect("localhost", "root", "root") or die("falhou ao acessar o bd");
mysql_select_db("petsistemas", $conexao) or die("falhou ao acessar a tabela");
$query = "SELECT * FROM curso";
$query = mysql_query($query, $conexao);
?>
<b>Curso: </b><select name="Curso">
    <?php while ($dados = mysql_fetch_array($query)) { ?>
        <option value="<?php echo $dados[1] ?>"><?php echo $dados[0] ?></option>
    <?php } ?>
</select><br/><br/>
<b>E-mail: </b><input size="60px" type="text" name="emailMembro" /><br/><br/>
<b>Tipo de Membro: </b><select name="Tipo">
    <option value="1">Professor</option>
    <option value="2" selected="A">Aluno</option>
</select>
<b>Status: </b><select name="Status">
    <option value="1">Ativo</option>
    <option value="2">Desativo</option>
</select><br/><br/>
<b>Permissão de login: </b><input type="radio" name="Permissao" value="1" /> Sim 
<input type="radio" name="Permissao" value="2" /> Não<br /><br/>               
<b>Detalhes sobre o Membro: </b><br/><textarea rows="10" cols="90" name="descricaoMembro"></textarea>

<input type="button" onClick="javascript:mostrarDadosMembro()"></input>

*/
?>