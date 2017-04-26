<?php
/* Smarty version 3.1.31, created on 2017-04-07 11:18:14
  from "/opt/lampp/htdocs/biod /Lab3/templates/index.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e75956940014_44314083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b3c4a0142a48ce1f57071b83b453f85d83b55e' => 
    array (
      0 => '/opt/lampp/htdocs/biod /Lab3/templates/index.html.php',
      1 => 1490346189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_58e75956940014_44314083 (Smarty_Internal_Template $_smarty_tpl) {
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
