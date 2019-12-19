<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:04:09
  from 'C:\xampp\htdocs\lab10\templates\Status\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97b090b8089_66438712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ac00b96d4d297ff2f964550b83b4348af8bb36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Status\\addForm.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df97b090b8089_66438712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12027191405df97b090a7400_11959285', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20337612945df97b090abf80_62755749', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_904936755df97b090ad318_87431568', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16843710275df97b090b4ee8_74261204', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20728734325df97b090b62f8_56677329', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_12027191405df97b090a7400_11959285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12027191405df97b090a7400_11959285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy status<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_20337612945df97b090abf80_62755749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_20337612945df97b090abf80_62755749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

status/dodaj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_904936755df97b090ad318_87431568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_904936755df97b090ad318_87431568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_16843710275df97b090b4ee8_74261204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_16843710275df97b090b4ee8_74261204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_20728734325df97b090b62f8_56677329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_20728734325df97b090b62f8_56677329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
status<?php
}
}
/* {/block 'where'} */
}
