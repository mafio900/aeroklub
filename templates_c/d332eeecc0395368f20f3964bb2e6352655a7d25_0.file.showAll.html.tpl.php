<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:35:42
  from 'C:\xampp\htdocs\aeroklub\templates\Samolot\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0527ae5758a2_41727045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd332eeecc0395368f20f3964bb2e6352655a7d25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Samolot\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0527ae5758a2_41727045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1886849885e0527ae56d079_62462604', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9837376955e0527ae56de86_24006579', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19795760265e0527ae56e642_34849311', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14922442765e0527ae574406_55614596', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4120896415e0527ae574b54_44175825', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7022732625e0527ae575251_61303135', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_1886849885e0527ae56d079_62462604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1886849885e0527ae56d079_62462604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista samolotów<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_9837376955e0527ae56de86_24006579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_9837376955e0527ae56de86_24006579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Producent</th>
    <th>Model</th>
    <th>Rejestracja</th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_19795760265e0527ae56e642_34849311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_19795760265e0527ae56e642_34849311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['producenci']->value[$_smarty_tpl->tpl_vars['row']->value['IdProducent']]['ProducentNazwa'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Model'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Rejestracja'];?>
</td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'tfoot'} */
class Block_14922442765e0527ae574406_55614596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_14922442765e0527ae574406_55614596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_4120896415e0527ae574b54_44175825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_4120896415e0527ae574b54_44175825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
samolot<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_7022732625e0527ae575251_61303135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_7022732625e0527ae575251_61303135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj samolot<?php
}
}
/* {/block 'footButtonName'} */
}
