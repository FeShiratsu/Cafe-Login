<?php
include("vars.php");
$firstName = isset($_POST['email']) ? $_POST['email'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Café Café</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="about.php" method="get">
        <div id="LoginSection">
            <div id="Login">
                <h2>Vamos realizar seu acesso!</h2>
                <div class="texto">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Digite o Email">
                </div>
                <div class="texto">
                    <label for="">Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha">
                </div>
                <button class="botao" type="submit">Enviar</button>
                <h2>
                    <?php
                    echo $email;
                    ?>
                </h2>
            </div>
        </div>
    </form>
    <form action="about.php" method="post" id="Este">
                <div id="RegisterSection">
                    <div id="Register">
                        <h2>Não possui uma conta? Registre-se</h2>
                        <div class="texto">
                            <label for="">Nome </label>
                            <input type="text" name="nome" placeholder="Digite seu Nome">
                        </div>
                        <div class="texto">
                            <label for="">Email: </label>
                            <input type="email" name="email" placeholder="Digite o Email">
                        </div>
                        <div class="texto">
                            <label for="">Senha </label>
                            <input type="text" name="senha" placeholder="Digite sua Senha">
                        </div>
                        <button class="botao" type="submit">Enviar</button>
                        <?php
                        echo $email;
                        ?>
                    </div>
                </div>
            </form>

</body>