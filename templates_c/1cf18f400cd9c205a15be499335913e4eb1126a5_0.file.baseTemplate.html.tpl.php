<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-17 20:52:16
  from 'C:\xampp\htdocs\lab10\templates\baseTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df931f000d851_72484625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf18f400cd9c205a15be499335913e4eb1126a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lab10\\templates\\baseTemplate.html.tpl',
      1 => 1576162160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./headerBlock.html.tpl' => 1,
    'file:./navbarBlock.html.tpl' => 1,
    'file:./bodyBlock.html.tpl' => 1,
    'file:./footerBlock.html.tpl' => 1,
  ),
),false)) {
function content_5df931f000d851_72484625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./headerBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbarBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./bodyBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./footerBlock.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
