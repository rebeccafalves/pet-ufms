<h3 align="center" ><center> Relação de Usuários</center></h3>

<script type="text/javascript" src="includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="includes/jQuery/jquery.mask.js"> </script>

<!-- O Script abaixo é usado para esconder e mostrar o div referente ao conteúdo que será mostrado.
Uma variável foi usada para controlar o check da tela, representando 'marcado' onde deverá aparecer conteúdo e 
'desmarcado' não deverá aparecer conteúdo -->
<script type="text/javascript" >
    var t = false;
    $(document).ready(function() {
        $("#tutores").click(function() {
            if (t == false) {
                $("#div_tutores").show("slow");
                t = true;
            }
            else {
                $("#div_tutores").hide("slow");
                t = false;
            }
        });
    });
    
    var p = false;
    $(document).ready(function() {
        $("#petianos").click(function() {
            if (p == false) {
                $("#div_petianos").show("slow");
                p = true;
            }
            else {
                $("#div_petianos").hide("slow");
                p = false;
            }        
        });
    });
    
    var o = false;
    $(document).ready(function() {
        $("#outros").click(function() {
            if (o== false) {
                $("#div_outros").show("slow");
                o = true;
            }
            else {
                $("#div_outros").hide("slow");
                o = false;
            }  
        });
    });
</script>

<td><input id ="tutores" type="checkbox" value="tutores" /></td>
<b> - Tutores</b><br/>
<div id="div_tutores" hidden="hidden"> 
    <table>
        <tr>
            <td>
                <?php
                //Consulta e exibicao dos dados de tutor
                include ("includes/funcoes/conexao.php");
                $query = "select u.nome, u.email, u.lattes, t.data_ini, t.data_fim, u.foto_id_arquivos from tutor t join usuario u on t.id_usuario = u.id_usuario";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                if ($num == 0) {
                    echo "Não há Usuários desse tipo Cadastrados";
                }
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);

                    echo "<div class='membros'>";
                    if (!empty($row[5])) {
                        $query2 = "select caminho from arquivos where id_arquivos =$row[5]";
                        $result2 = mysql_query($query2);
                        $num2 = mysql_num_rows($result2);
                        for ($j = 0; $j < $num2; $j++) {
                            $img = mysql_fetch_row($result2);
                            ?>
                            <img src="<?php echo $img[0] ?>" alt="A imagem não foi encontrada" width="100" height="100" style="float:right" ></img>
                            <?php
                        }
                    }
                    echo "<b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Lattes:</b> $row[2]<br/>
                    <b>Data de início:</b>" . substr($row[3], -2) . "/" . substr($row[3], 5, 2) . "/" . substr($row[3], 0, 4) . "<br/>";
                    if (!empty($row[4])) { //Se não houver conteúdo na data fim, ela é omitida
                        echo "<b>Data Final:</b>" . substr($row[4], -2) . "/" . substr($row[4], 5, 2) . "/" . substr($row[4], 0, 4) . "<br/>";
                    }
                    echo "<br/><br/></div><br/>";
                }
                ?>
            </td>
        </tr>
    </table>
</div>

<td><input id ="petianos" type="checkbox" value="petianos" /></td>
<b> - Petianos</b><br/>
<div id="div_petianos" hidden="hidden">
    <table>
        <tr>
            <td>
                <?php
                //Consulta e exibicao dos dados de petiano
                include ("includes/funcoes/conexao.php");
                $query = "select u.nome, u.email, u.lattes, u.descricao, u.status, p.data_ini, p.data_fim, u.foto_id_arquivos from petiano p join usuario u on p.id_usuario = u.id_usuario";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                if ($num == 0) {
                    echo "Não há Usuários desse tipo Cadastrados";
                }
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'>";
                    if (!empty($row[7])) {
                        $query2 = "select caminho from arquivos where id_arquivos =$row[7]";
                        $result2 = mysql_query($query2);
                        $num2 = mysql_num_rows($result2);
                        for ($j = 0; $j < $num2; $j++) {
                            $img = mysql_fetch_row($result2);
                            ?>
                            <img src="<?php echo $img[0] ?>" alt="A imagem não foi encontrada" width="100" height="100" style="float:right" ></img>
                            <?php
                        }
                    }
                    echo "<b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Lattes:</b> $row[2]<br/>
                    <b>Descrição:</b> $row[3]<br/>";
                    if ($row[4] == 'A') { //'A' Indica 'Ativo' e 'I' indica 'Inativo'
                        echo "<b>Situação:</b>" . " Ativo" . "<br/>";
                    } else {
                        echo "<b>Situação:</b>" . " Inativo" . "<br/>";
                    }
                    echo "<b>Data de início:</b>" . substr($row[5], -2) . "/" . substr($row[5], 5, 2) . "/" . substr($row[5], 0, 4) . "<br/>";
                    if (!empty($row[6])) { //Se não houver conteúdo na data fim, ela é omitida
                        echo "<b>Data Final:</b>" . substr($row[6], -2) . "/" . substr($row[6], 5, 2) . "/" . substr($row[6], 0, 4) . "<br/>";
                    }

                    echo "<br/><br/></div><br/>";
                }
                ?>
            </td>
        </tr>
    </table>
</div>

<td><input id ="outros" type="checkbox" value="outros" /></td>
<b > - Outros</b><br/>
<div id="div_outros" hidden="hidden">
    <table>
        <tr>
            <td>
                <?php
//Consulta e exibicao dos dados do usuario
                include ("includes/funcoes/conexao.php");
                $query = "select u.nome, u.email, u.lattes, u.foto_id_arquivos from usuario u where u.id_usuario not in (select t.id_usuario from tutor t) and u.id_usuario not in (select p.id_usuario from petiano p)";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                if ($num == 0) {
                    echo "Não há Usuários desse tipo Cadastrados";
                }
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'>";

                    if (!empty($row[3])) {
                        $query2 = "select caminho from arquivos where id_arquivos =$row[3]";
                        $result2 = mysql_query($query2);
                        $num2 = mysql_num_rows($result2);
                        for ($j = 0; $j < $num2; $j++) {
                            $img = mysql_fetch_row($result2);
                            ?>
                            <img src="<?php echo $img[0] ?>" alt="A imagem não foi encontrada" width="100" height="100" style="float:right" ></img>
                            <?php
                        }
                    }

                    echo "<b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Lattes:</b> $row[2]<br/><br/><br/><br/></div><br/>";
                }
                ?>
            </td>
        </tr>
    </table>
</div>
