<?php
if ($_GET['cod'] != null) 
    $ID = $_GET['cod']; 
  else
    $ID ='home';

    function setCurrent(){
      echo 'id="current"';
    }
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <link href="style2.css" type="text/css" rel="stylesheet" media="screen and (max-width: 1024px)"/> 
        <link href="style.css" type="text/css" rel="stylesheet" media="screen and (min-width: 1100px)"/>
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
                <li <?php if($ID == 'home')setCurrent(); ?>><a href="?cod=home">Início</a></li> <!-- 5 ultimos posts de notícias-->
                <li <?php if($ID == 'nossaHistoria') setCurrent(); ?>><a href="?cod=nossaHistoria">Nossa História</a></li> <!-- html -->
                <li <?php if($ID == 'usuarios') setCurrent(); ?>><a href="?cod=usuarios">Usuários</a></li>         <!-- banco-->       
                <li <?php if($ID == 'noticias') setCurrent(); ?>><a href="?cod=noticias">Notícias</a></li>  <!-- banco -->
                <li <?php if($ID == 'projetos') setCurrent(); ?>><a href="?cod=projetos">Projetos</a></li>  <!-- banco -->
                <li <?php if($ID == 'publicacoes') setCurrent(); ?>><a href="?cod=publicacoes">Publicações</a></li>  <!-- banco -->
                <li <?php if($ID == 'multimidia') setCurrent(); ?>><a href="?cod=multimidia">Multimídia</a></li> <!-- html -->
                <li <?php if($ID == 'facaParte') setCurrent(); ?>><a href="?cod=facaParte">Faça Parte</a></li> <!-- html -->
                <li <?php if($ID == 'contato') setCurrent(); ?>><a href="?cod=contato">Contato</a></li> <!-- mandar por e-mail -->
                <div id="data">                 
                    <li <?php if($ID == 'login')setCurrent();?>><a href="?cod=login">Faça seu login</a></li>
                </div>
            </ul>
<?php
// put your code here
?>
        </div> <!-- FIM do menu !-->
        <div id="leftside">
		<h2> Links Úteis</h2><br/>
		<a href='http://www.ufms.br' target= '_blank'><img src = 'images/left-side/logo-ufms.png'/>  </a><br/><br/><hr/>
		<a href='http://www.facom.ufms.br' target= '_blank'><img src = 'images/left-side/logo-facom.png'/>  </a><br/><br/><hr/>
		<a href='http://sigpet.mec.gov.br/' target= '_blank'><img src = 'images/left-side/sigpet_logo.png'/>  </a><br/><br/><hr/>
		<a href='http://www.del.ufms.br/pet/' target= '_blank'><img src = 'images/left-side/logo-engele.png'/>  </a><br/><br/><hr/>
		<a href='http://pet.ledes.net/' target= '_blank'><img src = 'images/left-side/logo-ciencias.png'/>  </a><br/><br/><hr/>
        </div>

        <div id="main">
<?php
include($ID . ".php");
?>
        </div>



    </body>
</html>
