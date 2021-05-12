<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:26:10
  from '/var/www/example.com/design/template/html/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c2bd21fc481_43118698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34ea33c1d14e2d1908613f3c364feb951baac89b' => 
    array (
      0 => '/var/www/example.com/design/template/html/index.tpl',
      1 => 1620665377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
    'file:partials/svg-sprite.tpl' => 1,
  ),
),false)) {
function content_609c2bd21fc481_43118698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Основная часть -->

<div class="content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<!-- Основная часть (The End) -->

<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:partials/svg-sprite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
