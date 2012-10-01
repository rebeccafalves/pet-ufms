<h1>Notícias</h1>

<div style =	"border-top: 1px solid gray;
				border-bottom: 1px solid gray;
				margin-bottom: 50px;
				height: 40px;
				background-color: #F8F8F8;">
				
<h2>Últimas notícias<h2>
</div>

<?php //Consulta e exibicao dos dados de tutor
    include ("includes/funcoes/conexao.php");
    $query = "select n.titulo, n.tipo, n.conteudo, n.caminho_id_arquivos from noticia n";
    $result = mysql_query($query);
    $num = mysql_num_rows($result);
    
    for ($i = 0; $i < $num; $i++) {
        $row = mysql_fetch_row($result);


        $pergunta = "select caminho from arquivos where id_arquivos = $row[3]";
        $resultado = mysql_query($pergunta);
        $linha = mysql_fetch_row($resultado);
    
    

        ?>
        <div class='imagemnoticia'>
            <img src='<?php echo $linha[0]; ?>' " width="76px" height="76px"  alt="A imagem nao foi encontrada"  >
        </div>
        <?php 

        echo "<div class='noticia'> <b>Titulo:</b> $row[0]<br/>";
            echo "<b>tipo:</b>";
            if($row[1] == "1")
                echo "ensino <br/>";
            else if($row[1] == "2")
                echo "pesquisa <br/>";
            else
                echo "extens&atildeo <br/>";
            echo "<b>conteudo:</b> $row[2]<br/>";
            echo "<br/>";
        echo "</div>";
        echo "<hr>";
        //pelo amor de Deus de certooooooo!
    }
    
?>



