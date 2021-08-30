<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="script.php" method="post">
        <h3>Preencha Nome</h3>
        <input type="text" placeholder="Name" name="Name">
        <h3>Preencha Idade</h3>
        <input type="text" placeholder="Age" name="Age">
        <button type="submit">Enviar</button>
    </form>
    <?php 
        $msgError = isset($_SESSION['error']) ? $_SESSION['error'] : '';
        $msgSucess = isset($_SESSION['sucess']) ? $_SESSION['sucess'] : '';
        if(!empty($msgError))
        {
            echo "<h4 style='color:red'>$msgError</h4>";
        }
        else{
            echo "<h4 style='color:green'>$msgSucess</h4>";
        }
    session_destroy();
?>
</body>
</html>