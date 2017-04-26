<?php
	namespace Models;
	use \PDO;
	class AccessRoles extends Model
	{
		public function login($login, $password, $cap)
		{
			$data=array();
			$data['error']="";

			//tutaj powinno nastąpić weryfikacja podanych danych
			//z tymi zapisanymi w bazie
      if(!$this->pdo)
      {
				$data['error'].='Połączenie z bazą nie powidoło się! <br>';
			}
			if($login=="" || $login===null)
			{
				$data['error'].='Nie podano loginu! <br>';
			}
			if($password=="" || $password===null)
			{
				$data['error'].='Nie podano hasła! <br>';
			}
			if($cap=="" || $cap===null)
			{
				$data['error'].='Wypełnij captche <br>';
			}
      else
      {
							//echo($cap);
							$secretKey = "6LejJBoUAAAAAH0LLxW6mkjqxLu2vp1Ps4bVTF_C";
			 				$ip = $_SERVER['REMOTE_ADDR'];


							$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$cap."&remoteip=".$ip);
			        $responseKeys = json_decode($response,true);
			        if(intval($responseKeys["success"]) !== 1)
							{
			          $data['error'].='Captcha wypełniona nieprawidłowo <br>';
			        }
							else
							{


					        try
					        {
					          $user=array();
					          $stmt = $this->pdo->prepare('SELECT * FROM `pracownicy` WHERE `login`=:login');
					          $stmt->bindValue(':login', $login, PDO::PARAM_STR);
					          $result = $stmt->execute();
					          $user = $stmt->fetchAll();
					          $stmt->closeCursor();

					          //d($user[0]);

										if(!$user)
										{
											$data['error'].='Błędny login lub hasło! <br>';
											return $data;
											//return 1
										}
										else
										{
											if(strcmp($password, $user[0]['haslo'])===0)
											{
												\Tools\AccessRoles::login($login,$user[0]['uprawnienia']);
												//d($_SESSION);
												//return 0;
												return $data;
											}
											else
											{
												//return 1
												return $data;
											}
										}


					        }
									catch(\PDOException $e)
									{
										$data['error'].='Błąd odczytu danych z bazy! <br>';
										//return 1;
										return $data;
									}

									//return 1;
									return $data;
					}
      }

			return $data;
		}
		public function logout()
		{
			\Tools\AccessRoles::logout();
		}
	}
