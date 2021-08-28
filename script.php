<?php
include '.\Controller\ValidacaoController.php';
include '.\Model\CategoriaModel.php';

session_start();

$nome = $_POST['nome'];
$idade = $_POST['Idade'];

ValidaNome($nome);
ValidaIdade($idade);

if($idade >= 6 AND $idade <= 12)
{
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Infantil')
        {   
            $_SESSION['sucess'] = "O Competidor ". $nome." ,de idade,".$idade.". Está na categoria: ".$categorias[$i];
            header('location: index.php');
        };
    };
}else if($idade >= 13 AND $idade <= 18)
{
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Adolecente')
        {   
            $_SESSION['sucess'] = "O Competidor ". $nome." ,de idade,".$idade.". Está na categoria: ".$categorias[$i];
            header('location: index.php');
        };
    };
}else {
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Adulto')
        {   
            $_SESSION['sucess'] = "O Competidor ". $nome." ,de idade,".$idade.". Está na categoria: ".$categorias[$i];
            header('location: index.php');
        };
    };
}
