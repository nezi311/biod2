<?php
/* Smarty version 3.1.31, created on 2017-04-26 23:14:06
  from "E:\xampp\htdocs\biod\Lab4\templates\indexHasla.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59010d9e0dc8f0_89616816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58063fb3a0ce2c2f80b666a6f11f6fb3541ac2c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\biod\\Lab4\\templates\\indexHasla.html.php',
      1 => 1493241241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_59010d9e0dc8f0_89616816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-header">
	<h2>Lista haseł</h2>
</div>
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#formAdd">Dodaj hasło</a>
      </h4>
    </div>
    <div id="formAdd" class="panel-collapse collapse">
      <br>
      <form class="form-horizontal" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Hasla/insert" method="POST" id="DodajHaslo">
				<div class="form-group">
					<label class="control-label col-sm-2" for="title">Tytuł</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="title" name="title" >
					</div>
				</div>
				<div class="form-group">
          <label class="control-label col-sm-2" for="password">Hasło</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" >
          </div>
        </div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="password2">Powtórz hasło</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password2" name="password2" >
					</div>
				</div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Dodaj</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['tablicaHasla']->value)) {?>
<table class="table">
  <thead>
    <tr>
      <th>Tytul</th><th>Hasło</th><th>Usun</th>
    </tr>
  </thead>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablicaHasla']->value, 'haslo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['haslo']->value) {
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['haslo']->value['tytul'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['haslo']->value['haslo'];?>
</td>
    <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Grafik/delete/<?php echo $_smarty_tpl->tpl_vars['grafik']->value['id'];?>
" role="button">Usuń</a></td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</table>
<?php }
if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
