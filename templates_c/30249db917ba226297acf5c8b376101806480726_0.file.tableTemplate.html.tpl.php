<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 23:02:03
  from 'C:\xampp\htdocs\aeroklub\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e052ddb68a334_49032826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30249db917ba226297acf5c8b376101806480726' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\tableTemplate.html.tpl',
      1 => 1577397720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modals/base.html.tpl' => 1,
  ),
),false)) {
function content_5e052ddb68a334_49032826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21006326175e052ddb6644c3_47243511', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'footUrlName'} */
class Block_20461077425e052ddb66ecb6_52246248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'thead'} */
class Block_5828821455e052ddb671324_03705115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_5770386465e052ddb67e829_53887717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <th></th>
            <?php
}
}
/* {/block 'tbody'} */
/* {block 'footUrlName'} */
class Block_12985514995e052ddb681344_23311854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'footUrlName'} */
class Block_13682299575e052ddb683251_57870269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'tfoot'} */
class Block_8677736575e052ddb684057_66158740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_7489602425e052ddb684f01_08158864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_4903335355e052ddb685506_59664381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footButtonName'} */
/* {block 'body'} */
class Block_21006326175e052ddb6644c3_47243511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21006326175e052ddb6644c3_47243511',
  ),
  'footUrlName' => 
  array (
    0 => 'Block_20461077425e052ddb66ecb6_52246248',
    1 => 'Block_12985514995e052ddb681344_23311854',
    2 => 'Block_13682299575e052ddb683251_57870269',
    3 => 'Block_7489602425e052ddb684f01_08158864',
  ),
  'thead' => 
  array (
    0 => 'Block_5828821455e052ddb671324_03705115',
  ),
  'tbody' => 
  array (
    0 => 'Block_5770386465e052ddb67e829_53887717',
  ),
  'tfoot' => 
  array (
    0 => 'Block_8677736575e052ddb684057_66158740',
  ),
  'footButtonName' => 
  array (
    0 => 'Block_4903335355e052ddb685506_59664381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <!-- BEGIN TABLE WITH DATA -->
<form action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20461077425e052ddb66ecb6_52246248', 'footUrlName', $this->tplIndex);
?>
/usunwiele/" method="post">
<table id="mainTable" class="display table table-striped  table-bordered w-auto text-light">
    <thead>
        <tr>
            <th></th>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5828821455e052ddb671324_03705115', 'thead', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5770386465e052ddb67e829_53887717', 'tbody', $this->tplIndex);
?>

            <td><span class="btn-group"><button data-url="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12985514995e052ddb681344_23311854', 'footUrlName', $this->tplIndex);
?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"
            role="button" type="button" class="edit-button btn btn-primary btn-sm ml-2" title="Pokaż szczegółowe informacje"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13682299575e052ddb683251_57870269', 'footUrlName', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8677736575e052ddb684057_66158740', 'tfoot', $this->tplIndex);
?>

        </tr>
    </tfoot>
</table><!-- END TABLE WITH DATA -->
<button type="submit" class="btn btn-danger btn-sm" title="Usuń zaznaczone"><i class="fa fa-times" aria-hidden="true"></i> Usuń zaznaczone</button></br>
</form>
<button data-url="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7489602425e052ddb684f01_08158864', 'footUrlName', $this->tplIndex);
?>
/formularz"
role="button" class="add-button btn btn-primary btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4903335355e052ddb685506_59664381', 'footButtonName', $this->tplIndex);
?>
</button>
<?php }
$_smarty_tpl->_subTemplateRender("file:./modals/base.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
}
