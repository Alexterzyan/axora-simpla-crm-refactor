<?php
/* Smarty version 3.1.39, created on 2021-05-14 17:10:29
  from '/var/www/example.com/design/template/html/partials/main_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609eaf05ce8d28_61340060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf6840454ecd9a515da5cb8f69e3f41a89c345b' => 
    array (
      0 => '/var/www/example.com/design/template/html/partials/main_slider.tpl',
      1 => 1621012146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609eaf05ce8d28_61340060 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-slider">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners_slider']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['image'] && $_smarty_tpl->tpl_vars['banner']->value['type'] == 1) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link'];?>
" class="main-slider__item">
    		<span class="main-slider__image"
                  style="background-image: url('<?php echo asset($_smarty_tpl->tpl_vars['banner']->value['image']);?>
');">
    			<?php if ($_smarty_tpl->tpl_vars['banner']->value['sub_text']) {?>
                    <span class="main-slider__image-text">
                        <span class="main-slider__image-text-content"><?php echo $_smarty_tpl->tpl_vars['banner']->value['sub_text'];?>
</span>
                    </span>
                <?php }?>
    		</span>
            </a>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
