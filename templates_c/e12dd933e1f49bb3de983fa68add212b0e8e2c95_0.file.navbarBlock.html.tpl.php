<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:31:44
  from 'C:\xampp\htdocs\aeroklub\templates\navbarBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050aa00df606_53441217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e12dd933e1f49bb3de983fa68add212b0e8e2c95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\navbarBlock.html.tpl',
      1 => 1576178937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050aa00df606_53441217 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark navbar-expand-md bg-secondary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
">ZPAI</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav mr-auto text-center">

                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'User') {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
user/"> Użytkownicy </a>
                </li>

                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'Rezerwacja') {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
rezerwacja/"> Rezerwacje </a>
                </li>

                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'Status') {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
status/"> Statusy </a>
                </li>

                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'Usluga') {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
usluga/"> Usługi </a>
                </li>

                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'Samolot') {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
samolot/"> Samolot </a>
                </li>

                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'Producent') {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
producent/"> Producent </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<?php }
}