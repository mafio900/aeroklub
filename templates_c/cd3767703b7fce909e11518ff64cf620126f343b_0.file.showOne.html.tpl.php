<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:56:42
  from 'C:\xampp\htdocs\aeroklub\templates\User\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e05107a7d5bf8_86468941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3767703b7fce909e11518ff64cf620126f343b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\User\\showOne.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5e05107a7d5bf8_86468941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186312965e05107a7d0189_95077619', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17379170405e05107a7d0cb9_62579127', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8600558465e05107a7d1470_20855142', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7084837245e05107a7d4e02_23833524', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11571292185e05107a7d55a9_28872210', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_186312965e05107a7d0189_95077619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_186312965e05107a7d0189_95077619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytowanie użytkownika<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_17379170405e05107a7d0cb9_62579127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_17379170405e05107a7d0cb9_62579127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

user/edytuj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_8600558465e05107a7d1470_20855142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_8600558465e05107a7d1470_20855142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_7084837245e05107a7d4e02_23833524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_7084837245e05107a7d4e02_23833524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytuj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_11571292185e05107a7d55a9_28872210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_11571292185e05107a7d55a9_28872210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user<?php
}
}
/* {/block 'where'} */
}
