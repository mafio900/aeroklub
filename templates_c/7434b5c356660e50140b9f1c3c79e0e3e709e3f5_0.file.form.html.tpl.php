<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 21:06:47
  from 'C:\xampp\htdocs\aeroklub\templates\Status\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0512d71d2919_89541408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7434b5c356660e50140b9f1c3c79e0e3e709e3f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Status\\form.html.tpl',
      1 => 1577390804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0512d71d2919_89541408 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="StatusNazwa">Nazwa statusu</label>
  <input class="col-12 col-md-6" name="StatusNazwa" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['StatusNazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['StatusNazwa'];
}?>" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>
<input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
