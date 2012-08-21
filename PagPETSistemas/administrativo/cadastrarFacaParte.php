<?php
$in = $_GET{"in"};

if ($in == 1) {
    echo "<script type='text/javascript'> alert('Arquivo Enviado com sucesso!')</script>";
} else if ($in == 2) {
    echo "<script type='text/javascript'> alert('Arquivo não enviado!')</script>";
}
?>



<h2 align="center"> Cadastrar Faça Parte </h2>
<div id="cadastroFacaParte">
    <form id ="form" name="input" action="funcoes/incluirFacaParte.php" method="post" enctype="multipart/form-data">

        <h3>Escolha um arquivo para ser usado na página do Faça Parte:</h3>
        <div class="facaParte">
            <input type="file" id="file" name="file" />
            <input type="submit" value="Enviar"/>
            
        </div>
        <br/><i>CUIDADO! O último arquivo enviado estará disponível em um link</i>
    </form>
</div>