<?php
/* Smarty version 3.1.39, created on 2021-05-09 19:59:47
  from 'D:\OpenServer\domains\simpla-refactor\design\template\html\partials\login-window.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6098150357cd75_33734222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea23b8526d29dde0a2d1ec4a1b048152821e397' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla-refactor\\design\\template\\html\\partials\\login-window.tpl',
      1 => 1605869756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/password-recovery-window.tpl' => 1,
  ),
),false)) {
function content_6098150357cd75_33734222 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="login-window" class="popup-window">
    <h2 class="popup-window__title">Войти</h2>

    <div id="login-error" style="text-align: center; color: red;" class="form-group">

    </div>

    <form class="js-validation-form-login" method="post">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="loginPassword">Пароль</label>
            <input type="password" class="form-control" id="loginPassword" name="password" required>
        </div>

        <p class="text-center">
            <button type="button" class="btn btn-light js-popup-open-recovery" data-src="#password-recovery-window">
                Забыли свой пароль?
            </button>
        </p>

        <div class="form-row">
            <div class="form-group col-sm-6">
                <button type="submit" class="btn btn-block btn-info ">Войти</button>
            </div>
            <div class="form-group col-sm-6">
                <button type="button" class="btn btn-block btn-outline-secondary js-popup-open-register"
                        data-src="#register-window">Регистрация
                </button>
            </div>
        </div>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:partials/password-recovery-window.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
