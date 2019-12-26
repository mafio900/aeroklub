<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:47:13
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\editSamolot.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e052a610f9591_96889919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ac4101e611c031a5a7841b0c4bd1bddc2c4723' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\editSamolot.html.tpl',
      1 => 1577396771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Samolot/form.html.tpl' => 1,
  ),
),false)) {
function content_5e052a610f9591_96889919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16871113515e052a610ef921_63360118', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4561627185e052a610f1232_90496851', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13303357905e052a610f1ac7_79493597', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10864033105e052a610f8629_00708563', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_16871113515e052a610ef921_63360118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_16871113515e052a610ef921_63360118',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
samolot/edytuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_4561627185e052a610f1232_90496851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4561627185e052a610f1232_90496851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja samolotu<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13303357905e052a610f1ac7_79493597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13303357905e052a610f1ac7_79493597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:../Samolot/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_10864033105e052a610f8629_00708563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_10864033105e052a610f8629_00708563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Edytuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
