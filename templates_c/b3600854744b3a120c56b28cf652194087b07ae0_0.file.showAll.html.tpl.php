<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:00:25
  from 'C:\xampp\htdocs\lab10\templates\Rezerwacja\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df96c194711e5_34261420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3600854744b3a120c56b28cf652194087b07ae0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Rezerwacja\\showAll.html.tpl',
      1 => 1576190097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df96c194711e5_34261420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8845389955df96c19467ca3_88174959', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16074955415df96c19468b27_93016456', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13710334445df96c19469305_59220082', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19358128945df96c1946fd42_72897138', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15957130305df96c194704a1_86454173', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16426261415df96c19470bb5_68911082', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_8845389955df96c19467ca3_88174959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8845389955df96c19467ca3_88174959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista rezerwacji<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_16074955415df96c19468b27_93016456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_16074955415df96c19468b27_93016456',
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
class Block_13710334445df96c19469305_59220082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_13710334445df96c19469305_59220082',
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
class Block_19358128945df96c1946fd42_72897138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_19358128945df96c1946fd42_72897138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_15957130305df96c194704a1_86454173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_15957130305df96c194704a1_86454173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_16426261415df96c19470bb5_68911082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_16426261415df96c19470bb5_68911082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj rezerwację<?php
}
}
/* {/block 'footButtonName'} */
}
