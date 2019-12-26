<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 21:07:15
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\editStatus.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0512f3afd303_07500195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfe8eaf553c2053fe2ab1c4bdef1d78699aee128' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\editStatus.html.tpl',
      1 => 1577390688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Status/form.html.tpl' => 1,
  ),
),false)) {
function content_5e0512f3afd303_07500195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11480365975e0512f3af7585_32723724', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5336840615e0512f3af8164_86722249', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12830539005e0512f3af8941_31299988', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17289557915e0512f3afcb04_67829251', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_11480365975e0512f3af7585_32723724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_11480365975e0512f3af7585_32723724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
status/edytuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_5336840615e0512f3af8164_86722249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5336840615e0512f3af8164_86722249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja statusu<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12830539005e0512f3af8941_31299988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12830539005e0512f3af8941_31299988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:../Status/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_17289557915e0512f3afcb04_67829251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_17289557915e0512f3afcb04_67829251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Edytuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
