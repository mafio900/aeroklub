<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 20:52:16
  from 'C:\xampp\htdocs\lab10\templates\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df931f00520e4_67943098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd29ca9e9623a35899812f02b394023af5c683e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\bodyBlock.html.tpl',
      1 => 1576192739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df931f00520e4_67943098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="page-header">
            <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6422785185df931f00511b1_47181383', 'title');
?>
</h1>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7710051255df931f0051b72_10857593', 'body');
?>

    </div>
</main>
<?php }
/* {block 'title'} */
class Block_6422785185df931f00511b1_47181383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6422785185df931f00511b1_47181383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ZPAI<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7710051255df931f0051b72_10857593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7710051255df931f0051b72_10857593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
