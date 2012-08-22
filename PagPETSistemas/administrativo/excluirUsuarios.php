<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>
<script type="text/javascript" >
    $(document).ready(function() {
        $("#div_tutor").hide("fast");
        $("#div_petiano").hide("fast");
        $("#dadosUsuarios").hide("fast");
    });
    
    $(document).ready(function() {
        $("#mostrarDados").click(function() {
            $("#dadosUsuarios").show("fast");
            jQuery('#dadosUsuarios :input').attr('disabled', true);            
        });
    });
    
    $(document).ready(function() {
        $("#petiano").click(function() {
            $("#div_tutor").hide("fast");
            $("#div_petiano").show("fast");
        });
    });
    $(document).ready(function() {
        $("#tutor").click(function() {
            $("#div_tutor").show("fast");
            $("#div_petiano").hide("fast");
        });
    });
    $(document).ready(function() {
        $("#outro").click(function() {
            $("#div_tutor").hide("fast");
            $("#div_petiano").hide("fast");
        });
    });
    
</script>

<?php
$in = $_GET{"in"};

if ($in == 1)
    echo "<script type='text/javascript'> alert('Usuário Cadastrado com sucesso!')</script>";
else if ($in == 2)
    echo "<script type='text/javascript'> alert('Usuário não Cadastrado!')</script>";
?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#datei").focus(function(){
            $("#datei").mask("99/99/9999");
        });
    });
   
    $(document).ready(function(){
        $("#datip").focus(function(){
            $("#datip").mask("99/99/9999");
        });
    });
    
    $(document).ready(function(){
        $("#dtnasc").focus(function(){
            $("#dtnasc").mask("99/99/9999");
        });
    });

</script>

<h2 align="center">Página Para Exclusão de Usuários</h2> 

<?php
include ("../includes/funcoes/conexao.php");
$query = "SELECT * FROM membros";
$query = mysql_query($query, $conexao);
?>
<form id ="form" name="input" action="javascript:mostrarDadosMembro()">
    <h4>Selecione um Membro: </h4><select name="Membro">
        <?php while ($dados = mysql_fetch_array($query)) { ?>
            <option value="<?php echo $dados[1] ?>"><?php echo $dados[0] ?></option>
        <?php } ?>
    </select><input id ="mostrarDados" TYPE="BUTTON" VALUE="Pesquisar" value="Ver Dados"/>

</form><br/><br/>


<div id="dadosUsuarios" >
    <table>
        <tr>
            <td><input id ="tutor" name="radioButton" type="radio" value="tutor" /></td>
            <td>- Tutor</td>
            <td><input id ="petiano"  name="radioButton" type="radio" value="petiano"/></td>
            <td>- Petiano</td>
            <td><input id ="outro" name="radioButton" type="radio" value="outro" checked="yes" /></td>
            <td>- Outro</td>
        </tr>
    </table>
    <br/><br/>
    <form id ="form" name="input" action="funcoes/alterarUsuario.php" method="post">
        <b>Nome: </b><input size="60px" type="text" name="nomeUsr" /><br/>
        <b>E-mail: </b><input size="60px" type="text" name="emailUsr" /><br/>
        <b>Usuário: </b><input size="20px" type="text" name="usuarioUsr" /><br/>
        <b>Senha:</b><input size="15px" type="password" name="senhaUsr" /><br/>
        <b>Permissão:</b><select name="permissao">
            <option value="1">Postar documentos</option>
            <option value="2">Editar</option>
            <option value="3">Admin</option>
        </select><br/><br/>           
        <b>Detalhes sobre o Membro: </b><br/><textarea rows="10" cols="90" name="descricaoMembro"></textarea>
        <b>Status: </b><select name="Status">
            <option value="1">Ativo</option>
            <option value="2">Inativo</option>
        </select>

        <!-- Tutor -->
        <div id="div_tutor" hidden="hidden">

            <b>Data de Início: </b><input maxlength="10" size="8px" type="text" name="dataInicialTutor"/><br/>
        </div>

        <!-- PETIANO -->
        <div id="div_petiano" hidden="hidden">
            <b >Data de Nascimento: </b><input maxlength="10" size="8px" type="text" name="dataNascPetiano"/><br/>
            <b >RGA:  </b><input size="15px" type="text" /><br/>
            <b >CPF:  </b><input size="15px" type="text" /><br/>
            <b >RG:  </b><input size="15px" type="text" /><br/>
            <b >Orgão Emissor:  </b><input size="15px" type="text" /><br/>
            <b >Telefone:  </b><input size="15px" type="text"/><br/>
            <b >Rua:  </b><input size="15px" type="text" /> <b >Número:  </b><input size="6px" type="text" /><br/>
            <b >Bairro:  </b><input size="15px" type="text" /><br/>
            <b >Link do Lattes </b><input size="15px" type="text" /><br/>
            <b >Data de Início: </b><input maxlength="10" size="8px" type="text" name="dataInicialPetiano"/><br/>
        </div><br/>
        <input type="submit" value="Excluir"/>
    </form>
</div>