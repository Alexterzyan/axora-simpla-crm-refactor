<?php
/* Smarty version 3.1.39, created on 2021-05-09 19:59:47
  from 'D:\OpenServer\domains\simpla-refactor\design\template\html\partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609815035c25c0_55070713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '632a5a16a77ec8f6109c442ad25eb6acf5d56d96' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla-refactor\\design\\template\\html\\partials\\footer.tpl',
      1 => 1608212351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609815035c25c0_55070713 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer">
    <div class="footer__content">
        <div class="container">
            <div class="footer__content-inner row">
                <div class="footer__col col-sm-6 col-md-3">
                    <div class="footer__nav">
                        <div class="footer__nav-title">
                            <a href="#">Информация</a>
                        </div>
                        <ul class="footer__nav-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id == 1) {?>
                                    <li class="footer__nav-item ">
                                        <a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>

                <div class="footer__col col-sm-6 col-md-3">
                    <div class="footer__section">
                        <div class="footer__section-title">Телефон</div>
                        <p>
                            <a href="tel:+375333920788">+375 33 392-07-88</a><br/>
                            <a href="tel:+375291145925">+375 29 114-59-25</a><br/>
                                                    </p>
                    </div>
                </div>

                <div class="footer__col col-sm-6 col-md-3">
                    <div class="footer__section">
                        <div class="footer__section-title">Адрес</div>
                        <p>
                            ЧП «Аксора»<br/>
                            УНП 192491124<br/>
                            г.Минск, ул.Либкнехта 66-310
                        </p>
                    </div>
                </div>

                <div class="footer__col col-sm-6 col-md-3">
                    <div class="footer__section">
                        <div class="footer__section-title">Мы в социальных сетях</div>
                        <div class="social-list">
                            <a href="https://www.instagram.com/axora.by/"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-vk"></i></a>
                            <a href="#"><i class="fab fa-odnoklassniki-square"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-viber"></i></a>
                        </div>
                    </div>

                    <div class="footer__section">
                        <div class="footer__section-title">Мы принимаем к оплате</div>
                        <div class="payment-list">
                            <a href="#"><i class="fab fa-cc-mastercard"></i></a>
                            <a href="#"><i class="fab fa-cc-visa"></i></a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-inner">
                <div class="footer__copyright">&copy; Copyright 2020</div>
                <div class="footer__dev">
                    <a target="_blank" href="https://axora.by/internet-magazin.html">axora.by</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo asset('lib/jquery-ui-1.12.1/jquery-ui.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('lib/jquery-ui-touch-punch-0.2.3/jquery.ui.touch-punch.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('lib/jquery.fancybox-3.5.6/jquery.fancybox.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('lib/jquery.sticky-kit-1.1.4/jquery.sticky-kit.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('lib/jquery.validation-1.19.0/jquery.validate.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('lib/slick-1.9.0/slick.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/jquery.autocomplete.min.js');?>
" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo asset('js/filter.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/compare.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/helpers.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/search.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/authOperations.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/userOperations.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo asset('js/productOperations.js');?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo asset('js/scripts.js');?>
"><?php echo '</script'; ?>
>
<?php if ((isset($_smarty_tpl->tpl_vars['debugbarRenderer']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['debugbarRenderer']->value->render();?>

<?php }?>
</body>
</html>
<?php }
}
