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
  return isset($_SESSION['error']) ? $_SESSION['error'] : null;
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
  return isset($_SESSION['sucess']) ? $_SESSION['sucess'] : null;
};


function destroySession()
{
  session_unset($_SESSION['sucess']);
  session_unset($_SESSION['error']);
};
?>