<?php
$in = $_GET{"in"};

if ($in == 1) {
    echo "<script type='text/javascript'> alert('Bem Vindo!')</script>";
    header("Location: http://localhost/PagPETSistemas/administrativo/index.php");
} else if ($in == 2)
    echo "<script type='text/javascript'> alert('Usuário e/ou senha incorreta!')</script>";
?>

<div id="loginbox">
    <div id="title">Faça seu Login</div>
    <form name="input" action="includes/funcoes/realizarLogin.php" method="post">
        <ul><br/>
            Login: <input type="text" name="login" id="inputbox" />
            Senha: <input type="password" name="password" id="inputbox" /><br />
            <input type="submit" value="Login" id="button" />
        </ul>
    </form>
</div>
