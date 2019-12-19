<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:18:43
  from 'C:\xampp\htdocs\lab10\templates\User\form.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df970636846b7_86152996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874de5e79980b2ee26943b017280c81a76c7e221' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\User\\form.html.tpl',
      1 => 1576522342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df970636846b7_86152996 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Imie">Imie</label>
    <input class="col-12 col-md-3" name="Imie" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Imie'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Imie'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Nazwisko">Nazwisko</label>
    <input class="col-12 col-md-3" name="Nazwisko" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Nazwisko'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Nazwisko'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Pesel">Pesel</label>
    <input class="col-12 col-md-3" name="Pesel" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Pesel'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Pesel'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Ulica">Ulica</label>
    <input class="col-12 col-md-3" name="Ulica" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Ulica'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Ulica'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrDomu">Numer domu</label>
    <input class="col-12 col-md-3" name="NrDomu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['NrDomu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['NrDomu'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrLokalu">Numer lokalu</label>
    <input class="col-12 col-md-3" name="NrLokalu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['NrLokalu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['NrLokalu'];
}?>" type="text">
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Miejscowosc">Miejscowość</label>
    <input class="col-12 col-md-3" name="Miejscowosc" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Miejscowosc'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Miejscowosc'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="KodPocztowy">Kod pocztowy</label>
    <input class="col-12 col-md-3" name="KodPocztowy" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['KodPocztowy'])) {
echo $_smarty_tpl->tpl_vars['data']->value['KodPocztowy'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="NrTelefonu">Numer telefonu</label>
    <input class="col-12 col-md-3" name="NrTelefonu" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['NrTelefonu'])) {
echo $_smarty_tpl->tpl_vars['data']->value['NrTelefonu'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Email">E-mail</label>
    <input class="col-12 col-md-3" name="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Email'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Email'];
}?>" type="email">
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Ranga">Ranga</label>
    <input class="col-12 col-md-3" name="Ranga" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Ranga'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Ranga'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Login">Login</label>
    <input class="col-12 col-md-3" name="Login" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['Login'])) {
echo $_smarty_tpl->tpl_vars['data']->value['Login'];
}?>" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Password">Hasło</label>
    <input class="col-12 col-md-3" name="Password" type="password" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
    <input name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>" type="hidden" required>
<?php }
}
