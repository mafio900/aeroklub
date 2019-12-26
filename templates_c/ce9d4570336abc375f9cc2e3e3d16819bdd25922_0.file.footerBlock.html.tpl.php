<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 20:31:44
  from 'C:\xampp\htdocs\aeroklub\templates\footerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e050aa0139735_56701011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce9d4570336abc375f9cc2e3e3d16819bdd25922' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aeroklub\\templates\\footerBlock.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e050aa0139735_56701011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <!-- FOOTER -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11857954035e050aa0133ea7_57876966', 'footer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14967884605e050aa0134f53_67164072', 'javascript');
?>

    </body>
</html>
<?php }
/* {block 'footer'} */
class Block_11857954035e050aa0133ea7_57876966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11857954035e050aa0133ea7_57876966',
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
class Block_14967884605e050aa0134f53_67164072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_14967884605e050aa0134f53_67164072',
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
