<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:34:31
  from 'C:\xampp\htdocs\aeroklub\templates\RezUsluga\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e05276778b566_41725050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb52a8fd010db8ad164c8711fe8f2a590fc3119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\RezUsluga\\form.html.tpl',
      1 => 1576590085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e05276778b566_41725050 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="IdUsluga">Wybierz usługę</label>
    <select class="col-12 col-md-3 js-example-basic-single js-example-language" name="IdUsluga">
        <option value="def">Wybierz usługę...</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uslugi']->value, 'usluga', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['usluga']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['IdUsluga']) && $_smarty_tpl->tpl_vars['data']->value['IdUsluga'] == $_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['usluga']->value['UslugaNazwa'];?>
 (<?php echo $_smarty_tpl->tpl_vars['usluga']->value['CenaJedn'];?>
zł za <?php echo $_smarty_tpl->tpl_vars['usluga']->value['JednMiary'];?>
)</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2">
  <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Ilosc">Ilość</label>
  <input class="col-12 col-md-3" name="Ilosc" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Ilosc'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Ilosc'];
}?>" type="text" required>
  <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="IdSamolot">Wybierz samolot</label>
    <select class="col-12 col-md-3 js-example-basic-single js-example-language" name="IdSamolot">
        <option value="0" selected>Żaden</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['samoloty']->value, 'samolot', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['samolot']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['IdSamolot']) && $_smarty_tpl->tpl_vars['data']->value['IdSamolot'] == $_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['producenci']->value[$_smarty_tpl->tpl_vars['samolot']->value['IdProducent']]['ProducentNazwa'];?>
 <?php echo $_smarty_tpl->tpl_vars['samolot']->value['Model'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>

<input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
