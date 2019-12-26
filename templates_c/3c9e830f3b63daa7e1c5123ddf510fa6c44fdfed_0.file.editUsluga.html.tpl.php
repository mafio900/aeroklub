<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 23:10:36
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\editUsluga.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e052fdcd539f0_82082944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c9e830f3b63daa7e1c5123ddf510fa6c44fdfed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\editUsluga.html.tpl',
      1 => 1577398138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Usluga/form.html.tpl' => 1,
  ),
),false)) {
function content_5e052fdcd539f0_82082944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5681416225e052fdcd4e764_21589243', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15529457315e052fdcd4f289_12125357', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5093012645e052fdcd4fa23_58438020', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2727828415e052fdcd53365_51269110', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_5681416225e052fdcd4e764_21589243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_5681416225e052fdcd4e764_21589243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
usluga/edytuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_15529457315e052fdcd4f289_12125357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15529457315e052fdcd4f289_12125357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja usługi<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_5093012645e052fdcd4fa23_58438020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5093012645e052fdcd4fa23_58438020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Usluga/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_2727828415e052fdcd53365_51269110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_2727828415e052fdcd53365_51269110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Edytuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
