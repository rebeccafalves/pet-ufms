
<?php

$conexao = mysql_connect("localhost", "root", "root") or die("falhou ao acessar o bd");
mysql_select_db("petsistemas", $conexao);

$login = $_POST["login"];
$password = md5(utf8_encode($_POST["password"]));

//query SQL
echo $login . "   -    " . $password;
$strSQL = "select * from membros where nome = '$login' and senha = '$password' and permissao = 1";

// Executa a query (o recordset $rs cont�m o resultado da query)
$rs = mysql_query($strSQL);
$cont = mysql_num_rows($rs);

if ($cont == 0)
    $in = 2;

else
    $in = 1;

header("Location: ../../index.php?cod=login&in=$in");

mysql_close();
?>

