<?php
	namespace Models;
	use \PDO;
	class Hasla extends Model
  {


		public function zaszyfruj($tekst)
		{
			$klucz=str_split("MysZka");
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
					//$zaszyfrowanyTekst.=$tablicaDoSzyfrowania[$i][$j];
					$zaszyfrowanyTekst.=chr(ord($klucz[$i%sizeof($klucz)])+ord($tablicaDoSzyfrowania[$i][$j]));
				}

				$i++;
				if($i>=$rozmiar)
					break;

				for($j=($rozmiar-1);$j>=0;$j--)
				{
					//$zaszyfrowanyTekst.=$tablicaDoSzyfrowania[$i][$j];
					$zaszyfrowanyTekst.=chr(ord($klucz[$i%sizeof($klucz)])+ord($tablicaDoSzyfrowania[$i][$j]));
				}
				$i++;
			}



			return $zaszyfrowanyTekst;
		}


		public function odszyfruj($tekst)
		{
			$klucz=str_split("MysZka");
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
					//$zaszyfrowanyTekst.=$tablicaDoSzyfrowania[$i][$j];
					$zaszyfrowanyTekst.=chr(ord($tablicaDoSzyfrowania[$i][$j])-ord($klucz[$i%sizeof($klucz)]));
				}

				$i++;
				if($i>=$rozmiar)
					break;

				for($j=($rozmiar-1);$j>=0;$j--)
				{
					//$zaszyfrowanyTekst.=$tablicaDoSzyfrowania[$i][$j];
					$zaszyfrowanyTekst.=chr(ord($tablicaDoSzyfrowania[$i][$j])-ord($klucz[$i%sizeof($klucz)]));
				}
				$i++;
			}
			return $zaszyfrowanyTekst;
		}
		//model zwraca tablicę wszystkich kategorii
		public function getAll()
    {
            $data = array();
            if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się! <br>';
            else
                try
                {
                    $stmt = $this->pdo->query("SELECT * FROM hasla");
                    $hasla = $stmt->fetchAll();
                    $stmt->closeCursor();

										foreach($hasla as &$var_z)
										{
											$odszyfruj = $this->odszyfruj($var_z['haslo']);
											$var_z['haslo'] = $odszyfruj;
										}


                    if($hasla && !empty($hasla))
                        $data['hasla'] = $hasla;
                    else
                        $data['hasla'] = array();


                }
                catch(\PDOException $e)
                {
                    $data['error'] .= 'Błąd odczytu danych z bazy! <br>';
                }
            return $data;
		}

		public function delete($id)
    {
            $data = array();
						$blad=false;
            if($id === NULL)
						{
							$data['error'] .= 'Nieokreślone id! <br>';
							$blad=true;
						}
            if(!$this->pdo)
						{
							$data['error'] .= 'Połączenie z bazą nie powidoło się! <br>';
							$blad=true;
						}
            if(!$blad)
						{
	                try
	                {
	                    $stmt = $this->pdo->prepare('DELETE FROM `hasla` WHERE `id`=:id');
	                    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
	                    $result = $stmt->execute();
	                    $rows = $stmt->rowCount();
	                    $stmt->closeCursor();
	                    if(!$result && $rows <= 0)
	                    $data['error'] .= "Nie znaleziono hasla o id = $id!";
	                }
	                catch(\PDOException $e)
	                {
	                     $data['error'] .= 'Błąd odczytu danych z bazy!';
	                }
						}
						return $data;
		}
		//model dodaje wybraną kategorię

		public function insert($tytul,$haslo1,$haslo2)
    {
            $data = array();
						$blad=false;
          	if($tytul == NULL || $tytul == "")
						{
							$data['error'] .='<br> Nieokreślony tytuł! <br>';
							$blad=true;
						}
            if($haslo1 == NULL || $haslo1 == "")
						{
            	$data['error'] .='<br> Nieokreślone haslo1! <br>';
							$blad=true;
						}
            if($haslo2 == NULL || $haslo2 == "")
						{
            	$data['error'] .='<br> Nieokreślone haslo2! <br>';
							$blad=true;
						}
						if(strcmp($haslo1,$haslo2)!=0)
						{
							$data['error'] .='<br> Hasła nie są takie same! <br>';
							$blad=true;
						}
						if(!$this->pdo)
						{
							$data['error'] .= 'Połączenie z bazą nie powidoło się! <br>';
							$blad=true;
						}
            if(!$blad)
						{
	                try
	                {

	                    $stmt = $this->pdo->prepare('INSERT INTO `hasla` (`tytul`,`haslo`) VALUES (:tytul,:haslo)');
											$stmt->bindValue(':tytul', $tytul, PDO::PARAM_STR);

											$hashowanie = $this->zaszyfruj($haslo1);

											$stmt->bindValue(':haslo', $hashowanie, PDO::PARAM_STR);
	                    $stmt->execute();
	                    $stmt->closeCursor();
	                }
	                catch(\PDOException $e)
	                {
	                     $data['error'] =$data['error'].'<br> Błąd zapisu danych do bazy!';
	                }

						}
						return $data;
		}
	}
?>
