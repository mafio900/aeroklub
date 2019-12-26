<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 21:02:40
  from 'C:\xampp\htdocs\aeroklub\templates\Status\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0511e081ac79_15199659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd796674d0d1568aec4e5214934decfcb5d84ee0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Status\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0511e081ac79_15199659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2897321855e0511e0810ad0_67816559', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11196941715e0511e0811746_16908060', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19574185525e0511e0812ca5_34857988', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16792019345e0511e08196a5_09780913', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21030306105e0511e0819e75_92245957', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5313618845e0511e081a5a2_11107684', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_2897321855e0511e0810ad0_67816559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2897321855e0511e0810ad0_67816559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista statusów<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_11196941715e0511e0811746_16908060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_11196941715e0511e0811746_16908060',
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
class Block_19574185525e0511e0812ca5_34857988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_19574185525e0511e0812ca5_34857988',
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
class Block_16792019345e0511e08196a5_09780913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_16792019345e0511e08196a5_09780913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_21030306105e0511e0819e75_92245957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_21030306105e0511e0819e75_92245957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
status<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_5313618845e0511e081a5a2_11107684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_5313618845e0511e081a5a2_11107684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj status<?php
}
}
/* {/block 'footButtonName'} */
}
