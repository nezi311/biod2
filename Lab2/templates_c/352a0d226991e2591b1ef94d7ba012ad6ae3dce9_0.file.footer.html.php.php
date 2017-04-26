<?php
/* Smarty version 3.1.31, created on 2017-03-07 18:15:15
  from "/opt/lampp/htdocs/projekt/templates/footer.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58beeaa31d8246_21607893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352a0d226991e2591b1ef94d7ba012ad6ae3dce9' => 
    array (
      0 => '/opt/lampp/htdocs/projekt/templates/footer.html.php',
      1 => 1488894250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58beeaa31d8246_21607893 (Smarty_Internal_Template $_smarty_tpl) {
?>
      </div>
    </div>
  </div>
</body>
<div class="panel-footer">
    <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/search_autocomplete.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.cookie.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <p class="text-muted">
    Zaawansowane programowanie aplikacji internetowych - MVC
    </p>
</div>
</html>
<?php }
}
