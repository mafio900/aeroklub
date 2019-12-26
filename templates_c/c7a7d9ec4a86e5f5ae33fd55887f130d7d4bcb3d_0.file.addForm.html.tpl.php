<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:37:36
  from 'C:\xampp\htdocs\aeroklub\templates\Samolot\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e052820054766_52797897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a7d9ec4a86e5f5ae33fd55887f130d7d4bcb3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Samolot\\addForm.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5e052820054766_52797897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9477607395e05282004e216_79615005', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15365109095e05282004ed51_49476904', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20160771875e05282004f8b6_51539145', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11948537265e052820053260_85180698', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8990051365e052820053c72_83217242', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_9477607395e05282004e216_79615005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9477607395e05282004e216_79615005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy samolot<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_15365109095e05282004ed51_49476904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_15365109095e05282004ed51_49476904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

samolot/dodaj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_20160771875e05282004f8b6_51539145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_20160771875e05282004f8b6_51539145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_11948537265e052820053260_85180698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_11948537265e052820053260_85180698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_8990051365e052820053c72_83217242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_8990051365e052820053c72_83217242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
samolot<?php
}
}
/* {/block 'where'} */
}
