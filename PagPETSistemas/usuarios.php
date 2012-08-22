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
            <td>- Dados dos tutores </td>            
        </tr>
    </table>
</div>

<td><input id ="petianos" type="checkbox" value="petianos" /></td>
<b> - Petianos</b><br/>
<div id="div_petianos" hidden="hidden"> 
    <table>
        <tr>
            <td>- Dados dos Petianos </td>            
        </tr>
    </table>
</div>

<td><input id ="outros" type="checkbox" value="outros" /></td>
<b > - Outros</b><br/>
<div id="div_outros" hidden="hidden"> 
    <table>
        <tr>
            <td>- Dados dos Outros </td>            
        </tr>
    </table>
</div>
