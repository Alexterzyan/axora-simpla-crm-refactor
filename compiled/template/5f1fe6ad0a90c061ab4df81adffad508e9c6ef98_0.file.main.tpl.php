<?php
/* Smarty version 3.1.39, created on 2021-05-13 18:44:48
  from '/var/www/example.com/design/template/html/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609d73a0cd5e24_77724171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f1fe6ad0a90c061ab4df81adffad508e9c6ef98' => 
    array (
      0 => '/var/www/example.com/design/template/html/main.tpl',
      1 => 1620931245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/main_slider.tpl' => 1,
    'file:partials/main_slider_catalog.tpl' => 1,
    'file:partials/product.tpl' => 3,
    'file:partials/blog_posts.tpl' => 1,
  ),
),false)) {
function content_609d73a0cd5e24_77724171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('wrapper', 'index.tpl' ,false ,8);?>

<?php $_smarty_tpl->_assignInScope('canonical', '' ,false ,8);?>
<div class="container">
        <?php if ($_smarty_tpl->tpl_vars['banners_slider']->value) {?>
    <div class="main-slider-wrapper">
        <?php $_smarty_tpl->_subTemplateRender("file:partials/main_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['banners_slider']->value) {?>
        <div class="main-catalog">
            <?php $_smarty_tpl->_subTemplateRender("file:partials/main_slider_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
        <section class="catalog-slider-section">
            <h2 class="catalog-slider-section__title"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/new">Новинки</a></h2>
            <div class="catalog-slider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="catalog-slider__item">
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
        <section class="catalog-slider-section">
            <h2 class="catalog-slider-section__title"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/featured">Популярное</a></h2>
            <div class="catalog-slider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="catalog-slider__item">
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
        <section class="main-news-section">
            <h2><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/blog">Новости</a></h2>
            <div class="main-news-section__list row">
                <?php $_smarty_tpl->_subTemplateRender("file:partials/blog_posts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </section>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
        <section class="catalog-slider-section">
            <h2 class="catalog-slider-section__title"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/actions">Акции</a></h2>
            <div class="catalog-slider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounted_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="catalog-slider__item">
                        <?php $_smarty_tpl->_subTemplateRender("file:partials/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
    <?php }?>

        <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->header;?>
</h1>

        <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

</div>
<?php }
}
