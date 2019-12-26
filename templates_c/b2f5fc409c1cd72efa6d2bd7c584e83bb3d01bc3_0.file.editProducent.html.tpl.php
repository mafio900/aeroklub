<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:33:57
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\editProducent.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050b25965fa9_54417174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f5fc409c1cd72efa6d2bd7c584e83bb3d01bc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\editProducent.html.tpl',
      1 => 1577372823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Producent/form.html.tpl' => 1,
  ),
),false)) {
function content_5e050b25965fa9_54417174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20290383595e050b2595e0a3_67693443', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3914721155e050b25960567_22992906', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16741112025e050b25960f78_47742117', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9617661375e050b25965896_42763212', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_20290383595e050b2595e0a3_67693443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_20290383595e050b2595e0a3_67693443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
producent/edytuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_3914721155e050b25960567_22992906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3914721155e050b25960567_22992906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja producenta<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16741112025e050b25960f78_47742117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16741112025e050b25960f78_47742117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:../Producent/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_9617661375e050b25965896_42763212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_9617661375e050b25965896_42763212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Edytuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
