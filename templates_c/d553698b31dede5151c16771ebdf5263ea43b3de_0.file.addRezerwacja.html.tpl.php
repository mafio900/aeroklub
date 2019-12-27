<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 23:24:25
  from 'C:\xampp\htdocs\aeroklub\templates\ajaxModals\addRezerwacja.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e053319eeb988_17743216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd553698b31dede5151c16771ebdf5263ea43b3de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\ajaxModals\\addRezerwacja.html.tpl',
      1 => 1577398616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Rezerwacja/form.html.tpl' => 1,
  ),
),false)) {
function content_5e053319eeb988_17743216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15747306605e053319ee6967_03329558', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17136155545e053319ee7496_02908448', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8474260055e053319ee7c24_51732720', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3784557555e053319eeb2e8_43336049', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_15747306605e053319ee6967_03329558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_15747306605e053319ee6967_03329558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_17136155545e053319ee7496_02908448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17136155545e053319ee7496_02908448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowa rezerwacja<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8474260055e053319ee7c24_51732720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8474260055e053319ee7c24_51732720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Rezerwacja/form.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_3784557555e053319eeb2e8_43336049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_3784557555e053319eeb2e8_43336049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
