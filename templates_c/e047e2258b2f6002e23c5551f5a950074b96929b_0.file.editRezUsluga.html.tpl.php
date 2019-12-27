<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 20:00:41
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\editRezUsluga.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0654d9575c25_00048969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e047e2258b2f6002e23c5551f5a950074b96929b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\editRezUsluga.html.tpl',
      1 => 1577473024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../RezUsluga/form.html.tpl' => 1,
  ),
),false)) {
function content_5e0654d9575c25_00048969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14977078535e0654d956c9a3_00436179', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20649276755e0654d956dfc2_68128666', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17800952935e0654d956ef75_49599574', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16020490045e0654d9574f89_21543559', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_14977078535e0654d956c9a3_00436179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_14977078535e0654d956c9a3_00436179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezusluga/edytuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_20649276755e0654d956dfc2_68128666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20649276755e0654d956dfc2_68128666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja usługi w rezerwacji<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17800952935e0654d956ef75_49599574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17800952935e0654d956ef75_49599574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:../RezUsluga/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_16020490045e0654d9574f89_21543559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_16020490045e0654d9574f89_21543559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Edytuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
