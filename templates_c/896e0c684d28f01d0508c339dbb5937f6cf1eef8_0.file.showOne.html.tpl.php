<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 19:09:45
  from 'C:\xampp\htdocs\aeroklub\templates\Rezerwacja\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0648e9b4ac30_59298166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '896e0c684d28f01d0508c339dbb5937f6cf1eef8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Rezerwacja\\showOne.html.tpl',
      1 => 1577470184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
    'file:./rezuslTable.html.tpl' => 1,
  ),
),false)) {
function content_5e0648e9b4ac30_59298166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3061696465e0648e9b3d885_84580848', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8719710765e0648e9b3e7e9_71454376', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9569779785e0648e9b3f070_84084328', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20064944325e0648e9b3f7d4_18495223', 'where');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16617684525e0648e9b3ff08_79767934', 'formBody');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7078026645e0648e9b487e5_63518537', 'rezusl');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_3061696465e0648e9b3d885_84580848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3061696465e0648e9b3d885_84580848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytowanie rezerwacji<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_8719710765e0648e9b3e7e9_71454376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_8719710765e0648e9b3e7e9_71454376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

rezerwacja/edytuj/
<?php
}
}
/* {/block 'action'} */
/* {block 'submitName'} */
class Block_9569779785e0648e9b3f070_84084328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_9569779785e0648e9b3f070_84084328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytuj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_20064944325e0648e9b3f7d4_18495223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_20064944325e0648e9b3f7d4_18495223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja<?php
}
}
/* {/block 'where'} */
/* {block 'formBody'} */
class Block_16617684525e0648e9b3ff08_79767934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_16617684525e0648e9b3ff08_79767934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'rezusl'} */
class Block_7078026645e0648e9b487e5_63518537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rezusl' => 
  array (
    0 => 'Block_7078026645e0648e9b487e5_63518537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./rezuslTable.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'rezusl'} */
}
