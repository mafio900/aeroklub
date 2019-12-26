<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:31:44
  from 'C:\xampp\htdocs\aeroklub\templates\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050aa00fead9_16705687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f632daca4faf4be5992b7aa0d8bc7e8b3f4273b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\bodyBlock.html.tpl',
      1 => 1576192739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050aa00fead9_16705687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="page-header">
            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3294991305e050aa00fd2d1_46924807', 'title');
?>
</h1>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2402757355e050aa00fe221_61945375', 'body');
?>

    </div>
</main>
<?php }
/* {block 'title'} */
class Block_3294991305e050aa00fd2d1_46924807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3294991305e050aa00fd2d1_46924807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ZPAI<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2402757355e050aa00fe221_61945375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2402757355e050aa00fe221_61945375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
