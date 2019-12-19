<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:50:16
  from 'C:\xampp\htdocs\lab10\templates\Samolot\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df977c8447e90_82150602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2bae169eeb6beaab510a358f2f5551df17143d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Samolot\\form.html.tpl',
      1 => 1576536987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df977c8447e90_82150602 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="IdProducent">Wybierz producenta</label>
    <select class="col-12 col-md-3 js-example-basic-single js-example-language" name="IdProducent">
        <?php if (!isset($_smarty_tpl->tpl_vars['data']->value)) {?><option value="def">Wybierz producenta...</option><?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producenci']->value, 'producent', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['producent']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['IdProducent']) && $_smarty_tpl->tpl_vars['data']->value['IdProducent'] == $_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['producent']->value['ProducentNazwa'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Model">Model</label>
    <input class="col-12 col-md-3" name="Model" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Model'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Model'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Rejestracja">Rejestracja</label>
    <input class="col-12 col-md-3" name="Rejestracja" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Rejestracja'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Rejestracja'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
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
