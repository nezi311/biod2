<?php
/* Smarty version 3.1.31, created on 2017-04-27 18:07:29
  from "E:\xampp\htdocs\biod\Lab4\templates\logform.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590217413a4f15_41602660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4d8aef5021fd4fbd669ff015dbfae4d30fc080f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\biod\\Lab4\\templates\\logform.html.php',
      1 => 1493309245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590217413a4f15_41602660 (Smarty_Internal_Template $_smarty_tpl) {
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
css/jquery-ui.min.css">
        <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/bootstrap.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


        <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/custom.css">
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        function get_action(form)
        {
            var v = grecaptcha.getResponse();
            if(v.length == 0)
            {
                document.getElementById('alert').innerHTML="Nie możesz zostawić pustej Captcha";
                return false;
            }
            else
            {
                //document.getElementById('alert').innerHTML="Captcha zweryfikowana";
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
AccessRoles/login" method="POST" onsubmit="return get_action(logform)">
  <div class="form-group">
    <label for="name">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Wprowadź login">
  </div>
  <div class="form-group">
    <label for="p1">Hasło</label>
  </div>
  <div class="form-group">
  <!--  <input type="password" class="form-control" id="password" name="password" placeholder="Wprowadź hasło"> -->
      <input type="password" class="form-control pole" id="p1" name="p1" maxlength="1">
      <input type="password" class="form-control pole" id="p2" name="p2" maxlength="1">
      <input type="password" class="form-control pole" id="p3" name="p3" maxlength="1">
      <input type="password" class="form-control pole" id="p4" name="p4" maxlength="1">
      <input type="password" class="form-control pole" id="p5" name="p5" maxlength="1">
      <input type="password" class="form-control pole" id="p6" name="p6" maxlength="1">
      <input type="password" class="form-control pole" id="p7" name="p7" maxlength="1">
      <input type="password" class="form-control pole" id="p8" name="p8" maxlength="1">
      <input type="password" class="form-control pole" id="p9" name="p9" maxlength="1">
      <input type="password" class="form-control pole" id="p10" name="p10" maxlength="1">
      <input type="password" class="form-control pole" id="p11" name="p11" maxlength="1">
      <input type="password" class="form-control pole" id="p12" name="p12" maxlength="1">
      <input type="password" class="form-control pole" id="p13" name="p13" maxlength="1">
      <input type="password" class="form-control pole" id="p14" name="p14" maxlength="1">
      <input type="password" class="form-control pole" id="p15" name="p15" maxlength="1">
      <input type="password" class="form-control pole" id="p16" name="p16" maxlength="1">
      <input type="password" class="form-control pole" id="p17" name="p17" maxlength="1">
      <input type="password" class="form-control pole" id="p18" name="p18" maxlength="1">
      <input type="password" class="form-control pole" id="p19" name="p19" maxlength="1">
      <input type="password" class="form-control pole" id="p20" name="p20" maxlength="1">
  </div>
  <div class="form-group">
    <div class="g-recaptcha" id="captcha" data-sitekey="6LejJBoUAAAAAKYypsjyuxBjmSFCSDLfHM4lO_DI"></div>
  </div>
  <br>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Zaloguj</button>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  <div class="form-group">
    <div class="alert alert-danger" role="alert" id="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  </div>
  <?php }?>
</form>
<?php if (!isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  <div class="alert alert-danger" role="alert" id="alert1"></div>
<?php }
echo '<script'; ?>
>
  var r = Math.floor(Math.random() * 10)+4;

  var ids = ["p1","p2","p3","p4","p5","p6","p7","p8","p9","p10","p11","p12","p13","p14","p15","p16","p17","p18","p19","p20"];
  //var ids = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]
  //document.getElementById('alert1').innerHTML=""+r;
  var ids2=["test"];
  for(var i=0; i<r;i++)
  {
      var zmienna = Math.floor(Math.random() * ids.length);
      //document.getElementById('alert1').innerHTML="zmienna :"+ "\'"+ids[zmienna]+"\'"+" r = "+r+", zmienna = "+zmienna;
      document.getElementById(ids[zmienna]).readOnly = true;


      //document.getElementById(ids[zmienna]).disabled = true;
      ids.splice(zmienna,1);
  }
  var txt ="";
  for(var i=1;i<=20;i++)
  {
    txt+="$p"+i+", ";
  }
  //document.getElementById('alert1').innerHTML=txt;

<?php echo '</script'; ?>
>
</div>
</html>
<?php }
}
