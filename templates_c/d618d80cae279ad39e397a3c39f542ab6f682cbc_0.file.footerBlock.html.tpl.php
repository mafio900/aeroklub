<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 22:18:33
  from 'C:\xampp\htdocs\lab10\templates\BaseClient\footerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df94629072b29_94197106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd618d80cae279ad39e397a3c39f542ab6f682cbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\BaseClient\\footerBlock.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df94629072b29_94197106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <!-- FOOTER -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6365777835df9462906fbe7_40405867', 'footer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3643149685df94629070538_19902867', 'javascript');
?>

    </body>
</html>
<?php }
/* {block 'footer'} */
class Block_6365777835df9462906fbe7_40405867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6365777835df9462906fbe7_40405867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="footer mt-auto py-3">
            <div class="container text-center">
                <span class="text-muted">Projekt ZPAI Bartosz Brzychciński</span>
            </div>
        </footer>
        <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript'} */
class Block_3643149685df94629070538_19902867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_3643149685df94629070538_19902867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (isset($_smarty_tpl->tpl_vars['jsFile']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jsFile']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
                    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"><?php echo '</script'; ?>
>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
    <?php
}
}
/* {/block 'javascript'} */
}
