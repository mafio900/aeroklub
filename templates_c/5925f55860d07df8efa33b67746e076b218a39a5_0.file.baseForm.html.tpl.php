<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:52:06
  from 'C:\xampp\htdocs\aeroklub\templates\baseForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050f66462ef1_81004685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5925f55860d07df8efa33b67746e076b218a39a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\baseForm.html.tpl',
      1 => 1576520927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050f66462ef1_81004685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2614993825e050f66459b10_70178740', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_407676155e050f6645a3c0_64151040', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'title'} */
class Block_2614993825e050f66459b10_70178740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2614993825e050f66459b10_70178740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Formularz<?php
}
}
/* {/block 'title'} */
/* {block 'action'} */
class Block_10769090285e050f66460207_91323700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'formBody'} */
class Block_10618145925e050f66460985_37928795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'formBody'} */
/* {block 'submitName'} */
class Block_9293896875e050f66460ff4_28055785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'submitName'} */
/* {block 'where'} */
class Block_4468055695e050f66461f52_59690589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'where'} */
/* {block 'rezusl'} */
class Block_20336230005e050f66462583_62394130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'rezusl'} */
/* {block 'body'} */
class Block_407676155e050f6645a3c0_64151040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_407676155e050f6645a3c0_64151040',
  ),
  'action' => 
  array (
    0 => 'Block_10769090285e050f66460207_91323700',
  ),
  'formBody' => 
  array (
    0 => 'Block_10618145925e050f66460985_37928795',
  ),
  'submitName' => 
  array (
    0 => 'Block_9293896875e050f66460ff4_28055785',
  ),
  'where' => 
  array (
    0 => 'Block_4468055695e050f66461f52_59690589',
  ),
  'rezusl' => 
  array (
    0 => 'Block_20336230005e050f66462583_62394130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="formularz" class="form-horizontal col-12" action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10769090285e050f66460207_91323700', 'action', $this->tplIndex);
?>
" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10618145925e050f66460985_37928795', 'formBody', $this->tplIndex);
?>

            </div>
            <div class="panel-footer text-center text-md-left">
                <button id="submit-button" type="submit" class="btn btn-success"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9293896875e050f66460ff4_28055785', 'submitName', $this->tplIndex);
?>
</button>
                <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4468055695e050f66461f52_59690589', 'where', $this->tplIndex);
?>
/" role="button" class="btn btn-primary">Cofnij</a>
            </div>
        </div>
    </form>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20336230005e050f66462583_62394130', 'rezusl', $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
}
