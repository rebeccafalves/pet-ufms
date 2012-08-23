<?php
include("../includes/funcoes/conexao.php");
?>

<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>
<script type="text/javascript" >
    $(document).ready(function() {
        $("#dadosProjeto").hide("fast");
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

<div>
    <h2 align="center">Excluir Projetos</h2> 
    <div>
        <form name="input" action="atualizarProjeto.php" method="post">
            <?php
            $query1 = "select * from projeto";
            $query1 = mysql_query($query1, $conexao);
            ?>
            
            <b>Projetos:  </b><select  name="id_projeto" style="width:300px">
                <?php while ($dados = mysql_fetch_array($query1)) { ?>
                    <option value="<?php echo $dados[5] ?>"><?php echo $dados[0] ?></option>
                <?php } ?>
            </select>
            <input id ="mostrarDados" type="button" value="Pesquisar"/>
            
            <?php
            $query2 = "select * from projeto where projeto.id_projeto =  ";
            $query2 = mysql_query($query2, $conexao);
            
				if(isset($_POST['id_projeto'])){
						$id_projeto = $_POST['id_projeto'];
				}            
            ?>
            
            <br />
            
            <div id="dadosProjeto">
            
            </div>            
            
         </form>
    </div>
</div>