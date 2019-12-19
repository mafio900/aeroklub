<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:50:16
  from 'C:\xampp\htdocs\lab10\templates\Samolot\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df977c840e028_29002244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61e67e8ed831492448c546991f72550e9768348a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Samolot\\addForm.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df977c840e028_29002244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1907827815df977c8407228_43564658', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2203385815df977c8407f03_83720163', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7081191725df977c8408704_50949401', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12032279675df977c840d189_10554523', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9892903445df977c840d986_19634932', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_1907827815df977c8407228_43564658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1907827815df977c8407228_43564658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy samolot<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_2203385815df977c8407f03_83720163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_2203385815df977c8407f03_83720163',
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
class Block_7081191725df977c8408704_50949401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_7081191725df977c8408704_50949401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_12032279675df977c840d189_10554523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_12032279675df977c840d189_10554523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_9892903445df977c840d986_19634932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_9892903445df977c840d986_19634932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
samolot<?php
}
}
/* {/block 'where'} */
}
