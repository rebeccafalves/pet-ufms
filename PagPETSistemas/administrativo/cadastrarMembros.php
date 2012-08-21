<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>

<?php
$in = $_GET{"in"};

if($in == 1)
    echo "<script type='text/javascript'> alert('Membro Cadastrado com sucesso!')</script>";
else if($in == 2)
     echo "<script type='text/javascript'> alert('Membro não Cadastrado!')</script>";
?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#date").focus(function(){
            $("#date").mask("99/99/9999");
        });
    });

</script>

<h2 align="center">Página Para Cadastro de Membros</h2> 
<div id="cadastroMembros">
    <form id ="form" name="input" action="funcoes/incluirMembro.php" method="post">
        <b>Nome: </b><input size="60px" type="text" name="nomeMembro" />   
        <b>Data de Nascimento: </b><input id="date" maxlength="10" size="8px" type="text" name="dataNascMembro"/>
        <br/><br/>
        <b>Senha:</b><input size="15px" type="password" name="senhaMembro" />
        <b>Número do Registro:  </b><input size="30px" type="text" name="registroMembro" />
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
        <input type="submit" value="Gravar"/>
    </form>
</div>

