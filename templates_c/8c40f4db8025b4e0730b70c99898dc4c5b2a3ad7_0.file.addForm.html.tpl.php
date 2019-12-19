<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:00:27
  from 'C:\xampp\htdocs\lab10\templates\Rezerwacja\addForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df96c1b531089_46160119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c40f4db8025b4e0730b70c99898dc4c5b2a3ad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Rezerwacja\\addForm.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5df96c1b531089_46160119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13886725165df96c1b527ca8_42133531', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21102146835df96c1b528c27_12107845', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16517201255df96c1b529494_37309289', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12776425145df96c1b5301e0_39417340', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1573298255df96c1b5309f6_01606656', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_13886725165df96c1b527ca8_42133531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13886725165df96c1b527ca8_42133531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowa rezerwacja<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_21102146835df96c1b528c27_12107845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_21102146835df96c1b528c27_12107845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

rezerwacja/dodaj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_16517201255df96c1b529494_37309289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_16517201255df96c1b529494_37309289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_12776425145df96c1b5301e0_39417340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_12776425145df96c1b5301e0_39417340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_1573298255df96c1b5309f6_01606656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_1573298255df96c1b5309f6_01606656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja<?php
}
}
/* {/block 'where'} */
}
