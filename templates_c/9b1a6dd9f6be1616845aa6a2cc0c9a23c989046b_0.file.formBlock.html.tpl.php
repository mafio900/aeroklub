<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:33:57
  from 'C:\xampp\htdocs\aeroklub\templates\modals\formBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050b259943a1_85480726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b1a6dd9f6be1616845aa6a2cc0c9a23c989046b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\modals\\formBlock.html.tpl',
      1 => 1577373893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050b259943a1_85480726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <form id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4278910815e050b25983c79_98156920', 'id');
?>
-form"
        action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3752510695e050b2598fca9_72767431', 'action');
?>
" method="POST">
    <div class="modal-header">
        <h4 class="modal-title pull-left" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16371852575e050b25990c79_14004396', 'id');
?>
-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2931926045e050b25991bd1_33455796', 'title');
?>
</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>

    </div>
    <div class="modal-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16000855245e050b259929e6_86968183', 'body');
?>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Anuluj</button>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12060145835e050b25993506_55773113', 'acceptButton');
?>

    </div>
  </form>
<?php }
/* {block 'id'} */
class Block_4278910815e050b25983c79_98156920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_4278910815e050b25983c79_98156920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'action'} */
class Block_3752510695e050b2598fca9_72767431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_3752510695e050b2598fca9_72767431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'id'} */
class Block_16371852575e050b25990c79_14004396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_16371852575e050b25990c79_14004396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal-id<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_2931926045e050b25991bd1_33455796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2931926045e050b25991bd1_33455796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16000855245e050b259929e6_86968183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16000855245e050b259929e6_86968183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_12060145835e050b25993506_55773113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_12060145835e050b25993506_55773113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'acceptButton'} */
}
