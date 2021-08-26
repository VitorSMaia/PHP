<?php
    session_start();
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
        <?php 

        $msgError = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
        $msgSucess = isset($_SESSION['res']) ? $_SESSION['res'] : '';

            if(!empty($msgError))
            {
                echo "<h4 style='color:red'>$msgError</h4>";
            }
            else{
                
                echo "<h4 style='color:green'>$msgSucess</h4>";
            }
            session_destroy();
        ?>
        <h3>Preencha Nome</h3>
        <input type="text" placeholder="Nome" name="nome">
        <h3>Preencha Idade</h3>
        <input type="text" placeholder="Idade" name="Idade">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>