<?php
/* Smarty version 3.1.31, created on 2017-01-26 19:34:28
  from "E:\xampp\htdocs\Aplikacja_PO\templates\addPracownik.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588a4134089504_91217519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3abe1c44747bc364e887a983bad9992ed5c5279a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Aplikacja_PO\\templates\\addPracownik.html.php',
      1 => 1485455664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_588a4134089504_91217519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-header">
  <h1>Dodaj Pracownika</h1>
</div>

<div class="container">
  <form class="form-horizontal" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Pracownicy/insert" method="POST" id="DodajPracownika">
    <div class="form-group">
      <label class="control-label col-sm-2" for="imie">Imię :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="imie" name="imie" placeholder="Wprowadz imię">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nazwisko">Nazwisko :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Wprowadz nazwisko">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dzial">Dział :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dzial" name="dzial" placeholder="Wprowadz dzial">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="stanowisko">Stanowisko :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="stanowisko" name="stanowisko" placeholder="Wprowadz stanowisko">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefon">Telefon :</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="telefon" name="telefon" placeholder="Wprowadz nr telefonu">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="login">Login :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadz login">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="haslo">Haslo :</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="haslo" name="haslo" placeholder="Wprowadz hasło">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="uprawnienia">Uprawnienia :</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="uprawnienia" name="uprawnienia" placeholder="0 - 5" min="0" max="5" value="0">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Dodaj</button>
      </div>
    </div>
  </form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
