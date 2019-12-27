<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 19:05:53
  from 'C:\xampp\htdocs\aeroklub\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0648012e4b58_18014986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30249db917ba226297acf5c8b376101806480726' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\tableTemplate.html.tpl',
      1 => 1577469902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modals/base.html.tpl' => 1,
  ),
),false)) {
function content_5e0648012e4b58_18014986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6640002255e0648012b1399_48788137', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'footUrlName'} */
class Block_2632258275e0648012ba980_87893948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'thead'} */
class Block_1144509285e0648012bb5d9_97773160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_2039242985e0648012ce4e1_36483985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <th></th>
            <?php
}
}
/* {/block 'tbody'} */
/* {block 'footUrlName'} */
class Block_14609950275e0648012d0e22_89555017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'editButton'} */
class Block_2924637085e0648012cf347_37460804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button data-url="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14609950275e0648012d0e22_89555017', 'footUrlName', $this->tplIndex);
?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"
            role="button" type="button" class="edit-button btn btn-primary btn-sm ml-2" title="Pokaż szczegółowe informacje"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><?php
}
}
/* {/block 'editButton'} */
/* {block 'footUrlName'} */
class Block_14067969625e0648012d3db2_35808944 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'tfoot'} */
class Block_12000830225e0648012d5585_20914688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_3698507355e0648012d7a13_75726708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_2174585785e0648012d8ac3_46497120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footButtonName'} */
/* {block 'body'} */
class Block_6640002255e0648012b1399_48788137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6640002255e0648012b1399_48788137',
  ),
  'footUrlName' => 
  array (
    0 => 'Block_2632258275e0648012ba980_87893948',
    1 => 'Block_14609950275e0648012d0e22_89555017',
    2 => 'Block_14067969625e0648012d3db2_35808944',
    3 => 'Block_3698507355e0648012d7a13_75726708',
  ),
  'thead' => 
  array (
    0 => 'Block_1144509285e0648012bb5d9_97773160',
  ),
  'tbody' => 
  array (
    0 => 'Block_2039242985e0648012ce4e1_36483985',
  ),
  'editButton' => 
  array (
    0 => 'Block_2924637085e0648012cf347_37460804',
  ),
  'tfoot' => 
  array (
    0 => 'Block_12000830225e0648012d5585_20914688',
  ),
  'footButtonName' => 
  array (
    0 => 'Block_2174585785e0648012d8ac3_46497120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <!-- BEGIN TABLE WITH DATA -->
<form action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2632258275e0648012ba980_87893948', 'footUrlName', $this->tplIndex);
?>
/usunwiele/" method="post">
<table id="mainTable" class="display table table-striped  table-bordered w-auto text-light">
    <thead>
        <tr>
            <th></th>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1144509285e0648012bb5d9_97773160', 'thead', $this->tplIndex);
?>

            <th class="hidden-print"></th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr>
            <td class="text-center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" name="ids[]" /></td>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2039242985e0648012ce4e1_36483985', 'tbody', $this->tplIndex);
?>

            <td><span class="btn-group"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2924637085e0648012cf347_37460804', 'editButton', $this->tplIndex);
?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14067969625e0648012d3db2_35808944', 'footUrlName', $this->tplIndex);
?>
/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"
            role="button" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i></a></span></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    <tfoot>
        <tr>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12000830225e0648012d5585_20914688', 'tfoot', $this->tplIndex);
?>

        </tr>
    </tfoot>
</table><!-- END TABLE WITH DATA -->
<button type="submit" class="btn btn-danger btn-sm" title="Usuń zaznaczone"><i class="fa fa-times" aria-hidden="true"></i> Usuń zaznaczone</button></br>
</form>
<button data-url="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3698507355e0648012d7a13_75726708', 'footUrlName', $this->tplIndex);
?>
/formularz"
role="button" class="add-button btn btn-primary btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2174585785e0648012d8ac3_46497120', 'footButtonName', $this->tplIndex);
?>
</button>
<?php }
$_smarty_tpl->_subTemplateRender("file:./modals/base.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
}
