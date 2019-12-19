<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 02:24:58
  from 'C:\xampp\htdocs\lab10\templates\Producent\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df97feabea631_38679911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a6060f8f042392d6139b4cda03c3019c1e9c411' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\Producent\\showAll.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df97feabea631_38679911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7452709115df97feabdffd5_70801560', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9789247785df97feabe0af0_45223900', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_759005645df97feabe1298_39077257', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6773772105df97feabe8998_30934448', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2978375835df97feabe96c0_41734889', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1866289295df97feabe9ef8_48840308', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_7452709115df97feabdffd5_70801560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7452709115df97feabdffd5_70801560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista producentów<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_9789247785df97feabe0af0_45223900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_9789247785df97feabe0af0_45223900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>Nazwa</th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_759005645df97feabe1298_39077257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_759005645df97feabe1298_39077257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ProducentNazwa'];?>
</td>

<?php
}
}
/* {/block 'tbody'} */
/* {block 'tfoot'} */
class Block_6773772105df97feabe8998_30934448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_6773772105df97feabe8998_30934448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_2978375835df97feabe96c0_41734889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_2978375835df97feabe96c0_41734889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
producent<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_1866289295df97feabe9ef8_48840308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_1866289295df97feabe9ef8_48840308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj producenta<?php
}
}
/* {/block 'footButtonName'} */
}
