<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 23:33:29
  from 'C:\xampp\htdocs\lab10\templates\BaseClient\navbarBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df957b97ddfa5_76961788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f51bb7b765a819497af10f60125a6a2f51114ffe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\BaseClient\\navbarBlock.html.tpl',
      1 => 1576622008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df957b97ddfa5_76961788 (Smarty_Internal_Template $_smarty_tpl) {
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

                <li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'Home') {?>active<?php }?>">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
"> Home </a>
                </li>

            </ul>
            <ul class="navbar-nav text-center">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
logowanie/"> Zaloguj się </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
rejestracja/"> Zarejestruj się </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<?php }
}
