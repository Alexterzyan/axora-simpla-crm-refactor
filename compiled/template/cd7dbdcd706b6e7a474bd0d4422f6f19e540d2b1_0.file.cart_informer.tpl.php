<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:26:10
  from '/var/www/example.com/design/template/html/cart_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c2bd2237157_05519988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7dbdcd706b6e7a474bd0d4422f6f19e540d2b1' => 
    array (
      0 => '/var/www/example.com/design/template/html/cart_informer.tpl',
      1 => 1620665377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c2bd2237157_05519988 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['cart']->value->total_products;
}
}
