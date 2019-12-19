<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:42:25
  from 'C:\xampp\htdocs\lab10\templates\User\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df98401e50ec8_84815732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d3eecbc2cf0b67c7afb7637a97836cf430dd03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\User\\showOne.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df98401e50ec8_84815732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8272301505df98401e4ae63_68044275', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14431534095df98401e4bc03_84987286', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1453849735df98401e4c3f9_80601090', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12847124755df98401e4ffd3_52451254', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5267498345df98401e507b4_24945550', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_8272301505df98401e4ae63_68044275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8272301505df98401e4ae63_68044275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytowanie użytkownika<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_14431534095df98401e4bc03_84987286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_14431534095df98401e4bc03_84987286',
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
class Block_1453849735df98401e4c3f9_80601090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_1453849735df98401e4c3f9_80601090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_12847124755df98401e4ffd3_52451254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_12847124755df98401e4ffd3_52451254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytuj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_5267498345df98401e507b4_24945550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_5267498345df98401e507b4_24945550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user<?php
}
}
/* {/block 'where'} */
}
