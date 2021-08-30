<?php

function ValidaNome(string $nome) : bool
{
    if(empty($nome))
    {
        indexMenssagemError('O Nome Não Pode Ser Vazio, Preencha!');
        return false;
    }

    else if(strlen($nome) < 3)
    {
        indexMenssagemError('O Nome deve ter mais de 3 Caracteres');
        return false;
    }

    else if(strlen($nome) > 40)
    {
        indexMenssagemError('Esse Nome é muito grande');
        return false;
    }
    return true;
};

function ValidaIdade(string $idade) :bool
{
    if(empty($idade))
    {
        indexMenssagemError('A Idade Não Pode Ser Vazia, Preencha!');
        return false;
    }
    else if(!is_numeric($idade))
    {
        indexMenssagemError('Isso não é uma idade');
        return false;
    }
    return true;
};