<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 00:43:06
  from 'C:\xampp\htdocs\aeroklub\templates\modals\base.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e05458a94b059_57997059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06cd3ea2395546f1cc7f062ad97cb1086c98b1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\modals\\base.html.tpl',
      1 => 1577403784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e05458a94b059_57997059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- BEGIN OF MODAL WINDOW -->
<div class="modal fade" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6509958805e05458a947b05_06747258', 'modalid');
?>
"
     role="dialog"
     aria-labelledby="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12185572605e05458a949bc6_75320876', 'modalid');
?>
-title" aria-hidden="true">
     <div class="modal-dialog <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13101674215e05458a94a387_25775249', 'modalsize');
?>
">
        <div class="modal-content bg-dark">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9150724655e05458a94aa26_23653027', 'modalcontent');
?>

        </div>
     </div>
</div><!-- END OF MODAL WINDOW -->
<?php }
/* {block 'modalid'} */
class Block_6509958805e05458a947b05_06747258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalid' => 
  array (
    0 => 'Block_6509958805e05458a947b05_06747258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'modalid'} */
/* {block 'modalid'} */
class Block_12185572605e05458a949bc6_75320876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalid' => 
  array (
    0 => 'Block_12185572605e05458a949bc6_75320876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'modalid'} */
/* {block 'modalsize'} */
class Block_13101674215e05458a94a387_25775249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalsize' => 
  array (
    0 => 'Block_13101674215e05458a94a387_25775249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'modalsize'} */
/* {block 'modalcontent'} */
class Block_9150724655e05458a94aa26_23653027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modalcontent' => 
  array (
    0 => 'Block_9150724655e05458a94aa26_23653027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'modalcontent'} */
}
