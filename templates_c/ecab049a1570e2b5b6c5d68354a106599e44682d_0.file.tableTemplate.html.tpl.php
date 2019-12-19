<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 20:52:15
  from 'C:\xampp\htdocs\lab10\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df931eff2ae13_30546240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecab049a1570e2b5b6c5d68354a106599e44682d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\tableTemplate.html.tpl',
      1 => 1576178959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df931eff2ae13_30546240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12338755405df931eff06d83_69994290', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'footUrlName'} */
class Block_13674960265df931eff19324_86766317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'thead'} */
class Block_5720710985df931eff1a323_77167849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'thead'} */
/* {block 'tbody'} */
class Block_237461625df931eff24fd8_54269577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <th></th>
            <?php
}
}
/* {/block 'tbody'} */
/* {block 'footUrlName'} */
class Block_17387428425df931eff261d2_01415039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'footUrlName'} */
class Block_12881695315df931eff276f6_90742035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'tfoot'} */
class Block_1904496615df931eff287a3_58985963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'tfoot'} */
/* {block 'footUrlName'} */
class Block_5270001415df931eff29729_38345277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footUrlName'} */
/* {block 'footButtonName'} */
class Block_11500588255df931eff29d98_45316552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footButtonName'} */
/* {block 'body'} */
class Block_12338755405df931eff06d83_69994290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12338755405df931eff06d83_69994290',
  ),
  'footUrlName' => 
  array (
    0 => 'Block_13674960265df931eff19324_86766317',
    1 => 'Block_17387428425df931eff261d2_01415039',
    2 => 'Block_12881695315df931eff276f6_90742035',
    3 => 'Block_5270001415df931eff29729_38345277',
  ),
  'thead' => 
  array (
    0 => 'Block_5720710985df931eff1a323_77167849',
  ),
  'tbody' => 
  array (
    0 => 'Block_237461625df931eff24fd8_54269577',
  ),
  'tfoot' => 
  array (
    0 => 'Block_1904496615df931eff287a3_58985963',
  ),
  'footButtonName' => 
  array (
    0 => 'Block_11500588255df931eff29d98_45316552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <!-- BEGIN TABLE WITH DATA -->
<form action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13674960265df931eff19324_86766317', 'footUrlName', $this->tplIndex);
?>
/usunwiele/" method="post">
<table id="mainTable" class="display table table-striped  table-bordered w-auto text-light">
    <thead>
        <tr>
            <th></th>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5720710985df931eff1a323_77167849', 'thead', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237461625df931eff24fd8_54269577', 'tbody', $this->tplIndex);
?>

            <td><span class="btn-group"><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17387428425df931eff261d2_01415039', 'footUrlName', $this->tplIndex);
?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"
            role="button" class="btn btn-primary btn-sm ml-2" title="Pokaż szczegółowe informacje"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12881695315df931eff276f6_90742035', 'footUrlName', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1904496615df931eff287a3_58985963', 'tfoot', $this->tplIndex);
?>

        </tr>
    </tfoot>
</table><!-- END TABLE WITH DATA -->
<button type="submit" class="btn btn-danger btn-sm" title="Usuń zaznaczone"><i class="fa fa-times" aria-hidden="true"></i> Usuń zaznaczone</button></br>
</form>
<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5270001415df931eff29729_38345277', 'footUrlName', $this->tplIndex);
?>
/formularz"
role="button" class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus" aria-hidden="true"></i> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11500588255df931eff29d98_45316552', 'footButtonName', $this->tplIndex);
?>
</a>
<?php }
}
}
/* {/block 'body'} */
}
