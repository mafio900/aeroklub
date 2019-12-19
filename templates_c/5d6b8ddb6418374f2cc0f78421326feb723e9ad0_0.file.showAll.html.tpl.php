<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:00:23
  from 'C:\xampp\htdocs\lab10\templates\Samolot\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df96c177cb3a0_02477435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6b8ddb6418374f2cc0f78421326feb723e9ad0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Samolot\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df96c177cb3a0_02477435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14446928745df96c177ba123_10947959', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10478128595df96c177bb3f6_61765349', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1292061865df96c177bbbf4_48535089', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15510265075df96c177c9dc8_68660311', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5073530415df96c177ca5b6_45392187', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4014391455df96c177cacf2_92902781', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_14446928745df96c177ba123_10947959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14446928745df96c177ba123_10947959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista samolotów<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_10478128595df96c177bb3f6_61765349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_10478128595df96c177bb3f6_61765349',
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
class Block_1292061865df96c177bbbf4_48535089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_1292061865df96c177bbbf4_48535089',
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
class Block_15510265075df96c177c9dc8_68660311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_15510265075df96c177c9dc8_68660311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_5073530415df96c177ca5b6_45392187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_5073530415df96c177ca5b6_45392187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
samolot<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_4014391455df96c177cacf2_92902781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_4014391455df96c177cacf2_92902781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj samolot<?php
}
}
/* {/block 'footButtonName'} */
}
