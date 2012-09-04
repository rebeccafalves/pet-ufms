<h3 align="center" ><center> Relação de Usuários</center></h3>

<script type="text/javascript" src="includes/jQuery/jquery.js"> </script>
<script type="text/javascript" src="includes/jQuery/jquery.mask.js"> </script>
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
                include ("includes/funcoes/conexao.php");
                $query = "select u.nome, u.email, u.lattes, t.data_ini, t.data_fim from tutor t join usuario u on t.id_usuario = u.id_usuario";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'><b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Lattes:</b> $row[2]<br/>
                    <b>Data de início:</b>" . substr($row[3], -2) . "/" . substr($row[3], 5, 2) . "/" . substr($row[3], 0, 4) . "<br/>";
                    if (!empty($row[4])) {
                        echo "<b>Data Final:</b>" . substr($row[4], -2) . "/" . substr($row[4], 5, 2) . "/" . substr($row[4], 0, 4) . "<br/>";
                    }
                    echo "</div><br/>";
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
                include ("includes/funcoes/conexao.php");
                $query = "select u.nome, u.email, u.lattes, u.descricao, u.status, p.data_ini, p.data_fim from petiano p join usuario u on p.id_usuario = u.id_usuario";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'><b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Lattes:</b> $row[2]<br/>
                    <b>Descrição:</b> $row[3]<br/>";
                    if ($row[4] == 'A') {
                        echo "<b>Situação:</b>"." Ativo". "<br/>";
                    }
                    else{
                        echo "<b>Situação:</b>"." Inativo". "<br/>";
                    }
                    echo "<b>Data de início:</b>" . substr($row[5], -2) . "/" . substr($row[5], 5, 2) . "/" . substr($row[5], 0, 4) . "<br/>";
                    if (!empty($row[6])) {
                        echo "<b>Data Final:</b>" . substr($row[6], -2) . "/" . substr($row[6], 5, 2) . "/" . substr($row[6], 0, 4) . "<br/>";
                    }
                    echo "</div><br/>";
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
                include ("includes/funcoes/conexao.php");
                $query = "select u.nome, u.email, u.lattes from usuario u where u.id_usuario not in (select t.id_usuario from tutor t) and u.id_usuario not in (select p.id_usuario from petiano p)";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'><b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Lattes:</b> $row[2]<br/>";
                    echo "</div><br/>";
                }
                ?>
            </td>
        </tr>
    </table>
</div>
