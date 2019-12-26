<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:50:48
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\addProducent.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050f182dfbe4_69257548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea5ec99c1c86027092fe022e339451059f0fe007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\addProducent.html.tpl',
      1 => 1577372710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Producent/form.html.tpl' => 1,
  ),
),false)) {
function content_5e050f182dfbe4_69257548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1178091455e050f182da220_97665884', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10751601735e050f182dad90_69033295', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2197119675e050f182db8a0_08116286', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13979716945e050f182df2f4_70792516', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_1178091455e050f182da220_97665884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_1178091455e050f182da220_97665884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
producent/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_10751601735e050f182dad90_69033295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10751601735e050f182dad90_69033295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy producent<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2197119675e050f182db8a0_08116286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2197119675e050f182db8a0_08116286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Producent/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_13979716945e050f182df2f4_70792516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_13979716945e050f182df2f4_70792516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
