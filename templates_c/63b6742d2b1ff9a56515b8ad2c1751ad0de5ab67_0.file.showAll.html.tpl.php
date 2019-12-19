<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:01:24
  from 'C:\xampp\htdocs\lab10\templates\Usluga\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97a643fd3a7_64878059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b6742d2b1ff9a56515b8ad2c1751ad0de5ab67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Usluga\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df97a643fd3a7_64878059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13649678825df97a643eed81_87631432', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16745129495df97a643efac0_30840680', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6524859625df97a643f0321_26081032', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18081845175df97a643fad65_96894581', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8835620535df97a643fbb51_70927941', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19474070005df97a643fc7e5_61996853', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_13649678825df97a643eed81_87631432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13649678825df97a643eed81_87631432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista usług<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_16745129495df97a643efac0_30840680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_16745129495df97a643efac0_30840680',
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
class Block_6524859625df97a643f0321_26081032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_6524859625df97a643f0321_26081032',
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
class Block_18081845175df97a643fad65_96894581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_18081845175df97a643fad65_96894581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_8835620535df97a643fbb51_70927941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_8835620535df97a643fbb51_70927941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
usluga<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_19474070005df97a643fc7e5_61996853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_19474070005df97a643fc7e5_61996853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj usługę<?php
}
}
/* {/block 'footButtonName'} */
}
