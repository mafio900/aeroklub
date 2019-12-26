<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:52:06
  from 'C:\xampp\htdocs\aeroklub\templates\User\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050f66446638_08345007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45e2b53f1abafe0f345585f3699010dfd53b5d92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\User\\addForm.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5e050f66446638_08345007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8148755145e050f66440bb3_91920661', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15529131485e050f66441744_73785592', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12046630155e050f66441ef6_29945836', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4224072715e050f66445871_82767265', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14247507025e050f66445ff2_75924941', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_8148755145e050f66440bb3_91920661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8148755145e050f66440bb3_91920661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy użytkownik<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_15529131485e050f66441744_73785592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_15529131485e050f66441744_73785592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

user/dodaj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_12046630155e050f66441ef6_29945836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_12046630155e050f66441ef6_29945836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_4224072715e050f66445871_82767265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_4224072715e050f66445871_82767265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_14247507025e050f66445ff2_75924941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_14247507025e050f66445ff2_75924941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user<?php
}
}
/* {/block 'where'} */
}
