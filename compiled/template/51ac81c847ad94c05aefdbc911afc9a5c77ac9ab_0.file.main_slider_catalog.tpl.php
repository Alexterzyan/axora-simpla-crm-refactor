<?php
/* Smarty version 3.1.39, created on 2021-05-14 17:10:29
  from '/var/www/example.com/design/template/html/partials/main_slider_catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609eaf05cf21d9_07535537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ac81c847ad94c05aefdbc911afc9a5c77ac9ab' => 
    array (
      0 => '/var/www/example.com/design/template/html/partials/main_slider_catalog.tpl',
      1 => 1621012146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609eaf05cf21d9_07535537 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners_slider']->value, 'banner', false, 'key');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['image'] && $_smarty_tpl->tpl_vars['banner']->value['type'] == 2) {?>
        <div class="main-catalog__grid <?php if ($_smarty_tpl->tpl_vars['key']->value == 5) {?> main-catalog__grid_large<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link'];?>
" style="background-color: #c5cdd5;"
               class="main-catalog__item <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?> main-catalog__item_vertical <?php }?>">
                <span class="main-catalog__item-hover-bg" style="background-color: #e6edf5;"></span>
                <span class="main-catalog__image"
                      style="background-image: url('<?php echo asset($_smarty_tpl->tpl_vars['banner']->value['image']);?>
');"></span>
                <span class="main-catalog__title"><?php echo $_smarty_tpl->tpl_vars['banner']->value['sub_text'];?>
</span>
            </a>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
