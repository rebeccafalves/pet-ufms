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
            <!--<img src="images/pet.png" alt="A imagem não foi encontrada" width="88" height="78" > -->
            <div id="logo"><span class="orangeText">PET</span> Sis<span class="blueText">temas</span></div>
            <span id="search">
                <form action="http://www.google.com/search" method="get" target="_blank">
                    <tr>
                        <td align="middle" width="196">
                            <span><a href="http://www.google.com/" target="_blank"></a></span>
                            <input maxLength="255" size="23" name="q"></input>
                            <input type="hidden" value="en" name="hl"></input>
                            <input type="submit" value="Pesquisa via Google" name="btnG"></input>
                        </td>
                    </tr>
                </form>
            </span>
            <!--</img> -->
        </div><!-- end #header -->

        <div id="navbar"> <!-- menu !-->
            <ul>
                <li ><a href="index.php">Início</a></li> <!-- 5 ultimos posts de notícias-->
                <li id="current"><a href="nossaHistoria.php">Nossa História</a></li> <!-- html -->
                <li ><a href="membros.php">Membros</a></li>         <!-- banco-->       
                <li ><a href="noticias.php">Notícias</a></li>  <!-- banco -->
                <li ><a href="projetos.php">Projetos</a></li>  <!-- banco -->
                <li ><a href="multimidia.php">Multimídia</a></li> <!-- html -->
                <li ><a href="facaParte.php">Faça Parte</a></li> <!-- html -->
                <li ><a href="contato.php">Contato</a></li> <!-- mandar por e-mail -->
                <div id="data">                 
                    <li ><a href="login.php">Faça seu login</a></li>
                </div>
            </ul>
            <?php
            // put your code here
            ?>
        </div> <!-- FIM do menu !-->
        <div id="leftside">

        </div>

        <div id="main">
            <img src="images/pet.png" alt="A imagem não foi encontrada" width="200" height="220" > </img>
            <h3>O Grupo PET-Sistemas teve início em dezembro de 2010....</h3>
        </div>



    </body>
</html>
