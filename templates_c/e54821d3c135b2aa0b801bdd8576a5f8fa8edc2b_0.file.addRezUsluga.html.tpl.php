<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 19:41:53
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\addRezUsluga.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e065071767149_16471511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54821d3c135b2aa0b801bdd8576a5f8fa8edc2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\addRezUsluga.html.tpl',
      1 => 1577471506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../RezUsluga/form.html.tpl' => 1,
  ),
),false)) {
function content_5e065071767149_16471511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7323504355e065071761895_16424915', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19824055415e065071762693_03833332', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17549899675e065071762e53_92466903', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15450710445e065071766a39_65502550', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_7323504355e065071761895_16424915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_7323504355e065071761895_16424915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezusluga/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_19824055415e065071762693_03833332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19824055415e065071762693_03833332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowa usługa w rezerwacji<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17549899675e065071762e53_92466903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17549899675e065071762e53_92466903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../RezUsluga/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_15450710445e065071766a39_65502550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_15450710445e065071766a39_65502550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
