<?php
/* Smarty version 3.1.39, created on 2021-05-13 19:20:19
  from '/var/www/example.com/design/template/html/partials/blog_posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609d7bf31c8765_86346010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c6e4c372220fcfaa6f3ab6b9c572579f805cbd0' => 
    array (
      0 => '/var/www/example.com/design/template/html/partials/blog_posts.tpl',
      1 => 1620932817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609d7bf31c8765_86346010 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<div class="col-sm-6 col-lg-4">
    <div class="exceprt">
        <a title="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
" class="exceprt__image"><img
                    src="<?php echo asset($_smarty_tpl->tpl_vars['post']->value['image']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
"></a>
        <h3 class="exceprt__title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/blog/<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</a>
        </h3>
		<div class="exceprt__text"><?php echo $_smarty_tpl->tpl_vars['post']->value['annotation'];?>
</div>
        <div class="exceprt__date"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</div>
    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
