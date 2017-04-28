<?php
	namespace Models;
	use \PDO;
	class Odblokuj extends Model
	{
		// ** Dawid Dominiak **//
    public function getAll()
    {
      $data = array();
      if(!$this->pdo)
          $data['error'] = 'Połączenie z bazą nie powidoło się!';
      else
          try
          {
              $stmt = $this->pdo->query("SELECT * FROM Odblokuj");
              $odblokuj = $stmt->fetchAll();
              $stmt->closeCursor();
              if($odblokuj && !empty($odblokuj))
                  $data['odblokuj'] = $odblokuj;
              else
                  $data['odblokuj'] = array();
          }
          catch(\PDOException $e)
          {
              $data['error'] = 'Błąd odczytu danych z bazy! ';
          }
      return $data;
    }

		public function getOne($kod)
		{
			$data = array();
			$blad=false;
			if(!$this->pdo)
					$data['error'] = 'Połączenie z bazą nie powidoło się!';
			if($kod === NULL || $kod === "")
			{
				$data['error'] = 'Nieokreślony KOD!';
				$blad=true;
			}
			if(!$blad)
			{
				try
				{
						$stmt = $this->pdo->prepare('DELETE FROM `Odblokuj` WHERE kod=:kod');
						$stmt -> bindValue(':kod',$kod,PDO::PARAM_STR);
						$odblokuj = $stmt -> execute();
						if($odblokuj && !empty($odblokuj))
								$data['odblokuj'] = $odblokuj;
						else
								$data['odblokuj'] = array();
				}
				catch(\PDOException $e)
				{
						$data['error'] = 'Błąd odczytu danych z bazy! ';
				}
			}
			return $data;
		}

		// ** Dawid Dominiak **//
		public function delete($kod)
		{
			$data = array();
				if($kod === NULL || $kod === "")
					$data['error'] = 'Nieokreślony KOD!';
				else
					try
					{
						$stmt = $this->pdo->prepare('DELETE FROM `Odblokuj` WHERE kod=:kod');
				    $stmt -> bindValue(':kod',$kod,PDO::PARAM_STR);
				    $wynik_zapytania = $stmt -> execute();
					}
					catch(\PDOException $e)
					{
						$data['error'] =$data['error'].'<br> Błąd wykonywania operacji usunięcia';
					}
				return $data;

		}


		// ** Dawid Dominiak **//
		public function insert($email,$kod)
		{
			$blad=false;
			$data = array();
			$data['error']="";
			if($email === null || $email === "")
			{
				$data['error'] .= 'Nieokreślony email! <br>';
				$blad=true;
			}
			if($kod === null || $kod === "")
			{
				$data['error'] .= 'Nieokreślone imię! <br>';
				$blad=true;
			}
			if(!$blad)
			{
				try
				{
					$stmt = $this->pdo->prepare('INSERT INTO `Odblokuj`(`email`,`kod`) VALUES (:email,:kod)');
			    $stmt -> bindValue(':kod',$kod,PDO::PARAM_STR);
					$stmt -> bindValue(':email',$email,PDO::PARAM_STR);
			    $wynik_zapytania = $stmt -> execute();
				}
				catch(\PDOException $e)
				{
					$data['error'] .='Błąd zapisu danych do bazy! <br>';
					return $data;
				}
		}
			return $data;
		}


		// ** Dawid Dominiak **//
		public function zmienAktywnosc($klucz)
		{
			$data = array();
			$data['error']="";
			$blad=false;
			if($klucz === NULL || $klucz === "")
			{
				$data['error'] = 'Nieokreślony klucz!';
				$blad=true;
			}
				if(!$blad)
				{

						try
						{
							$tempArray=array();
							$tempArray=$this->getOne($klucz);

							if(isset($tempArray['email']))
							{
								$stmt = $this->pdo->prepare('UPDATE `pracownicy` SET `aktywny`= :aktywny, `iloscniepoprawnychlogowan`=0 WHERE `email`=:email');
								$stmt -> bindValue(':email',$tempArray['email'],PDO::PARAM_STR);
								if($tempArray['pracownik'][0]['aktywny']==0)
								{
									$stmt -> bindValue(':aktywny',1,PDO::PARAM_INT);
								}
								else
								{
									$stmt -> bindValue(':aktywny',0,PDO::PARAM_INT);
								}
								$wynik_zapytania = $stmt -> execute();
								$data['error'].='Odblokowano konto! <br>';

								if($wynik_zapytania)
								{
									$this->delete($klucz);
								}

							}


						}
						catch(\PDOException $e)
						{
							if(isset($data['error']))
								$data['error'] =$data['error'].'<br> Błąd zapisu danych do bazy!';
							else
								$data['error'] ='<br> Błąd zapisu danych do bazy!';
						}

				}
				return $data;
		}

  }

?>
