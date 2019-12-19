<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:04:09
  from 'C:\xampp\htdocs\lab10\templates\Status\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97b0910b568_87425360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a876b6e47be051681a9298bd3ab2054a318457' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Status\\form.html.tpl',
      1 => 1576535937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df97b0910b568_87425360 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="StatusNazwa">Nazwa statusu</label>
  <input class="col-12 col-md-3" name="StatusNazwa" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['StatusNazwa'])) {
echo $_smarty_tpl->tpl_vars['data']->value['StatusNazwa'];
}?>" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>
<input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
