<?php
/* Smarty version 3.1.31, created on 2017-04-26 22:19:08
  from "E:\xampp\htdocs\biod\Lab3\templates\index.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590100bc2ff677_60389239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0361ad81be6008fb1249bb8001b7040a62d6c2' => 
    array (
      0 => 'E:\\xampp\\htdocs\\biod\\Lab3\\templates\\index.html.php',
      1 => 1493235619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_590100bc2ff677_60389239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
	<h1>To jest index</h1>
	<h2><?php echo d($_SESSION);?>
</h2>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
