<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:52:02
  from 'C:\xampp\htdocs\aeroklub\templates\User\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050f62e9d1e8_81915273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2141b83789994c363ce8c541bd9ee86cd5b2e2d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\User\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050f62e9d1e8_81915273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7228260935e050f62e8f3f5_12181812', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15108350315e050f62e90324_48288045', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17763045015e050f62e90d34_46462431', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18463603655e050f62e98778_91785557', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11696420225e050f62e99f51_39391447', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20032837125e050f62e9b8e8_66734068', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_7228260935e050f62e8f3f5_12181812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7228260935e050f62e8f3f5_12181812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista użytkowników<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_15108350315e050f62e90324_48288045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_15108350315e050f62e90324_48288045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Imie</th>
    <th>Nazwisko</th>
    <th>Login</th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_17763045015e050f62e90d34_46462431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_17763045015e050f62e90d34_46462431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Imie'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Nazwisko'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['Login'];?>
</td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'tfoot'} */
class Block_18463603655e050f62e98778_91785557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_18463603655e050f62e98778_91785557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_11696420225e050f62e99f51_39391447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_11696420225e050f62e99f51_39391447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_20032837125e050f62e9b8e8_66734068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_20032837125e050f62e9b8e8_66734068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj użytkownika<?php
}
}
/* {/block 'footButtonName'} */
}
