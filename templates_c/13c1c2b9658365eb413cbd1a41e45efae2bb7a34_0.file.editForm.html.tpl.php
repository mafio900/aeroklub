<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:34:31
  from 'C:\xampp\htdocs\aeroklub\templates\RezUsluga\editForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e05276774a2d9_57659274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c1c2b9658365eb413cbd1a41e45efae2bb7a34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\RezUsluga\\editForm.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
  ),
),false)) {
function content_5e05276774a2d9_57659274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11795875165e05276773d435_75698256', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10949597465e05276773e3a4_18051406', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003932765e05276773ec98_01498860', 'formBody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16180039505e052767743018_96999935', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14190657225e0527677438d2_74561589', 'where');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_11795875165e05276773d435_75698256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11795875165e05276773d435_75698256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytowanie zarezerwowanej usługi<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_10949597465e05276773e3a4_18051406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_10949597465e05276773e3a4_18051406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

rezusluga/edytuj/
<?php
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_2003932765e05276773ec98_01498860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_2003932765e05276773ec98_01498860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_16180039505e052767743018_96999935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_16180039505e052767743018_96999935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytuj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_14190657225e0527677438d2_74561589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_14190657225e0527677438d2_74561589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja/<?php echo $_smarty_tpl->tpl_vars['data']->value['IdRezerwacja'];
}
}
/* {/block 'where'} */
}
