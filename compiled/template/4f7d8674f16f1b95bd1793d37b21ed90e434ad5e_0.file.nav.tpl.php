<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:26:10
  from '/var/www/example.com/design/template/html/partials/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c2bd2234855_07493158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f7d8674f16f1b95bd1793d37b21ed90e434ad5e' => 
    array (
      0 => '/var/www/example.com/design/template/html/partials/nav.tpl',
      1 => 1620665377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c2bd2234855_07493158 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value) {?>
    <ul class="menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                <li class="menu__item">
                    <div class="menu__row <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?>has-dropdown<?php }?>">
                        <a href="catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" class="menu__link">
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                <span class="menu__icon"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->categories_images_dir;
echo $_smarty_tpl->tpl_vars['c']->value->image;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['c']->value->icon) {?>
                                <span class="menu__icon"><i  class="<?php echo $_smarty_tpl->tpl_vars['c']->value->icon;?>
"></i></span>
                            <?php }?>
                            <span class="menu__text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?>
                        <button type="button" class="menu__toggle-btn"></button>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?>
                        <div class="menu__dropdown">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value->subcategories, 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['sub']->value->visible) {?>
                                <div class="menu__group">
                                    <div class="menu__group-title">
                                        <a href="catalog/<?php echo $_smarty_tpl->tpl_vars['sub']->value->url;?>
" class="menu__group-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['sub']->value->subcategories) {?>
                                        <button type="button" class="menu__toggle-btn"></button>
                                        <?php }?>
                                    </div>

                                    <?php if ($_smarty_tpl->tpl_vars['sub']->value->subcategories) {?>
                                        <div class="menu__group-content">
                                            <ul class="menu__group-list">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub']->value->subcategories, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['s']->value->visible) {?>
                                                        <li class="menu__group-item">
                                                            <a href="catalog/<?php echo $_smarty_tpl->tpl_vars['s']->value->url;?>
" class="menu__group-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                        </li>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                                                                    </div>
                                    <?php }?>
                                </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </li>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
