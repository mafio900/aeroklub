<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:52:27
  from 'C:\xampp\htdocs\lab10\templates\Samolot\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df9784b96e5e1_31737829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '803ddd829bb43175bbdb86cafaa7846eecb163ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Samolot\\showOne.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df9784b96e5e1_31737829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6048702585df9784b9675c5_66430828', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13469012815df9784b968602_05196948', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10920548345df9784b968dd9_81977841', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16821069245df9784b96cd74_30348337', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12236713875df9784b96d8e5_86856086', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_6048702585df9784b9675c5_66430828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6048702585df9784b9675c5_66430828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytowanie samolotu<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_13469012815df9784b968602_05196948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_13469012815df9784b968602_05196948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

samolot/edytuj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_10920548345df9784b968dd9_81977841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_10920548345df9784b968dd9_81977841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_16821069245df9784b96cd74_30348337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_16821069245df9784b96cd74_30348337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytuj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_12236713875df9784b96d8e5_86856086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_12236713875df9784b96d8e5_86856086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
samolot<?php
}
}
/* {/block 'where'} */
}
