<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:53:05
  from '/var/www/example.com/design/template/html/user-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c3221ef32c6_70879523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fb259ffde47c43a277f1cedc75793c4b2768a41' => 
    array (
      0 => '/var/www/example.com/design/template/html/user-edit.tpl',
      1 => 1620849183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c3221ef32c6_70879523 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="/" class="breadcrumbs__link">Главная</a>
        </li>
        <li class="breadcrumbs__item">
            <a href="/user" class="breadcrumbs__link">Личный кабинет</a>
        </li>
        <li class="breadcrumbs__item">Редактирование пользователя</li>
    </ul>

    <h1>Личный кабинет </h1>

    <div class="account">
        <h3 class="account__title">Редактировать данные пользователя</h3>
                <form class="js-validation-form" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/user/update"  method="POST">
            <div class="form-group">
                <label for="accountName">Ваше Ф.И.О.</label>
                <input type="text" class="form-control" id="accountName" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" required>

            </div>

            <div class="form-group">
                <label for="accountPhone">Телефон</label>
                <input type="text" class="form-control" id="accountPhone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
" >
            </div>

            <div class="form-group">
                <label for="accountEmail">Электронная почта</label>
                <input type="email" class="form-control" id="accountEmail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" required>
            </div>

            <div class="form-group">
                <label for="accountAddress">Адрес</label>
                <input type="text" class="form-control" id="accountAddress" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
" >
            </div>
            <br>

            <button type="submit" class="btn btn-info btn-lg">Сохранить</button>
        </form>
    </div>

</div>
<?php }
}
