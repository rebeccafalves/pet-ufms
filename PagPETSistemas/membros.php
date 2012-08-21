<h3 align="center" ><center> Relação de Membros</center></h3>

<?php
include ("includes/funcoes/conexao.php");
$query = "select * from membros";
$result = mysql_query($query);
$num = mysql_num_rows($result);
$queryCurso = "select * from curso";
$resultCurso = mysql_query($queryCurso);
$numC = mysql_num_rows($resultCurso);

for ($i = 0; $i < $num; $i++) {
    $queryCurso = "select * from curso";
    $resultCurso = mysql_query($queryCurso);
    $numC = mysql_num_rows($resultCurso);
    $row = mysql_fetch_row($result);

    for ($j = 0; $j < $numC; $j++) {

        $rowC = mysql_fetch_row($resultCurso);
        if ($rowC[1] == $row[3]) {

            $cursoM = $rowC[0];
        }
    }

    if ($row[9] == 1) {
        $status = "Membro Ativo";
    } else if ($row[9] == 2) {
        $status = "Membro Ausente";
    }
    if ($row[8] == 1) {
        $tipo = "Professor";
    } else if ($row[8] == 2) {
        $tipo = "Aluno";
    }

    echo "<div class='membros'><b>  Nome:</b>  $row[0]<br/>
    <b>RGA/Registro:</b>  $row[1]<br/>
    <b>Categoria:</b> $tipo<br/>
    <b>E-mail:</b> $row[2]<br/>
    <b>Data de Nascimento:</b>" . substr($row[4], -2) . "/" . substr($row[4], 5, 2) . "/" . substr($row[4], 0, 4) . "<br/>
    <b>Curso:</b> $cursoM<br/>
    <b>Situação no PET:</b> $status<br/>
    <b>Sobre o Membro:</b> $row[5]<br/>";

    echo "</div><br/>";
}
?>