<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:01:25
  from 'C:\xampp\htdocs\lab10\templates\Usluga\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97a65d6ba97_85438175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fad0d396d6eb9d4a995db4cb63dc239a057e911' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Usluga\\addForm.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df97a65d6ba97_85438175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8013624555df97a65d53976_34236426', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13046219985df97a65d57725_75710759', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18708714965df97a65d59d25_98806271', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11313564585df97a65d694d2_50670912', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6740945805df97a65d6aa32_35845433', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_8013624555df97a65d53976_34236426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8013624555df97a65d53976_34236426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowa usługa<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_13046219985df97a65d57725_75710759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_13046219985df97a65d57725_75710759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

usluga/dodaj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_18708714965df97a65d59d25_98806271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_18708714965df97a65d59d25_98806271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_11313564585df97a65d694d2_50670912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_11313564585df97a65d694d2_50670912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_6740945805df97a65d6aa32_35845433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_6740945805df97a65d6aa32_35845433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
usluga<?php
}
}
/* {/block 'where'} */
}
