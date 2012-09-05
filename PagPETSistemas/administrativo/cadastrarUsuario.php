<script type="text/javascript" src="../includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="../includes/jQuery/jquery.mask.js"> </script>
<script type="text/javascript" >    
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
else if ($in == 3)
    echo "<script type='text/javascript'> alert('Dados Inválidos, usuário não cadastrado!')</script>";
?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#data_ini_petiano").focus(function(){
            $("#data_ini_petiano").mask("99/99/9999");
        });
    });
   
    $(document).ready(function(){
        $("#data_ini_tutor").focus(function(){
            $("#data_ini_tutor").mask("99/99/9999");
        });
    });
    
    $(document).ready(function(){
        $("#data_nasc").focus(function(){
            $("#data_nasc").mask("99/99/9999");
        });
    });

</script>

<h2 align="center">Página Para Cadastro de Usuários</h2> 
<div id="cadastroUsuarios">
    <form id ="form" name="input" action="funcoes/incluirUsuario.php" method="post">
        <b>Nome: </b><input size="65px" type="text" name="nome" /><br/>
        <b>E-mail: </b><input size="100px" type="text" name="email" /><br/>
        <b>Usuário: </b><input size="20px" type="text" name="nome_usuario" /> <b>Senha:   </b><input size="15px" type="password" name="senha" /><br/>
        <b >Link do Lattes:</b><input size="100px" type="text" name ="lattes" /><br/>
        <b>Permissão:</b><select name="permissao">
            <option value="1">Postar documentos</option>
            <option value="2">Editar</option>
            <option value="3">Admin</option>
        </select><br/><br/>  
        <b>Escolha uma Foto:</b><br/>
        <input type="file" id="file" name="foto" /><br/><br/>
        <b>Detalhes sobre o Membro: </b><br/><textarea rows="10" cols="90" name="descricao"></textarea>
        <b>Status: </b><select name="status">
            <option value="A">Ativo</option>
            <option value="I">Inativo</option>
        </select>

        <table>
            <tr>
                <td><input id ="tutor" name="radioButton" type="radio" value="tutor" /></td>
                <td>- Tutor</td>
                <td><input id ="petiano"  name="radioButton" type="radio" value="petiano"/></td>
                <td>- Petiano:</td>
                <td><input id ="outro" name="radioButton" type="radio" value="outro" checked="yes" /></td>
                <td>- Outro:</td>
            </tr>
        </table>

        <!-- Tutor -->
        <div id="div_tutor" hidden="hidden">
            <b>Data de Início: </b><input maxlength="10" size="8px" type="text" name="data_ini_tutor"/><br/>
        </div>

        <!-- PETIANO -->
        <div id="div_petiano" hidden="hidden">
            <b >Data de Nascimento: </b><input maxlength="10" size="8px" type="text" name="data_nasc"/><br/>
            <b >RGA:  </b><input size="12px" type="text" name="rga" /><br/>
            <b >CPF:  </b><input size="11px" type="text"  name ="cpf"/><br/>
            <b >RG:  </b><input size="20px" type="text" name="rg"/><br/>
            <b >Orgão Emissor:  </b><input size="15px" type="text" name="org_exp" /><br/>
            <b >Telefone:  </b><input size="15px" type="text" name="telefone"/><br/>
            <b >Endereço:  </b><textarea rows="5" cols="90" name="endereco"></textarea><br/>
            <b >Mãe:  </b><input size="50px" type="text" name="mae" /><br/>
            <b >Pai:  </b><input size="50px" type="text" name="pai" /><br/>
            <b >Data de Início: </b><input maxlength="10" size="8px" type="text" name="data_ini_petiano"/><br/>
        </div><br/>
        <input type="submit" value="Gravar"/>

    </form>
</div>

