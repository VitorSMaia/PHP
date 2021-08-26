<?php

session_start();
$categorias = [];

$categorias[0] = 'Infantil';
$categorias[1] = 'Adolecente';
$categorias[2] = 'Adulto';
$categorias[3] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['Idade'];

if(empty($nome))
{
    // session_unset($_SESSION['msg']);
    $_SESSION['msg'] = 'O Nome Não Pode Ser Vazio, Preencha!';
    header('location: index.php');
}
else if(strlen($nome) < 3)
{
    // session_unset($_SESSION['msg']);
    $_SESSION['msg'] = 'O Nome deve ter mais de 3 Caracteres';
    header('location: index.php');
}
else if(strlen($nome) > 40)
{
    // session_unset($_SESSION['msg']);
    $_SESSION['msg'] = 'Esse Nome é muito grande';
    header('location: index.php');
}
else if(empty($idade))
{
    $_SESSION['msg'] = 'A Idade Não Pode Ser Vazia, Preencha!';
    header('location: index.php');

}
else if(!is_numeric($idade))
{
    $_SESSION['msg'] = 'Isso não é uma idade';
    header('location: index.php');
}


if($idade >= 6 AND $idade <= 12)
{
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Infantil')
        {   
            $_SESSION['res'] = "O Competidor ". $nome." Com Idade,".$idade.". Está na categoria: ".$categorias[$i];
            header('location: index.php');
        };
    };
}else if($idade >= 13 AND $idade <= 18)
{
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Adolecente')
        {   
            $_SESSION['res'] = "O Competidor ". $nome." Com Idade,".$idade.". Está na categoria: ".$categorias[$i];
            header('location: index.php');
        };
    };
}else {
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Adulto')
        {   
            $_SESSION['res'] = "O Competidor ". $nome." Com Idade,".$idade.". Está na categoria: ".$categorias[$i];
            header('location: index.php');
        };
    };
}
