<?php

include_once './Model/CategoriaModel.php';
session_start();
$Name = $_POST['Name'];
$Age = $_POST['Age'];

defineCategoria($Name,$Age);

header('Location: index.php');

?>