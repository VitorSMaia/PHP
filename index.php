<?php
$categorias = [];

$categorias[0] = 'Infantil';
$categorias[1] = 'Adolecente';
$categorias[2] = 'Adulto';
$categorias[3] = 'Idoso';

$nome = "Vitor";
$idade = 20;

if($idade >= 6 AND $idade <= 12)
{
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Infantil')
        {   
            echo "O Competidor ". $nome." Com Idade,".$idade.". Está na categoria: ".$categorias[$i];
        };
    };
}else if($idade >= 13 AND $idade <= 18)
{
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Adolecente')
        {   
            echo "O Competidor ". $nome." Com Idade,".$idade.". Está na categoria: ".$categorias[$i];
        };
    };
}else{
    for($i = 0;$i < count($categorias);$i++)
    {
        if($categorias[$i] == 'Adulto')
        {   
            echo "O Competidor ". $nome." Com Idade,".$idade.". Está na categoria: ".$categorias[$i];
        };
    };
}
