<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:31:44
  from 'C:\xampp\htdocs\aeroklub\templates\headerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050aa00ab876_31847951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ef6811e338cdf833340aeef73249442c2e6fac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\headerBlock.html.tpl',
      1 => 1576598224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050aa00ab876_31847951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl-PL" class="h-100">
    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2552960405e050aa00a5381_92953996', 'header');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12182799075e050aa00a7237_95126384', 'css');
?>

    </head>
    <body class="d-flex flex-column h-100 bg-dark text-light">
<?php }
/* {block 'title'} */
class Block_15669072265e050aa00a5d90_73428547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lab10<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_2552960405e050aa00a5381_92953996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2552960405e050aa00a5381_92953996',
  ),
  'title' => 
  array (
    0 => 'Block_15669072265e050aa00a5d90_73428547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="ZPAI">
            <meta name="author" content="Bartosz Brzychciński">
            <title>Aeroklub - <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15669072265e050aa00a5d90_73428547', 'title', $this->tplIndex);
?>
</title>
        <?php
}
}
/* {/block 'header'} */
/* {block 'css'} */
class Block_12182799075e050aa00a7237_95126384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_12182799075e050aa00a7237_95126384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (isset($_smarty_tpl->tpl_vars['cssFile']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cssFile']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
                    <link href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
" rel="stylesheet">
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php
}
}
/* {/block 'css'} */
}
