<?php
include './Controller/SessionController.php';
include './Controller/ValidacaoController.php';

function defineCategoria(string $Name ,string $Age)
{
    $categorias = [];
    $categorias[0] = 'Infantil';
    $categorias[1] = 'Adolecente';
    $categorias[2] = 'Adulto';
    $categorias[3] = 'Idoso';

    if(ValidaNome($Name) && ValidaIdade($Age))
    {    
        if($Age >= 6 AND $Age <= 12)
        {
            for($i = 0;$i < count($categorias);$i++)
            {
                if($categorias[$i] == 'Infantil')
                {   
                    indexMenssagemSucess("O Competidor ". $Name." ,de Age,".$Age.". Está na categoria: ".$categorias[$i]);
                };
            };
        }
        else if($Age >= 13 AND $Age <= 18)
        {
            for($i = 0;$i < count($categorias);$i++)
            {
                if($categorias[$i] == 'Adolecente')
                {   
                    indexMenssagemSucess("O Competidor ". $Name." ,de Age,".$Age.". Está na categoria: ".$categorias[$i]);
                };
            };
        }
        else 
        {
            for($i = 0;$i < count($categorias);$i++)
            {
                if($categorias[$i] == 'Adulto')
                {   
                   indexMenssagemSucess("O Competidor ". $Name." ,de Age,".$Age.". Está na categoria: ".$categorias[$i]);
                };
            };
        }
    }
    else
    {
        returnMenssagemError();
    }
} 

?>

