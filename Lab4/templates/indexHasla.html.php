{include file="header.html.php"}

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
      <form class="form-horizontal" action="http://{$smarty.server.HTTP_HOST}{$subdir}Hasla/insert" method="POST" id="DodajHaslo">
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
{if isset($tablicaHasla)}
<table class="table">
  <thead>
    <tr>
      <th>Tytul</th><th>Hasło</th><th>Usun</th>
    </tr>
  </thead>

  {foreach $tablicaHasla as $haslo}
  <tr>
    <td>{$haslo['tytul']}</td>
    <td>{$haslo['haslo']}</td>
    <td><a href="http://{$smarty.server.HTTP_HOST}{$subdir}Grafik/delete/{$grafik['id']}" role="button">Usuń</a></td>
  </tr>
  {/foreach}
</table>
{/if}
{if isset($error)}
<strong>{$error}</strong>
{/if}

{include file="footer.html.php"}
