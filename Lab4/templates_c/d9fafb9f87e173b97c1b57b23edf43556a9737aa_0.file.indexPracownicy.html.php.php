<?php
/* Smarty version 3.1.31, created on 2017-04-28 11:25:50
  from "/opt/lampp/htdocs/biod /Lab4/templates/indexPracownicy.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59030a9e14f8f4_78719948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9fafb9f87e173b97c1b57b23edf43556a9737aa' => 
    array (
      0 => '/opt/lampp/htdocs/biod /Lab4/templates/indexPracownicy.html.php',
      1 => 1493297836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_59030a9e14f8f4_78719948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-header">
	<h2>Lista pracowników</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th>Imie</th><th>Nazwisko</th><th>Dział</th><th>Stanowisko</th><th>Telefon</th><th>Login</th><th>Uprawnienia</th><th>Aktywny</th><th>Edytuj</th><th>Zmień stan aktywności</th><th>Resetuj hasło</th>
    </tr>
  </thead>
<?php if (isset($_smarty_tpl->tpl_vars['tablicaPracownicy']->value)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablicaPracownicy']->value, 'pracownik');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pracownik']->value) {
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['imie'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['nazwisko'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['dzial'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['stanowisko'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['telefon'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['login'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['uprawnienia'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pracownik']->value['aktywny'];?>
</td>
    <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Pracownicy/edit/<?php echo $_smarty_tpl->tpl_vars['pracownik']->value['id'];?>
" role="button">Edytuj</a></td>
    <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Pracownicy/zmienAktywnosc/<?php echo $_smarty_tpl->tpl_vars['pracownik']->value['id'];?>
" role="button">Zmień</a></td>
    <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Pracownicy/passReset/<?php echo $_smarty_tpl->tpl_vars['pracownik']->value['id'];?>
" role="button">Resetuj</a></td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }?>
</table>
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
