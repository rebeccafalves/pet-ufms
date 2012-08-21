<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href="style.css" type="text/css" rel="stylesheet" />
        <title> PET - Programa de Educação Tutorial </title>
        <link rel="shortcut icon" href="images/pet.ico" />
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    </head>
    <body>
        <div id="header">
            <div id="logo"><span class="orangeText">PET</span> Sis<span class="blueText">temas</span></div>
            <a id="search" href="index.php">Sair</a>
        </div><!-- end #header -->
        <div id="leftside">
            <h2 >Cadastros</h2>
            <ul>
                <li><a href="cadastrarMembros.php">Membros</a></li>
                <li><a href="cadastrarNoticias.php">Notícias</a></li>
                <li><a href="cadastrarProjetos.php">Projetos</a></li>
            </ul>
            <h2 >Pesquisa/Alteração/Exclusão</h2>
            <ul>
                <li><a href="alterarMembros.php">Membros</a></li>
                <li><a href="alterarNoticias.php">Notícias</a></li>
                <li><a href="alterarProjetos.php">Projetos</a></li>
            </ul>
        </div><!-- end #sidebar -->

        <div id="main">
            <h2 align="center">Página Para Cadastro de Membros</h2> 
            <div id="cadastroMembros">
                <form name="input" action="incluirMembro.php" method="post">
                    <b>Nome: </b><input size="60px" type="text" name="nomeMembro" />   
                    <b>Data de Nascimento: </b><input id="date" maxlength="10" size="8px" type="text" name="dataNascMembro" /><i>(AAAAMMDD)</i>
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
        </div>
    </body>
</html>
