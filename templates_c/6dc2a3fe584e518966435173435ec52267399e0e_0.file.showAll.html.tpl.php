<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 20:52:15
  from 'C:\xampp\htdocs\lab10\templates\User\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df931efee0609_64235261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dc2a3fe584e518966435173435ec52267399e0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\User\\showAll.html.tpl',
      1 => 1576162162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df931efee0609_64235261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4855551015df931efecd217_23983380', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3765147205df931efecf4c9_83491400', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13441559265df931efecfd70_95151803', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3601341185df931efedeff9_70373647', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19329157475df931efedf7f6_65879461', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8858578525df931efedff40_05435186', 'footButtonName');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_4855551015df931efecd217_23983380 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4855551015df931efecd217_23983380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista użytkowników<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_3765147205df931efecf4c9_83491400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_3765147205df931efecf4c9_83491400',
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
class Block_13441559265df931efecfd70_95151803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_13441559265df931efecfd70_95151803',
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
class Block_3601341185df931efedeff9_70373647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_3601341185df931efedeff9_70373647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_19329157475df931efedf7f6_65879461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_19329157475df931efedf7f6_65879461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
user<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_8858578525df931efedff40_05435186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_8858578525df931efedff40_05435186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj użytkownika<?php
}
}
/* {/block 'footButtonName'} */
}
