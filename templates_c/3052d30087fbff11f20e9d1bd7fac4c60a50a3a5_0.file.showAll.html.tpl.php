<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:31:44
  from 'C:\xampp\htdocs\aeroklub\templates\Producent\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050aa004de06_47646975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3052d30087fbff11f20e9d1bd7fac4c60a50a3a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Producent\\showAll.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050aa004de06_47646975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10888915255e050aa0046706_04219160', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20264866045e050aa00476a3_58937435', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5703788625e050aa0047e89_09205923', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16206946665e050aa004c717_52514984', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2171272005e050aa004cec8_40144967', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1325286595e050aa004d723_15122850', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_10888915255e050aa0046706_04219160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10888915255e050aa0046706_04219160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista producentów<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_20264866045e050aa00476a3_58937435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_20264866045e050aa00476a3_58937435',
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
class Block_5703788625e050aa0047e89_09205923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_5703788625e050aa0047e89_09205923',
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
class Block_16206946665e050aa004c717_52514984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_16206946665e050aa004c717_52514984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_2171272005e050aa004cec8_40144967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_2171272005e050aa004cec8_40144967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
producent<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_1325286595e050aa004d723_15122850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_1325286595e050aa004d723_15122850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj producenta<?php
}
}
/* {/block 'footButtonName'} */
}
