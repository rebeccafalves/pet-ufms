<?php

function incluirArquivo($pasta) {
    include ("../../includes/funcoes/conexao.php");
    $foto = $_POST["file"];
    $name = null;

    $type = $_FILES['file']['type'];
    $size = $_FILES['file']['size'];
    if ($_FILES["file"]["error"] > 0) {
        return 3; //erro
    } else if ($type == "video/avi" || $size > 2000000) { //imagens que pode ser upload, e tamanho de arquivo maximo
        return 4; //acima do limite
    } else {
        $temp = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];

        move_uploaded_file($temp, "../../arquivos/" . $pasta . "/" . $name);
        $query = <<<hereDoc
insert into `pet-sistemas`.`arquivos` (caminho, data) values ('arquivos/$pasta/$name' , current_date() )
hereDoc;
    }

    $sql = mysql_query($query);


    if ($sql == false) {
        return 2;
    } else {
        return 1;
    }
}

?>
