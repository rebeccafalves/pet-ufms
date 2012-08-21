<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>

<?php
$in = $_GET{"in"};

if ($in == 1)
    echo "<script type='text/javascript'> alert('Projeto Cadastrado com sucesso!')</script>";
else if ($in == 2)
    echo "<script type='text/javascript'> alert('Projeto não Cadastrado!')</script>";
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

<div id="main">
    <h2 align="center">Página Para Cadastro de Projetos</h2> 
    <div id="cadastroProjetos">
        <form name="input" action="incluirProjeto.php" method="post">
            <b>Nome Projeto:</b><input size="60px" type="text" name="nomeProjeto" />
            <br/><br/>

            <b>Data de Inicio: </b><input id="datef" maxlength="10" size="8px" type="text" name="dataInicio" />
            <br/><br/>

            <b>Data de Fim: </b><input id="date" maxlength="10" size="8px" type="text" name="dataFim" />
            <br/><br/>
            <b>Descrição:</b><br/>
            <textarea rows="10" cols="30" name ="desc"></textarea>
            <br/><br/>
            <?php
            $conexao = mysql_connect("localhost", "root", "root") or die("falhou ao acessar o bd");
            mysql_select_db("petsistemas", $conexao) or die("falhou ao acessar a tabela");
            $query = "SELECT * FROM membros WHERE tipo = '1'";
            $query = mysql_query($query, $conexao);
            ?>
            <b>Tutor:  </b><select  name="tutor">
                <?php while ($dados = mysql_fetch_array($query)) { ?>
                    <option value="<?php echo $dados[1] ?>"><?php echo $dados[0] ?></option>
                <?php } ?>
            </select>
            <br/><br/>
            <b>Tipo:  </b><select name="tipo">
                <option value="1">ensino</option>
                <option value="2">pesquisa</option>
                <option value="3">extensão</option>
                <option value="4">todos</option>
            </select><br/><br/>
            <?php
            $query = "SELECT * FROM membros WHERE tipo = '2'";
            $query = mysql_query($query, $conexao);
            ?>
            <b>Alunos:  </b><br/>
            <?php while ($dados = mysql_fetch_array($query)) { ?>
                <input type="checkbox" name="aluno[]" value="<?php echo $dados[1] ?>" /><?php echo $dados[0] ?><br />
            <?php } ?><br/>
            <input type="submit" value="Gravar"/>
    </div>
</div>


