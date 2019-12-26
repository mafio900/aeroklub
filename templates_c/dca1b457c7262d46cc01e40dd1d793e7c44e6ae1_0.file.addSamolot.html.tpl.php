<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:46:14
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\addSamolot.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e052a26844238_40581480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca1b457c7262d46cc01e40dd1d793e7c44e6ae1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\addSamolot.html.tpl',
      1 => 1577396763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Samolot/form.html.tpl' => 1,
  ),
),false)) {
function content_5e052a26844238_40581480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11915926245e052a2683e330_87494008', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122447065e052a2683f398_23088017', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12468190085e052a2683fd38_94750765', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10192807225e052a26843b62_96840865', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_11915926245e052a2683e330_87494008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_11915926245e052a2683e330_87494008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
samolot/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_122447065e052a2683f398_23088017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_122447065e052a2683f398_23088017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy samolot<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12468190085e052a2683fd38_94750765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12468190085e052a2683fd38_94750765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Samolot/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_10192807225e052a26843b62_96840865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_10192807225e052a26843b62_96840865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
