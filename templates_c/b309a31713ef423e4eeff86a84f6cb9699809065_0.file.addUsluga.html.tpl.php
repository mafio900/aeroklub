<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 23:10:11
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\addUsluga.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e052fc308eaa5_11459197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b309a31713ef423e4eeff86a84f6cb9699809065' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\addUsluga.html.tpl',
      1 => 1577398142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Usluga/form.html.tpl' => 1,
  ),
),false)) {
function content_5e052fc308eaa5_11459197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17539303095e052fc3088bf5_94447960', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13732611565e052fc3089967_40054576', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10848262165e052fc308a116_59772214', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13382127345e052fc308e3f1_94875621', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_17539303095e052fc3088bf5_94447960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_17539303095e052fc3088bf5_94447960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
usluga/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_13732611565e052fc3089967_40054576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13732611565e052fc3089967_40054576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy usługa<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_10848262165e052fc308a116_59772214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10848262165e052fc308a116_59772214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Usluga/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_13382127345e052fc308e3f1_94875621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_13382127345e052fc308e3f1_94875621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
