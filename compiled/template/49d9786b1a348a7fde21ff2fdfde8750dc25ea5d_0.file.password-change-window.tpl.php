<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:37:28
  from '/var/www/example.com/design/template/html/partials/password-change-window.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c2e78d6bcd5_89056142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d9786b1a348a7fde21ff2fdfde8750dc25ea5d' => 
    array (
      0 => '/var/www/example.com/design/template/html/partials/password-change-window.tpl',
      1 => 1620665377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c2e78d6bcd5_89056142 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="password-change-window" class="popup-window">
	<h2 class="popup-window__title">Изменить пароль</h2>

	<form class="js-validation-form-user-password-edit" method="post">
		<input name="user_id" type="hidden">

		<div class="form-group">
			<label for="accountPassword">Новый пароль</label>
			<input type="password" class="form-control" id="accountPassword" name="password" required>
		</div>

		<div class="form-group">
			<label for="accountRePassword">Повторить новый пароль</label>
			<input type="password" class="form-control" id="accountRePassword" name="accountRePassword" equalTo="#accountPassword" required>
		</div>

		<br>

		<button type="submit" class="btn btn-info btn-lg">Сохранить</button>
	</form>
</div>
<?php }
}
