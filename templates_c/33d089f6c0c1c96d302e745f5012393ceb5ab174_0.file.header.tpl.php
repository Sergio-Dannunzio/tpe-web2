<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 20:47:09
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83532dbd6608_01835457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d089f6c0c1c96d302e745f5012393ceb5ab174' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\header.tpl',
      1 => 1602442024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f83532dbd6608_01835457 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />

    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
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
