<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 22:35:37
  from 'C:\xampp\htdocs\aeroklub\templates\Usluga\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0527a9715a01_97971841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e607c3edbb8a18c582149b9e09d146427bdb0db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Usluga\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0527a9715a01_97971841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15024330485e0527a970d0e6_85343478', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377769735e0527a970dc73_70101598', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10574741595e0527a970e438_44118447', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2370568915e0527a9713f84_63732619', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7045883165e0527a97147f5_42844408', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9393249985e0527a9715164_31303424', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_15024330485e0527a970d0e6_85343478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15024330485e0527a970d0e6_85343478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista usług<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_377769735e0527a970dc73_70101598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_377769735e0527a970dc73_70101598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Usługa</th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_10574741595e0527a970e438_44118447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_10574741595e0527a970e438_44118447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['UslugaNazwa'];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['CenaJedn'];?>
zł za <?php echo $_smarty_tpl->tpl_vars['row']->value['JednMiary'];?>
)</td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'tfoot'} */
class Block_2370568915e0527a9713f84_63732619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_2370568915e0527a9713f84_63732619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_7045883165e0527a97147f5_42844408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_7045883165e0527a97147f5_42844408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
usluga<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_9393249985e0527a9715164_31303424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_9393249985e0527a9715164_31303424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj usługę<?php
}
}
/* {/block 'footButtonName'} */
}
