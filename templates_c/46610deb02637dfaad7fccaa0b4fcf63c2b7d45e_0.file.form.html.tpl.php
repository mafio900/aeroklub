<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:55:20
  from 'C:\xampp\htdocs\aeroklub\templates\User\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e051028866629_67408872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46610deb02637dfaad7fccaa0b4fcf63c2b7d45e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\User\\form.html.tpl',
      1 => 1577390117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e051028866629_67408872 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Imie">Imie</label>
    <input class="col-12 col-md-6" name="Imie" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Imie'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Imie'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Nazwisko">Nazwisko</label>
    <input class="col-12 col-md-6" name="Nazwisko" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwisko'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwisko'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Pesel">Pesel</label>
    <input class="col-12 col-md-6" name="Pesel" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Pesel'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Pesel'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Ulica">Ulica</label>
    <input class="col-12 col-md-6" name="Ulica" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Ulica'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Ulica'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="NrDomu">Numer domu</label>
    <input class="col-12 col-md-6" name="NrDomu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['NrDomu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['NrDomu'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="NrLokalu">Numer lokalu</label>
    <input class="col-12 col-md-6" name="NrLokalu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['NrLokalu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['NrLokalu'];
}?>" type="text">
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Miejscowosc">Miejscowość</label>
    <input class="col-12 col-md-6" name="Miejscowosc" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Miejscowosc'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Miejscowosc'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="KodPocztowy">Kod pocztowy</label>
    <input class="col-12 col-md-6" name="KodPocztowy" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['KodPocztowy'])) {
echo $_smarty_tpl->tpl_vars['data']->value['KodPocztowy'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="NrTelefonu">Numer telefonu</label>
    <input class="col-12 col-md-6" name="NrTelefonu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['NrTelefonu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['NrTelefonu'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Email">E-mail</label>
    <input class="col-12 col-md-6" name="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Email'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Email'];
}?>" type="email">
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Ranga">Ranga</label>
    <input class="col-12 col-md-6" name="Ranga" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Ranga'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Ranga'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Login">Login</label>
    <input class="col-12 col-md-6" name="Login" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Login'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Login'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-6 col-form-label text-center text-md-left" for="Password">Hasło</label>
    <input class="col-12 col-md-6" name="Password" type="password" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
    <input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
