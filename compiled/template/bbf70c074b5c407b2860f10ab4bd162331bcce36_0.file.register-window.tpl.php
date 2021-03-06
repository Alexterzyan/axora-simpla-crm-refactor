<?php
/* Smarty version 3.1.39, created on 2021-05-09 19:59:47
  from 'D:\OpenServer\domains\simpla-refactor\design\template\html\partials\register-window.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6098150358e733_37816174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbf70c074b5c407b2860f10ab4bd162331bcce36' => 
    array (
      0 => 'D:\\OpenServer\\domains\\simpla-refactor\\design\\template\\html\\partials\\register-window.tpl',
      1 => 1605867249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6098150358e733_37816174 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="register-window" class="popup-window">
	<h2 class="popup-window__title">Регистрация</h2>

	<div id="register-error" style="text-align: center; color: red;" class="form-group">
	</div>

	<form class="js-validation-form-register" method="post">
		<div class="form-group">
			<label for="registrationName">Имя</label>
			<input type="text" class="form-control" id="registrationName" name="name" required>
		</div>

		<div class="form-group">
			<label for="registrationEmail">E-mail</label>
			<input type="email" class="form-control" id="registrationEmail" name="email" required>
		</div>

		<div class="form-group">
			<label for="registrationPassword">Пароль</label>
			<input type="password" class="form-control" id="registrationPassword" name="password" required>
		</div>

		<div class="form-check">
			<label class="form-check__label">
				<input type="checkbox" class="form-check__input" name="registrationAggreement" data-msg-required="Обязательный пункт" required>
				<span class="form-check__text">Я соглашаюсь на обработку моих персональных данных и принимаю <a href="#">Политику конфиденциальности</a></span>
			</label>
		</div>

		<br>

		<div class="form-row">
			<div class="form-group col-sm-6">
				<button type="submit" class="btn btn-block btn-info ">Регистрация</button>
			</div>
			<div class="form-group col-sm-6">
				<button type="button" class="btn btn-block btn-outline-secondary js-popup-open-login" data-src="#login-window">Войти</button>
			</div>
		</div>
	</form>
</div>
<?php }
}
