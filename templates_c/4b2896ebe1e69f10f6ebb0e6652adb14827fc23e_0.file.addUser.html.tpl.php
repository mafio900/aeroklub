<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:54:30
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\addUser.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050ff67d4fd2_77831193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b2896ebe1e69f10f6ebb0e6652adb14827fc23e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\addUser.html.tpl',
      1 => 1577390039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../User/form.html.tpl' => 1,
  ),
),false)) {
function content_5e050ff67d4fd2_77831193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4329735e050ff67ce830_47566556', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5420942675e050ff67cfbe7_33916692', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7617421175e050ff67d03e8_28512319', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9466298915e050ff67d48b6_84163092', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_4329735e050ff67ce830_47566556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_4329735e050ff67ce830_47566556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_5420942675e050ff67cfbe7_33916692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5420942675e050ff67cfbe7_33916692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy użytkownik<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7617421175e050ff67d03e8_28512319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7617421175e050ff67d03e8_28512319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../User/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_9466298915e050ff67d48b6_84163092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_9466298915e050ff67d48b6_84163092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
