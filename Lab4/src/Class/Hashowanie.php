<?php
namespace Class;

class Hashowanie
{
  public function zaszyfruj($tekst)
  {
    $zaszyfrowanyTekst="";

    //---------------------------------------------------
    //-- Przygotowanie narzędzia do szyfrowania ciągu znaków
    //---------------------------------------------------
    $dl = sqrt(strlen($tekst));
    $rozmiar=0;

    if($dl-(floor($dl))>0)
    {
      $rozmiar=floor(++$dl);
    }
    else
    {
      $rozmiar=floor($dl);
    }
    $tablicaCharow = str_split($tekst);

    $licznik=0;
    $koniec=sizeof($tablicaCharow);

    $tablicaDoSzyfrowania = array(); // array of columns
    for($c=0; $c<$rozmiar; $c++)
    {
      $tablicaDoSzyfrowania[$c] = array(); // array of cells for column $c
      for($r=0; $r<$rozmiar; $r++)
      {
        if($licznik<$koniec)
          $tablicaDoSzyfrowania[$c][$r] = $tablicaCharow[$licznik++];
        else
          $tablicaDoSzyfrowania[$c][$r]=' ';
      }
    }

    //-------------------------------------------------
    //-- Przygotowania zakończone
    //------------------------------------------------

    $i = 0;
    while($i<$rozmiar)
    {
      for($j=0; $j<$rozmiar; $j++)
      {
        $zaszyfrowanyTekst.=$tablicaDoSzyfrowania[$i][$j];
      }

      $i++;
      if($i>=$rozmiar)
        break;

      for($j=($rozmiar-1);$j>=0;$j--)
      {
        $zaszyfrowanyTekst.=$tablicaDoSzyfrowania[$i][$j];
      }
      $i++;
    }



    return $zaszyfrowanyTekst;
  }

}
?>
