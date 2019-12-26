<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:33:57
  from 'C:\xampp\htdocs\aeroklub\templates\Producent\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050b259b1603_36938985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc7cbd6a2f4ca74f144fc3d6cf4398f460208b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Producent\\form.html.tpl',
      1 => 1577373936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050b259b1603_36938985 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="StatusNazwa">Nazwa producenta</label>
  <input class="col-12 col-md-6" name="ProducentNazwa" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ProducentNazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ProducentNazwa'];
}?>" type="text">
  <div class="col-12 text-center text-md-left"></div>
</div>
<input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
