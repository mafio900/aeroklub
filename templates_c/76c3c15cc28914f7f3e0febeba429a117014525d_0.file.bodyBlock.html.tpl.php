<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 22:18:33
  from 'C:\xampp\htdocs\lab10\templates\BaseClient\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df94629064f07_33985482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c3c15cc28914f7f3e0febeba429a117014525d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\BaseClient\\bodyBlock.html.tpl',
      1 => 1576192739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df94629064f07_33985482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="page-header">
            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2635768615df94629064041_96074524', 'title');
?>
</h1>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_997364285df94629064984_57578127', 'body');
?>

    </div>
</main>
<?php }
/* {block 'title'} */
class Block_2635768615df94629064041_96074524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2635768615df94629064041_96074524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ZPAI<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_997364285df94629064984_57578127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_997364285df94629064984_57578127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
