<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 20:52:16
  from 'C:\xampp\htdocs\lab10\templates\footerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df931f0063946_58320468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c310431f8cd8e05b14b90128bccfee4a07ab79ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\footerBlock.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df931f0063946_58320468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <!-- FOOTER -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9580851165df931f0060aa7_19498959', 'footer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7999199285df931f0061443_74379610', 'javascript');
?>

    </body>
</html>
<?php }
/* {block 'footer'} */
class Block_9580851165df931f0060aa7_19498959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9580851165df931f0060aa7_19498959',
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
class Block_7999199285df931f0061443_74379610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_7999199285df931f0061443_74379610',
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
