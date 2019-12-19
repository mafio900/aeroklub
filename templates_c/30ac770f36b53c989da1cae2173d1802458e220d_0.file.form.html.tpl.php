<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:01:25
  from 'C:\xampp\htdocs\lab10\templates\Usluga\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97a65daef87_33766668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30ac770f36b53c989da1cae2173d1802458e220d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Usluga\\form.html.tpl',
      1 => 1576536066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df97a65daef87_33766668 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="UslugaNazwa">Nazwa usługi</label>
  <input class="col-12 col-md-3" name="UslugaNazwa" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['UslugaNazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['UslugaNazwa'];
}?>" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="CenaJedn">Cena jednostkowa</label>
  <input class="col-12 col-md-3" name="CenaJedn" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['CenaJedn'])) {
echo $_smarty_tpl->tpl_vars['data']->value['CenaJedn'];
}?>" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="JednMiary">Jednostka miary</label>
  <input class="col-12 col-md-3" name="JednMiary" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['JednMiary'])) {
echo $_smarty_tpl->tpl_vars['data']->value['JednMiary'];
}?>" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2 col-12">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Opis">Opis</label>
  <input class="col-12 col-md-3" name="Opis" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Opis'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Opis'];
}?>" type="text">
  <div class="col-12 text-center text-md-left"></div>
</div>

<input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
