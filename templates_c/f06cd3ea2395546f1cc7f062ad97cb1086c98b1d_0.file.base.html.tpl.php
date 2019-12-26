<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:31:44
  from 'C:\xampp\htdocs\aeroklub\templates\modals\base.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050aa01214e0_73167602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06cd3ea2395546f1cc7f062ad97cb1086c98b1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\modals\\base.html.tpl',
      1 => 1577373798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050aa01214e0_73167602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- BEGIN OF MODAL WINDOW -->
<div class="modal fade" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10988373945e050aa011dc31_75701212', 'modalid');
?>
"
     tabindex="-1" role="dialog"
     aria-labelledby="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11220436095e050aa011ede1_80176591', 'modalid');
?>
-title" aria-hidden="true">
     <div class="modal-dialog <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9559971465e050aa011fc82_14575185', 'modalsize');
?>
">
        <div class="modal-content bg-dark">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16018235745e050aa01209f0_18875952', 'modalcontent');
?>

        </div>
     </div>
</div><!-- END OF MODAL WINDOW -->
<?php }
/* {block 'modalid'} */
class Block_10988373945e050aa011dc31_75701212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalid' => 
  array (
    0 => 'Block_10988373945e050aa011dc31_75701212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'modalid'} */
/* {block 'modalid'} */
class Block_11220436095e050aa011ede1_80176591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalid' => 
  array (
    0 => 'Block_11220436095e050aa011ede1_80176591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'modalid'} */
/* {block 'modalsize'} */
class Block_9559971465e050aa011fc82_14575185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalsize' => 
  array (
    0 => 'Block_9559971465e050aa011fc82_14575185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'modalsize'} */
/* {block 'modalcontent'} */
class Block_16018235745e050aa01209f0_18875952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalcontent' => 
  array (
    0 => 'Block_16018235745e050aa01209f0_18875952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'modalcontent'} */
}
