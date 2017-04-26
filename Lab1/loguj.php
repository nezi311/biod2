<?php
$login= $_GET["login"];
$haslo= $_GET["haslo"];

if(strcmp($login,"root")==0 && strcmp($haslo,"wd4")==0)
{
  //header('Location: http://127.0.0.1/biod%20/Lab1/zalogowany.php');
  print("<p>");
    print("Witaj");
  print("</p>");
}
else
{
  //header('Location: http://127.0.0.1/biod%20/Lab1/niezalogowany.php');
  print("<p>");
    print("Haslo lub login niepoprawne");
  print("</p>");
}

 ?>
