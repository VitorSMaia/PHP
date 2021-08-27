function ValidaNome(string $nome)
{
    if(empty($nome))
    {
        return $_SESSION['msg'] = 'O Nome Não Pode Ser Vazio, Preencha!';
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
}