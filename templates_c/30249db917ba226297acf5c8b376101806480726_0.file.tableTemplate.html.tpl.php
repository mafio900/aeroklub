<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:32:30
  from 'C:\xampp\htdocs\aeroklub\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050acea85aa0_30653271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30249db917ba226297acf5c8b376101806480726' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\tableTemplate.html.tpl',
      1 => 1577388749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modals/base.html.tpl' => 1,
  ),
),false)) {
function content_5e050acea85aa0_30653271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5478647695e050acea6efb4_56827354', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'footUrlName'} */
class Block_13642856895e050acea76c47_99658392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'thead'} */
class Block_11851311205e050acea77472_23993474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_16357793125e050acea7d580_00318603 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <th></th>
            <?php
}
}
/* {/block 'tbody'} */
/* {block 'footUrlName'} */
class Block_3047365805e050acea7e667_20423126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'footUrlName'} */
class Block_20707875335e050acea7fb18_35536447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'tfoot'} */
class Block_8975776505e050acea808b9_32952516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_463864245e050acea81760_25241101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_14236439915e050acea81d78_12086848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footButtonName'} */
/* {block 'body'} */
class Block_5478647695e050acea6efb4_56827354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5478647695e050acea6efb4_56827354',
  ),
  'footUrlName' => 
  array (
    0 => 'Block_13642856895e050acea76c47_99658392',
    1 => 'Block_3047365805e050acea7e667_20423126',
    2 => 'Block_20707875335e050acea7fb18_35536447',
    3 => 'Block_463864245e050acea81760_25241101',
  ),
  'thead' => 
  array (
    0 => 'Block_11851311205e050acea77472_23993474',
  ),
  'tbody' => 
  array (
    0 => 'Block_16357793125e050acea7d580_00318603',
  ),
  'tfoot' => 
  array (
    0 => 'Block_8975776505e050acea808b9_32952516',
  ),
  'footButtonName' => 
  array (
    0 => 'Block_14236439915e050acea81d78_12086848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <!-- BEGIN TABLE WITH DATA -->
<form action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13642856895e050acea76c47_99658392', 'footUrlName', $this->tplIndex);
?>
/usunwiele/" method="post">
<table id="mainTable" class="display table table-striped  table-bordered w-auto text-light">
    <thead>
        <tr>
            <th>a</th>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11851311205e050acea77472_23993474', 'thead', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16357793125e050acea7d580_00318603', 'tbody', $this->tplIndex);
?>

            <td><span class="btn-group"><button data-url="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3047365805e050acea7e667_20423126', 'footUrlName', $this->tplIndex);
?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"
            role="button" type="button" class="edit-button btn btn-primary btn-sm ml-2" title="Pokaż szczegółowe informacje"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20707875335e050acea7fb18_35536447', 'footUrlName', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8975776505e050acea808b9_32952516', 'tfoot', $this->tplIndex);
?>

        </tr>
    </tfoot>
</table><!-- END TABLE WITH DATA -->
<button type="submit" class="btn btn-danger btn-sm" title="Usuń zaznaczone"><i class="fa fa-times" aria-hidden="true"></i> Usuń zaznaczone</button></br>
</form>
<button data-url="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_463864245e050acea81760_25241101', 'footUrlName', $this->tplIndex);
?>
/formularz"
role="button" class="add-button btn btn-primary btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14236439915e050acea81d78_12086848', 'footButtonName', $this->tplIndex);
?>
</button>
<?php }
$_smarty_tpl->_subTemplateRender("file:./modals/base.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
}
