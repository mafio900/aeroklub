<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 20:24:17
  from 'C:\xampp\htdocs\aeroklub\templates\Rezerwacja\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e065a61081669_88717010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a709314129d88f246dbc9dbd424b50d9f0633cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Rezerwacja\\form.html.tpl',
      1 => 1577474645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e065a61081669_88717010 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['data']->value['DataZlozenia'])) {?>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left">Data złożenia rezerwacji</label>
    <input id="DataZlozenia" class="col-12 col-md-6" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['DataZlozenia'])) {
echo $_smarty_tpl->tpl_vars['data']->value['DataZlozenia'];
}?>" type="text" readonly>
</div>
<?php }?>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="TerminRealizacji">Termin realizacji</label>
    <input class="date col-12 col-md-6" name="TerminRealizacji" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['TerminRealizacji'])) {
echo $_smarty_tpl->tpl_vars['data']->value['TerminRealizacji'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['KwotaLaczna'])) {?>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="KwotaLaczna">Kwota łączna (zł)</label>
    <input class="col-12 col-md-6" name="KwotaLaczna" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['KwotaLaczna'])) {
echo $_smarty_tpl->tpl_vars['data']->value['KwotaLaczna'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['statusy']->value)) {?>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="IdStatus">Status</label>
    <select class="col-12 col-md-6 js-select2" name="IdStatus">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statusy']->value, 'status', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['status']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['IdStatus']) && $_smarty_tpl->tpl_vars['data']->value['IdStatus'] == $_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['StatusNazwa'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>
<?php }?>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="IdKlient">Klient</label>
    <select class="col-12 col-md-6 js-select2" name="IdKlient">
        <?php if (!isset($_smarty_tpl->tpl_vars['data']->value)) {?><option value="def">Wybierz klienta...</option><?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['klienci']->value, 'klient', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['klient']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['IdKlient']) && $_smarty_tpl->tpl_vars['data']->value['IdKlient'] == $_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['klient']->value['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['klient']->value['Nazwisko'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>

<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="IdPracownik">Pracownik</label>
    <select class="col-12 col-md-6 js-select2" name="IdPracownik">
        <?php if (!isset($_smarty_tpl->tpl_vars['data']->value)) {?><option value="def">Wybierz pracownika...</option><?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pracownicy']->value, 'pracownik', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['pracownik']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['IdPracownik']) && $_smarty_tpl->tpl_vars['data']->value['IdPracownik'] == $_smarty_tpl->tpl_vars['id']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['pracownik']->value['Nazwisko'];?>
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
