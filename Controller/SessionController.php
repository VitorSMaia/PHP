<?php
/**
 * Menssagem Erro
 */

function indexMenssagemError(string $menssagem) : void
{
  $_SESSION['error'] = $menssagem;
};

function returnMenssagemError() : ?string
{
  return $_SESSION['error'];
};

/**
 * Menssagem Sucess
 */

function indexMenssagemSucess(string $menssagem) : void
{
    $_SESSION['sucess'] = $menssagem;
};

function returnMenssagemSucess() : ?string
{
  return $_SESSION['sucess'];
};


function destroySession()
{
  session_unset($_SESSION['sucess']);
  session_unset($_SESSION['error']);
};
?>