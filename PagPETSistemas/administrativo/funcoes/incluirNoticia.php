<?php

include ("../../includes/funcoes/conexao.php");
include ("/incluirArquivo.php"); //coneccao com o banco

$id = mysql_fetch_field($result) + 1;
$data = $_POST["dataInicio"];
$data = substr($data, -4) . substr($data, 3, 2) . substr($data, 0, 2);
$autor = $_POST["id_usuario"];
$titulo = $_POST["nomeCadastro"];
$conteudo = $_POST["desc"];
$assunto = $_POST["assunto"];
$tipo = $_POST["tipo"];
$file = $_FILE["file"];

$ret = incluirArquivo('noticia');

if(strlen($autor) == 0){
    echo"<script type='text/javascript'> alert('Conteudo não pode ser nulo!')</script>";
}else if ($ret == 1){ // Se o arquivo foi inserido
    $name = $_FILES['file']['name']; //obtem o nome do arquivo
    $query = "SELECT id_arquivos FROM arquivos WHERE caminho='arquivos/noticia/$name' order by id_arquivos desc";
    $res = mysql_query($query);

    if($dados = mysql_fetch_array($res)){//arrumar de acordo com os dados do banco de dados
        $ins = "INSERT INTO `pet-sistemas`.`noticia` (data,titulo, conteudo,autor, assunto,tipo,caminho_id_arquivos) VALUES ('$data','$titulo','$conteudo','$autor','$assunto','$tipo','$dados[0]')";
        $insere = mysql_query($ins);

    }

    mysql_close($conexao); // finalizando a conexão

    if ($insere == false)
        $in = 2;
    else
        $in = 1;       
   // mcrypt_module_get_algo_block_size(algorithm) 

}
    header("Location: ../index.php?cod=cadastrarNoticias&in=$in");
?>

<script type="text/javascript">

    document.write(txt.length);

</script>




