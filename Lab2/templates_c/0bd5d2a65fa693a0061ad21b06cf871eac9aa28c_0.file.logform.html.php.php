<?php
/* Smarty version 3.1.31, created on 2017-03-23 22:37:58
  from "E:\xampp\htdocs\biod\Lab2\templates\logform.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d44036c9ec89_90431572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd5d2a65fa693a0061ad21b06cf871eac9aa28c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\biod\\Lab2\\templates\\logform.html.php',
      1 => 1490305069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d44036c9ec89_90431572 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>SRPH</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Latest compiled and minified JavaScript -->
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-latest.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!-- css -->
          <!-- Custom css -->
          <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/custom.css">
          <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/jquery-ui.min.css">
        <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/bootstrap.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js">
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        function get_action(form)
        {
            var v = grecaptcha.getResponse();
            if(v.length == 0)
            {
                document.getElementById('alert').innerHTML="You can't leave Captcha Code empty";
                return false;
            }
            else
            {
                document.getElementById('alert').innerHTML="Captcha completed";
                return true;
            }
        }

        <?php echo '</script'; ?>
>

    </head>
<div class="container">
<div class="page-header">
  <h2>Zaloguj się do systemu</h2>
</div>
<form id="logform" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
AccessRoles/login" method="post" onsubmit="return get_action(logform)">
   <div id="html_element"></div>
  <div class="form-group">
    <label for="name">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadź login">
  </div>
  <div class="form-group">
    <label for="name">Hasło</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło">
  </div>
  <div class="alert alert-danger collapse" role="alert"></div>
    <div class="g-recaptcha" id="captcha" data-sitekey="6LejJBoUAAAAAKYypsjyuxBjmSFCSDLfHM4lO_DI"></div>
  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
	  <div class="alert alert-danger" id="alert" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  <button type="submit" class="btn btn-default">Zaloguj</button>
</form>

</div>
</html>
<?php }
}
