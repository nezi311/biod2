<?php
	namespace Models;
	use \PDO;
	class Hasla extends Model
  {
		//model zwraca tablicę wszystkich kategorii
		public function getAll()
    {
            $data = array();
            if(!$this->pdo)
                $data['error'] .= 'Połączenie z bazą nie powidoło się! <br>';
            else
                try
                {
                    $autorzy = array();
                    $stmt = $this->pdo->query("SELECT *FROM hasla");
                    $grafik = $stmt->fetchAll();
                    $stmt->closeCursor();
                    if($grafik && !empty($grafik))
                        $data['hasla'] = $grafik;
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
            if($id === NULL)
                $data['error'] .= 'Nieokreślone id!';
            else if(!$this->pdo)
                $data['error'] .= 'Połączenie z bazą nie powidoło się!';
            else
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
            return $data;
		}
		//model dodaje wybraną kategorię

		public function insert($tytul,$haslo1,$haslo2)
    {
            $data = array();
          	if($tytul === NULL || $tytul === "")
              $data['error'] =$data['error'].'<br> Nieokreślony tytuł!';
            if($haslo1 === NULL || $haslo1 === "")
            	$data['error'] =$data['error'].'<br> Nieokreślone haslo1!';
            if($haslo2 === NULL || $haslo2 === "")
            	$data['error'] =$data['error'].'<br> Nieokreślone haslo2!';
						else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {

                    $stmt = $this->pdo->prepare('INSERT INTO `haslo` (`tytul`,`haslo`) VALUES (:tytul,:haslo)');
										$stmt->bindValue(':tytul', $tytul, PDO::PARAM_STR);

										$stmt->bindValue(':haslo', $dostepnyod, PDO::PARAM_STR);
                    $stmt->execute();
                    $stmt->closeCursor();
                }
                catch(\PDOException $e)
                {
                     $data['error'] =$data['error'].'<br> Błąd zapisu danych do bazy!';
                }
            return $data;
		}
	}
?>
