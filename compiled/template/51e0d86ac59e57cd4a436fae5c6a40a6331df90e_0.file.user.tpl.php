<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:45:07
  from '/var/www/example.com/design/template/html/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c3043943084_80095033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e0d86ac59e57cd4a436fae5c6a40a6331df90e' => 
    array (
      0 => '/var/www/example.com/design/template/html/user.tpl',
      1 => 1620848707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/password-change-window.tpl' => 1,
    'file:partials/user_orders_table.tpl' => 1,
  ),
),false)) {
function content_609c3043943084_80095033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/example.com/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item">
			<a href="/" class="breadcrumbs__link">Главная</a>
		</li>
		<li class="breadcrumbs__item">Личный кабинет</li>
	</ul>

	<h1>Личный кабинет </h1>

	<div class="account">
		<h3 class="account__title">Личные данные</h3>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
		<p><span id="current_user_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span></p>
		<p><strong>Телефон:</strong> <span
					id="current_user_phone"><?php if ($_smarty_tpl->tpl_vars['user']->value['phone']) {
echo $_smarty_tpl->tpl_vars['user']->value['phone'];
} else { ?>не указан<?php }?> </span></p>
		<p><strong>Электронная почта:</strong> <span id="current_user_email"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</span></p>
		<p><strong>Адрес:</strong> <span id="current_user_address"><?php if ($_smarty_tpl->tpl_vars['user']->value['address']) {
echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
 <?php } else { ?>не указан <?php }?>
		</p>

		<div class="form-row">
			<div class="col-auto">
				<p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user/edit" class="btn btn-info">
						Редактировать данные
					</a>
				</p>
							</div>
			<div class="col-auto">
				<p>
					<button type="button" class="btn btn-info js-popup-open-psw-change" data-type="ajax"
							data-src="#password-change-window">Изменить пароль
					</button>
				</p>
				<?php $_smarty_tpl->_subTemplateRender('file:partials/password-change-window.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
			<div class="col-auto">
				<p><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user/logout" class="btn btn-outline-secondary">Выйти</a></p>
			</div>
		</div>
	</div>

	<div class="history">
		<h3 class="history__title">История заказов</h3>

		<div class="history__list">
			<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
					<div class="history__item">
						<header class="history__item-header">
							<div class="history__item-info history__item-id">#<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</div>
							<div class="history__item-info history__item-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->date,"%e.%m.%Y %k:%M");?>

							</div>
							<div class="history__item-info history__item-status">
								<?php if ($_smarty_tpl->tpl_vars['order']->value->paid == 1) {?>оплачен,<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['order']->value->status == 0) {?>ждет обработки
								<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status == 1) {?>в обработке
								<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status == 2) {?>выполнен
								<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->status == 3) {?>отменен<?php }?>
							</div>
							<div class="history__item-info  history__item-price"><?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->name;?>
</div>
							<div class="history__item-info  history__item-price"><?php echo $_smarty_tpl->tpl_vars['order']->value->payment_method->name;?>
</div>
							<div class="history__item-info history__item-price"><?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</div>
						</header>
						<div class="history__item-content">
							<?php $_smarty_tpl->_subTemplateRender("file:partials/user_orders_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
