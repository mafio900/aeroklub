<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:57:09
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\editUser.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0510952c9ba6_69118413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a9e1898afc302b96726320c76e1f021b6b6859' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\editUser.html.tpl',
      1 => 1577390197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../User/form.html.tpl' => 1,
  ),
),false)) {
function content_5e0510952c9ba6_69118413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17536456235e0510952c4165_27438747', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5134486215e0510952c5093_02679239', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10832101815e0510952c5872_48844832', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2367580225e0510952c9500_87946920', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_17536456235e0510952c4165_27438747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_17536456235e0510952c4165_27438747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user/edytuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_5134486215e0510952c5093_02679239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5134486215e0510952c5093_02679239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja użytkownika<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_10832101815e0510952c5872_48844832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10832101815e0510952c5872_48844832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:../User/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_2367580225e0510952c9500_87946920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_2367580225e0510952c9500_87946920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Edytuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
