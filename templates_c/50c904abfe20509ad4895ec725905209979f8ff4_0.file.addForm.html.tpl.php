<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:25:00
  from 'C:\xampp\htdocs\lab10\templates\Producent\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97fec80afc6_87607188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c904abfe20509ad4895ec725905209979f8ff4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Producent\\addForm.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df97fec80afc6_87607188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14279934405df97fec805280_57001845', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15651946045df97fec805dc0_82532650', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21353202335df97fec806572_30473813', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12574134395df97fec80a1f0_81771026', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12425088885df97fec80a986_35519305', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_14279934405df97fec805280_57001845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14279934405df97fec805280_57001845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy producent<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_15651946045df97fec805dc0_82532650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_15651946045df97fec805dc0_82532650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

producent/dodaj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_21353202335df97fec806572_30473813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_21353202335df97fec806572_30473813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_12574134395df97fec80a1f0_81771026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_12574134395df97fec80a1f0_81771026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_12425088885df97fec80a986_35519305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_12425088885df97fec80a986_35519305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
producent<?php
}
}
/* {/block 'where'} */
}
