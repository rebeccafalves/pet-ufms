<?php
include("../includes/funcoes/conexao.php");
?>

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

<div>
    <h2 align="center">Cadastro de Projetos</h2> 
    <div>
        <form name="input" action="incluirProjeto.php" method="post">
            <b>Nome do Projeto:</b>
            <input size="60px" type="text" name="nomeProjeto" />
            <br />

            <b>Data de Inicio: </b>
            <input id="datef" maxlength="10" size="8px" type="text" name="dataInicio" />
            <br />

            <b>Data de Fim: </b>
            <input id="date" maxlength="10" size="8px" type="text" name="dataFim" />
            <br />
            
            <b>Descrição:</b>
            <br />
            <textarea rows="10" cols="30" name ="desc" style="width:300px;height:100px"></textarea>
            <br />
            
            <?php
            $query = "select * from usuario as u join tutor as t on u.id_usuario = t.id_tutor";
            $query = mysql_query($query, $conexao);
            ?>
            
            <b>Tutor:  </b><select  name="tutor">
                <?php while ($dados = mysql_fetch_array($query)) { ?>
                    <option value="<?php echo $dados[3] ?>"><?php echo $dados[0] ?></option>
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
            
            <b>Alunos:  </b>
            <br />
            
            <select multiple="multiple" name="usuario_id_usuario" style="width:300px;height:200px">
            <?php while ($dados = mysql_fetch_array($query)) { ?>
                <option value="<?php echo $dados[0] ?>"><?php echo $dados[3] ?></option><br />
            <?php } ?>
            </select>
            
            <br />
            <input type="submit" value="Gravar"/>
		   </form>
    </div>
</div>


