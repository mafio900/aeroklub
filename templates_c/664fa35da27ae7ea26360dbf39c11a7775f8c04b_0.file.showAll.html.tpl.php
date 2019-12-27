<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 19:05:53
  from 'C:\xampp\htdocs\aeroklub\templates\Rezerwacja\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e064801280372_04123998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664fa35da27ae7ea26360dbf39c11a7775f8c04b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\Rezerwacja\\showAll.html.tpl',
      1 => 1577469946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e064801280372_04123998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4839559245e064801256a19_31223668', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8453542495e06480125d4a8_62361440', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8788009785e06480125e2e8_08226864', 'tbody');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5971712995e064801274d95_00114042', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1166541145e064801275582_44422014', 'footUrlName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17708385335e064801275cd0_51194215', 'footButtonName');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6172521095e064801276400_76745251', 'editButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_4839559245e064801256a19_31223668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4839559245e064801256a19_31223668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista rezerwacji<?php
}
}
/* {/block 'title'} */
/* {block 'thead'} */
class Block_8453542495e06480125d4a8_62361440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_8453542495e06480125d4a8_62361440',
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
class Block_8788009785e06480125e2e8_08226864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_8788009785e06480125e2e8_08226864',
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
class Block_5971712995e064801274d95_00114042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_5971712995e064801274d95_00114042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_1166541145e064801275582_44422014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footUrlName' => 
  array (
    0 => 'Block_1166541145e064801275582_44422014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
rezerwacja<?php
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_17708385335e064801275cd0_51194215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footButtonName' => 
  array (
    0 => 'Block_17708385335e064801275cd0_51194215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodaj rezerwację<?php
}
}
/* {/block 'footButtonName'} */
/* {block 'editButton'} */
class Block_6172521095e064801276400_76745251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editButton' => 
  array (
    0 => 'Block_6172521095e064801276400_76745251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
rezerwacja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"
role="button" type="button" class="edit-button btn btn-primary btn-sm ml-2" title="Pokaż szczegółowe informacje"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php
}
}
/* {/block 'editButton'} */
}
