<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 20:57:45
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7f1b9bc8072_38599368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aeb618c3454a91dc8b761583f09cd94983369bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\header.tpl',
      1 => 1606939064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7f1b9bc8072_38599368 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo BASE_URL;?>
">   
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  



</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registrarse">Registrarse</a>
      <li>
        <a class="nav-link" href="login">Login</a>
      </li>
      <li>
        <a class="nav-link" href="logout">Logout</a>
      </li>
        <li>
        <a class="nav-link" href="administrador">Administrador</a>
      </li>
    </ul>

  </div>
</nav><?php }
}
