<?php
/* Smarty version 3.1.39, created on 2021-05-09 19:59:47
  from 'D:\OpenServer\domains\simpla-refactor\design\template\html\partials\password-recovery-window.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609815035861c9_09285276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d87e7ed1bafce6f216d58f4d182e982d7cbc74f' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla-refactor\\design\\template\\html\\partials\\password-recovery-window.tpl',
      1 => 1605869720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609815035861c9_09285276 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="password-recovery-window" class="popup-window">
	<h2 class="popup-window__title">Восстановление пароля</h2>

	<div id="recovery-error" style="text-align: center; color: red;" class="form-group"></div>
	<div id="recovery-success" style="text-align: center; color: limegreen;" class="form-group"></div>

	<form class="js-validation-recovery-form" method="post">
		<div class="form-group">
			<label for="recoveryEmail">E-mail</label>
			<input type="email" class="form-control" id="recoveryEmail" name="email" required>
		</div>
		<br>

		<div class="form-row">
			<div class="form-group col-sm-6">
				<button type="submit" class="btn btn-block btn-info">Выслать</button>
			</div>
			<div class="form-group col-sm-6">
				<button type="button" class="btn btn-block btn-outline-secondary js-popup-open-login" data-type="inline">Войти</button>
			</div>
		</div>
	</form>
</div>
<?php }
}
