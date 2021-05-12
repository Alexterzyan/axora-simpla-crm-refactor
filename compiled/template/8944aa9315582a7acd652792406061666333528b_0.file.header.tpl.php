<?php
/* Smarty version 3.1.39, created on 2021-05-09 19:59:47
  from 'D:\OpenServer\domains\simpla-refactor\design\template\html\partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6098150356d4b7_78878846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8944aa9315582a7acd652792406061666333528b' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla-refactor\\design\\template\\html\\partials\\header.tpl',
      1 => 1609252894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/login-window.tpl' => 1,
    'file:partials/register-window.tpl' => 1,
    'file:partials/nav.tpl' => 1,
    'file:cart_informer.tpl' => 1,
  ),
),false)) {
function content_6098150356d4b7_78878846 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php if ($_smarty_tpl->tpl_vars['is_page_get_parameter']->value) {?>
        <meta name='robots' content='noindex,follow'/>
    <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['canonical']->value))) {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;
echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['prev']->value))) {?>
        <link rel="prev" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;
echo $_smarty_tpl->tpl_vars['prev']->value;?>
"><?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?>
        <link rel="next" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;
echo $_smarty_tpl->tpl_vars['next']->value;?>
"><?php }?>

    <link href="<?php echo asset('lib/jquery-ui-1.12.1/jquery-ui.min.css');?>
" rel="stylesheet">
    <link href="<?php echo asset('lib/bootstrap-4.2.1/bootstrap.min.css');?>
" rel="stylesheet">
    <link href="<?php echo asset('lib/fontawesome-pro-5.7.2/css/all.min.css');?>
" rel="stylesheet">
    <link href="<?php echo asset('lib/jquery.fancybox-3.5.6/jquery.fancybox.min.css');?>
" rel="stylesheet">
    <link href="<?php echo asset('lib/slick-1.9.0/slick.css');?>
" rel="stylesheet">

    <link href="<?php echo asset('css/style.css');?>
" rel="stylesheet" type="text/css"/>
    <link href="<?php echo asset('css/media.css');?>
" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="<?php echo asset('lib/jquery-3.3.1/jquery-3.3.1.min.js');?>
"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo asset('fontIconPicker-2.0.0/jquery.fonticonpicker.min.js');?>
"><?php echo '</script'; ?>
>

    <!-- fontIconPicker core CSS -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('fontIconPicker-2.0.0/css/jquery.fonticonpicker.min.css');?>
"/>

    <!-- required default theme -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('fontIconPicker-2.0.0/themes/grey-theme/jquery.fonticonpicker.grey.min.css');?>
"/>

    <!-- optional themes -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('fontIconPicker-2.0.0/themes/dark-grey-theme/jquery.fonticonpicker.darkgrey.min.css');?>
"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('fontIconPicker-2.0.0/themes/bootstrap-theme/jquery.fonticonpicker.bootstrap.min.css');?>
"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('fontIconPicker-2.0.0/themes/inverted-theme/jquery.fonticonpicker.inverted.min.css');?>
"/>

    <!-- Font -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('fontIconPicker-2.0.0/demo/fontello-7275ca86/css/fontello.css');?>
"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo asset('fontIconPicker-2.0.0/demo/icomoon/style.css');?>
"/>
        <?php if ((isset($_smarty_tpl->tpl_vars['debugbarRenderer']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['debugbarRenderer']->value->renderHead();?>

    <?php }?>
</head>

<body>
<div class="header">
    <div class="header__content">
        <div class="container">
            <div class="header__content-inner">
                <div class="header__top">
                    <div class="header__nav">
                        <div class="nav-popup">
                            <div class="nav-popup__bg"></div>
                            <div class="nav-popup__inner">
                                <button type="button" class="nav-popup__close close-btn"><i class="fal fa-times"></i>
                                </button>
                                <div class="nav-popup__content">
                                    <ul class="nav">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                                                                        <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id == 1) {?>
                                                <li class="nav__item">
                                                    <a class="nav__link <?php if ($_smarty_tpl->tpl_vars['page']->value && $_smarty_tpl->tpl_vars['page']->value->id == $_smarty_tpl->tpl_vars['p']->value->id) {?>is-active<?php }?>"
                                                       data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
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
                        </div>
                    </div>

                    <div class="header__contacts">
                        <div class="top-contacts">
                            <div class="top-contacts__item">
                                <a href="#" class="top-contacts__link"><i class="fal fa-map"></i> Адреса магазинов</a>
                            </div>

                            <div class="top-contacts__item">
                                <ul class="top-contacts__list">
                                    <li class="top-contacts__list-item">
                                        <a href="tel:+375333920788" class="top-contacts__link">+375 33 392-07-88</a>
                                    </li>
                                    <li class="top-contacts__list-item">
                                        <a href="tel:+375291145925" class="top-contacts__link">+375 29 114-59-25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__middle">
                    <div class="header__logo">
                        <a href="./" class="logo">
                            <img src="<?php echo asset('images/logo.svg');?>
" alt=""
                                 class="logo__img">
                        </a>
                    </div>

                    <div class="header__search">
                        <div class="header__search-wrapper">
                            <input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text"
                                   class="header__search-input form-control js-autocomplete-search" placeholder="Поиск">
                            <button type="button" class="header__search-btn btn btn-info"><i class="far fa-search"></i>
                                Поиск
                            </button>
                        </div>
                    </div>

                    <div class="header__user">
                        <div class="user-field">
                            <div class="user-field__icon">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="user-field__content">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                                    <div class="user-field__item">
                                        <a href="<?php echo route('user');?>
" class="user-field__link link"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a>
                                    </div>
                                    <div class="user-field__item">
                                        <a onclick="document.getElementById('logout-form').submit();" href="#" class="user-field__link link" id="logout">выйти</a>
                                        <form  style="display: none" id="logout-form" action="<?php echo route('user/logout');?>
" method="post">
                                            <button type="submit">logout</button>
                                        </form>
                                    </div>
                                <?php } else { ?>
                                    <div class="user-field__item">
                                        <button type="button" class="user-field__link link js-popup-open-login"
                                                data-src="#login-window">Войти
                                        </button>
                                        <?php $_smarty_tpl->_subTemplateRender('file:partials/login-window.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    </div>
                                    <div class="user-field__item">
                                        <button type="button" class="user-field__link link js-popup-open-register"
                                                data-src="#register-window">Регистрация
                                        </button>
                                        <?php $_smarty_tpl->_subTemplateRender('file:partials/register-window.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__menu-line">
        <div class="container">
            <div class="header__menu-line-inner">
                                <div class="header__menu">
                    <div class="menu-popup">
                        <div class="menu-popup__bg"></div>
                        <div class="menu-popup__inner">
                            <button type="button" class="menu-popup__close close-btn"><i class="fal fa-times"></i>
                            </button>
                            <div class="menu-popup__content">
                                <?php $_smarty_tpl->_subTemplateRender("file:partials/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__control">
                    <div class="control">
                        <button type="button" class="control__btn control__btn_menu">
                            <span class="control__btn-icon"><i class="far fa-bars"></i></span>
                            <span class="control__btn-text">Каталог</span>
                        </button>

                        <button type="button" class="control__btn control__btn_nav">
                            <span class="control__btn-icon"><i class="fal fa-ellipsis-v"></i></span>
                        </button>

                        <button type="button" class="control__btn control__btn_search">
                            <span class="control__btn-icon"><i class="fal fa-search"></i></span>
                        </button>

                        <button type="button" class="control__btn control__btn_user" data-src="#login-window">
                            <span class="control__btn-icon"><i class="fal fa-user"></i></span>
                        </button>

                        <a href="favorites" class="control__btn control__btn_favorite">
                            <span class="control__btn-icon"><i class="fal fa-heart"></i></span>
                            <span class="control__btn-count js-favorites-count"><?php if ($_smarty_tpl->tpl_vars['favorites']->value) {
echo count($_smarty_tpl->tpl_vars['favorites']->value);
} else { ?>0<?php }?></span>
                        </a>

                        <a href="compares" class="control__btn control__btn_compare">
                            <span class="control__btn-icon"><i class="fal fa-balance-scale"></i></span>
                            <span class="control__btn-count js-compares-informer"><?php echo count($_smarty_tpl->tpl_vars['compares']->value);?>
</span>
                        </a>

                        <a href="/cart/" class="control__btn control__btn_basket">
                            <span class="control__btn-icon"><i class="fal fa-shopping-basket"></i></span>
                            <span class="control__btn-count js-cart-informer"><?php $_smarty_tpl->_subTemplateRender("file:cart_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="search">
    <div class="search__main">
        <div class="container">
            <div class="search__main-inner">
                <form action="search" class="b-search__form search__form js-validation-form" novalidate="novalidate">
                    <div class="form-row">
                        <div class="col flex-grow-1">
                            <input type="text"
                                   class="search__input form-control form-control-lg js-autocomplete-search valid"
                                   placeholder="Поиск" name="keyword" required>
                        </div>

                        <div class="col-auto">
                            <button type="button" class="search__clear btn btn-outline-info btn-lg"><i
                                        class="fal fa-times"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="search__content">
        <div class="container">
            <div class="search__content-inner">
                <div class="search__result js-autocomplete-search-results" style="position: relative">

                </div>
                <div class="search__result" style="display: none;">
                    <div class="search__result-section">
                        <div class="search__result-title">Каталог</div>

                    </div>
                    <div class="search__result-section">
                        <div class="search__result-title">Бренды</div>

                    </div>

                    <div class="search__result-section">
                        <div class="search__result-title">Товары</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
