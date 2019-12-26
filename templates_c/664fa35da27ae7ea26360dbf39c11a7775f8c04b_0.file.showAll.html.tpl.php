<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 21:01:52
  from 'C:\xampp\htdocs\aeroklub\templates\Rezerwacja\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0511b083d781_20648824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664fa35da27ae7ea26360dbf39c11a7775f8c04b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Rezerwacja\\showAll.html.tpl',
      1 => 1576190097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0511b083d781_20648824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8673126115e0511b08327a3_09222233', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10093267355e0511b08336c8_10380046', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5185504945e0511b0834048_29330310', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9882844485e0511b083c219_71721512', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17085792665e0511b083c9d2_32167233', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1790227535e0511b083d0e7_78014287', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_8673126115e0511b08327a3_09222233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8673126115e0511b08327a3_09222233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista rezerwacji<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_10093267355e0511b08336c8_10380046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_10093267355e0511b08336c8_10380046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Id rezerwacji</th>
    <th>Złożona przez</th>
    <th>Status</th>
    <th>Data złożenia</th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_5185504945e0511b0834048_29330310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_5185504945e0511b0834048_29330310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['row']->value['IdKlient']]['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['row']->value['IdKlient']]['Nazwisko'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['statusy']->value[$_smarty_tpl->tpl_vars['row']->value['IdStatus']]['StatusNazwa'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['DataZlozenia'];?>
</td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'tfoot'} */
class Block_9882844485e0511b083c219_71721512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_9882844485e0511b083c219_71721512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_17085792665e0511b083c9d2_32167233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_17085792665e0511b083c9d2_32167233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_1790227535e0511b083d0e7_78014287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_1790227535e0511b083d0e7_78014287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj rezerwację<?php
}
}
/* {/block 'footButtonName'} */
}
