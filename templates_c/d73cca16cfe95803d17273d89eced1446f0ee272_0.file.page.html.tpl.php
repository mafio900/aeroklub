<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 22:26:14
  from 'C:\xampp\htdocs\lab10\templates\Home\page.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df947f63906c7_52705162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd73cca16cfe95803d17273d89eced1446f0ee272' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Home\\page.html.tpl',
      1 => 1576617973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df947f63906c7_52705162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9971414845df947f638d1b3_31115114', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14583928295df947f638f9e3_51638350', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../BaseClient/baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_9971414845df947f638d1b3_31115114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9971414845df947f638d1b3_31115114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Strona główna<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14583928295df947f638f9e3_51638350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14583928295df947f638f9e3_51638350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    co tam
<?php
}
}
/* {/block 'body'} */
}
