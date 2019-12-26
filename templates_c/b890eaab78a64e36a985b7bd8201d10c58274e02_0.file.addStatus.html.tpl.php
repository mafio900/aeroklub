<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 21:06:33
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\addStatus.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0512c9432308_61907141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b890eaab78a64e36a985b7bd8201d10c58274e02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\addStatus.html.tpl',
      1 => 1577390667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Status/form.html.tpl' => 1,
  ),
),false)) {
function content_5e0512c9432308_61907141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19190539635e0512c942cdc6_58344887', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4085739775e0512c942d958_46864447', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6974761535e0512c942e116_06588783', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15089863345e0512c9431c39_33661084', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_19190539635e0512c942cdc6_58344887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_19190539635e0512c942cdc6_58344887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
status/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_4085739775e0512c942d958_46864447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4085739775e0512c942d958_46864447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy status<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6974761535e0512c942e116_06588783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6974761535e0512c942e116_06588783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Status/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_15089863345e0512c9431c39_33661084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_15089863345e0512c9431c39_33661084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
