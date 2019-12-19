<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-18 01:00:27
  from 'C:\xampp\htdocs\lab10\templates\baseForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df96c1b54f0f6_97733661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d36755243aa096c8cc0c648774569c5604321ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\baseForm.html.tpl',
      1 => 1576520927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df96c1b54f0f6_97733661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8219357315df96c1b542d77_01953847', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11860421615df96c1b543650_96775789', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_8219357315df96c1b542d77_01953847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8219357315df96c1b542d77_01953847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_1524373725df96c1b54bb73_00635289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_1808040015df96c1b54c7c2_92720213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_17021770285df96c1b54ce71_27521937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_8101247715df96c1b54ddd0_93588535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'where'} */
/* {block 'rezusl'} */
class Block_20688429085df96c1b54e436_55068210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'rezusl'} */
/* {block 'body'} */
class Block_11860421615df96c1b543650_96775789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11860421615df96c1b543650_96775789',
  ),
  'action' => 
  array (
    0 => 'Block_1524373725df96c1b54bb73_00635289',
  ),
  'formBody' => 
  array (
    0 => 'Block_1808040015df96c1b54c7c2_92720213',
  ),
  'submitName' => 
  array (
    0 => 'Block_17021770285df96c1b54ce71_27521937',
  ),
  'where' => 
  array (
    0 => 'Block_8101247715df96c1b54ddd0_93588535',
  ),
  'rezusl' => 
  array (
    0 => 'Block_20688429085df96c1b54e436_55068210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="formularz" class="form-horizontal col-12" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1524373725df96c1b54bb73_00635289', 'action', $this->tplIndex);
?>
" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1808040015df96c1b54c7c2_92720213', 'formBody', $this->tplIndex);
?>

            </div>
            <div class="panel-footer text-center text-md-left">
                <button id="submit-button" type="submit" class="btn btn-success"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17021770285df96c1b54ce71_27521937', 'submitName', $this->tplIndex);
?>
</button>
                <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8101247715df96c1b54ddd0_93588535', 'where', $this->tplIndex);
?>
/" role="button" class="btn btn-primary">Cofnij</a>
            </div>
        </div>
    </form>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20688429085df96c1b54e436_55068210', 'rezusl', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
