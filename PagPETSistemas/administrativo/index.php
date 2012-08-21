<?php
if ($_GET['cod'] != null) 
    $ID = $_GET['cod']; 
  else
    $ID ='admin';

?>

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
            <img src="images/pet.png" alt="A imagem não foi encontrada" width="88" height="78" >
                <div id="logo"><span class="orangeText">PET</span> Sis<span class="blueText">temas</span></div>
                <a id="search" href="../index.php">Sair</a>
            </img>
        </div><!-- end #header -->
        <div id="leftside">
            <h2 >Cadastro</h2>
            <ul>
                <li><a href="?cod=cadastrarMembros">Membros</a></li>
                <li><a href="?cod=cadastrarNoticias">Notícias</a></li>
                <li><a href="?cod=cadastrarProjetos">Projetos</a></li>
                <li><a href="?cod=cadastrarPlanejamentos">Planejamentos</a></li>
                <li><a href="?cod=cadastrarPublicacoes">Publicações</a></li>
                <li><a href="?cod=cadastrarFacaParte">Faça Parte</a></li>
            </ul>
            <h2 >Alteração</h2>
            <ul>
                <li><a href="?cod=alterarMembros">Membros</a></li>
                <li><a href="?cod=alterarNoticias">Notícias</a></li>
                <li><a href="?cod=alterarProjetos">Projetos</a></li>
                <li><a href="?cod=alterarPlanejamentos">Planejamentos</a></li>
                <li><a href="?cod=alterarPublicacoes">Publicações</a></li>
            </ul>
            <h2 >Exclusão</h2>
            <ul>
                <li><a href="?cod=excluirMembros">Membros</a></li>
                <li><a href="?cod=excluirNoticias">Notícias</a></li>
                <li><a href="?cod=excluirProjetos">Projetos</a></li>
                <li><a href="?cod=excluirPlanejamentos">Planejamentos</a></li>
                <li><a href="?cod=excluirPublicacoes">Publicações</a></li>
                <li><a href="?cod=excluirFacaParte">Faça Parte</a></li>
            </ul>
        </div><!-- end #sidebar -->

        <div id="main">
            <?php
            include($ID . '.php');
            ?>
        </div>



    </body>
</html>

