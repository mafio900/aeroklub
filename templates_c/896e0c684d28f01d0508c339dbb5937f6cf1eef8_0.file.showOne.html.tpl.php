<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:34:29
  from 'C:\xampp\htdocs\aeroklub\templates\Rezerwacja\showOne.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e052765192168_71044542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '896e0c684d28f01d0508c339dbb5937f6cf1eef8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Rezerwacja\\showOne.html.tpl',
      1 => 1576189977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./form.html.tpl' => 1,
    'file:./rezuslTable.html.tpl' => 1,
  ),
),false)) {
function content_5e052765192168_71044542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19095347065e052765185a84_03392453', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19843308455e052765186ba5_69158840', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6577106095e052765187455_32228060', 'submitName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3668829545e052765187bc7_49767179', 'where');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8422818355e0527651882e0_40390631', 'formBody');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1597167725e052765190215_44521795', 'rezusl');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../baseForm.html.tpl");
}
/* {block 'title'} */
class Block_19095347065e052765185a84_03392453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19095347065e052765185a84_03392453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytowanie rezerwacji<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_19843308455e052765186ba5_69158840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_19843308455e052765186ba5_69158840',
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
class Block_6577106095e052765187455_32228060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'submitName' => 
  array (
    0 => 'Block_6577106095e052765187455_32228060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edytuj<?php
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_3668829545e052765187bc7_49767179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'where' => 
  array (
    0 => 'Block_3668829545e052765187bc7_49767179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja<?php
}
}
/* {/block 'where'} */
/* {block 'formBody'} */
class Block_8422818355e0527651882e0_40390631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formBody' => 
  array (
    0 => 'Block_8422818355e0527651882e0_40390631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'formBody'} */
/* {block 'rezusl'} */
class Block_1597167725e052765190215_44521795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rezusl' => 
  array (
    0 => 'Block_1597167725e052765190215_44521795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:./rezuslTable.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'rezusl'} */
}
