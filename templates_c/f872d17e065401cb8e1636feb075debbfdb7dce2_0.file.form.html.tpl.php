<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:25:00
  from 'C:\xampp\htdocs\lab10\templates\Producent\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97fec832873_02599125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f872d17e065401cb8e1636feb075debbfdb7dce2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Producent\\form.html.tpl',
      1 => 1576536035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df97fec832873_02599125 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="StatusNazwa">Nazwa producenta</label>
  <input class="col-12 col-md-3" name="ProducentNazwa" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['ProducentNazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['ProducentNazwa'];
}?>" type="text">
  <div class="col-12 text-center text-md-left"></div>
</div>
<input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
