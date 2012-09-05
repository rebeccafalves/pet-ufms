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
                $query = "select u.nome, u.email, u.nome_usuario, u.permissao, u.descricao, u.status, t.data_ini from tutor t join usuario u on t.id_usuario = u.id_usuario";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'><b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Usuário:</b> $row[2]<br/>
                    <b>Permissão:</b> $row[3]<br/>
                    <b>Observações:</b> $row[4]<br/>
                    <b>Status:</b> $row[5]<br/>
                    <b>Data de início:</b>" . substr($row[6], -2) . "/" . substr($row[6], 5, 2) . "/" . substr($row[6], 0, 4) . "<br/>";
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
                $query = "select u.nome, u.email, u.nome_usuario, u.permissao, u.descricao, u.status, p.rga, p.cpf, p.telefone, p.endereco, p.lattes, p.data_nasc, p.data_ini  from petiano p join usuario u on p.id_usuario = u.id_usuario";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'><b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Usuário:</b> $row[2]<br/>
                    <b>Permissão:</b> $row[3]<br/>
                    <b>Observações:</b> $row[4]<br/>
                    <b>Status:</b> $row[5]<br/>
                    <b>RGA:</b> $row[6]<br/>
                    <b>CPF:</b> $row[7]<br/>
                    <b>Telefone:</b> $row[8]<br/>
                    <b>Endereço:</b> $row[9]<br/>
                    <b>Link do Lattes:</b> $row[10]<br/>
                    <b>Data de Nascimento:</b>" . substr($row[11], -2) . "/" . substr($row[11], 5, 2) . "/" . substr($row[11], 0, 4) . "<br/>
                    <b>Data de início:</b>" . substr($row[12], -2) . "/" . substr($row[12], 5, 2) . "/" . substr($row[12], 0, 4) . "<br/>";
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
                $query = "select u.nome, u.email, u.nome_usuario, u.permissao, u.descricao, u.status from usuario u where u.id_usuario not in (select t.id_usuario from tutor t) and u.id_usuario not in (select p.id_usuario from petiano p)";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                for ($i = 0; $i < $num; $i++) {
                    $row = mysql_fetch_row($result);
                    echo "<div class='membros'><b>  Nome:</b>  $row[0]<br/>
                    <b>E-mail:</b> $row[1]<br/>
                    <b>Usuário:</b> $row[2]<br/>
                    <b>Permissão:</b> $row[3]<br/>
                    <b>Observações:</b> $row[4]<br/>
                    <b>Status:</b> $row[5]<br/>";
                    echo "</div><br/>";
                }
                ?>
            </td>
        </tr>
    </table>
</div>
