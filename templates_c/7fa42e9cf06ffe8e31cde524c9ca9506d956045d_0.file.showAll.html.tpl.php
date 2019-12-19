<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:04:07
  from 'C:\xampp\htdocs\lab10\templates\Status\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97b072552f4_33651539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fa42e9cf06ffe8e31cde524c9ca9506d956045d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Status\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df97b072552f4_33651539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4094460325df97b0724c9f6_33924978', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10621531745df97b0724e909_29082620', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8760476095df97b0724f1a2_95027551', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15113852795df97b07253db3_25249531', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9239053925df97b07254545_71850827', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14677761405df97b07254c63_94844910', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_4094460325df97b0724c9f6_33924978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4094460325df97b0724c9f6_33924978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista statusów<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_10621531745df97b0724e909_29082620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_10621531745df97b0724e909_29082620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Status</th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_8760476095df97b0724f1a2_95027551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_8760476095df97b0724f1a2_95027551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['StatusNazwa'];?>
</td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'tfoot'} */
class Block_15113852795df97b07253db3_25249531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_15113852795df97b07253db3_25249531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_9239053925df97b07254545_71850827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_9239053925df97b07254545_71850827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
status<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_14677761405df97b07254c63_94844910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_14677761405df97b07254c63_94844910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj status<?php
}
}
/* {/block 'footButtonName'} */
}
