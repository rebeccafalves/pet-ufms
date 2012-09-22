<h3>Multimídia</h3>
<table>
    <tr>
        <td>
            <?php
            //Consulta e exibicao dos dados de tutor
            include ("includes/funcoes/conexao.php");
            $query = "select id_arquivos, titulo, data from multimidia";
            $result = mysql_query($query);
            $num = mysql_num_rows($result);
            if ($num == 0) {
                echo "Não há Imagens.";
            }
            for ($i = 0; $i < $num; $i++) {
                $row = mysql_fetch_row($result);
                $query2 = "select caminho from arquivos where id_arquivos =$row[0]";
                $result2 = mysql_query($query2);
                $num2 = mysql_num_rows($result2);
                for ($j = 0; $j < $num2; $j++) {
                    ?>
                    <b><h3>
                            <?php echo $row[1]; ?> 
                        </h3></b>
                    <b> <?php
                    echo "Em: " . substr($row[2], 8, 2) . "/" . substr($row[2], 5, 2) . "/" . substr($row[2], 0, 4);
                    $img = mysql_fetch_row($result2);
                            ?>
                    </b>
                    <img src="<?php echo $img[0] ?>" alt="A imagem não foi encontrada" width="800" height="800" style="float:right" ></img><br/>
                    <?php
                    echo "<br/>";
                }
                echo "<br/>";
            }

            echo "<br/><br/><br/>";
            ?>
        </td>
    </tr>
</table>    