<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:18:43
  from 'C:\xampp\htdocs\lab10\templates\User\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df9706364a624_04054435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb36a504e52bc99013b02b516bf1be63de6ad39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\User\\addForm.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df9706364a624_04054435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13183072735df9706363f7c5_17936057', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7168875745df970636440c1_55272506', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4758368875df97063644986_64853296', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10462741365df97063649259_20926259', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7682483285df97063649c04_08044216', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_13183072735df9706363f7c5_17936057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13183072735df9706363f7c5_17936057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy użytkownik<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_7168875745df970636440c1_55272506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_7168875745df970636440c1_55272506',
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
class Block_4758368875df97063644986_64853296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_4758368875df97063644986_64853296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_10462741365df97063649259_20926259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_10462741365df97063649259_20926259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_7682483285df97063649c04_08044216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_7682483285df97063649c04_08044216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user<?php
}
}
/* {/block 'where'} */
}
