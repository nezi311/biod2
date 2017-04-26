<?php
	namespace Models;
	use \PDO;
	class AccessRoles extends Model
	{
		public function login($login, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $cap)
		{
			//tutaj powinno nastąpić weryfikacja podanych danych
			//z tymi zapisanymi w bazie

			$data=array();
			$data['error']="";

			if(!$this->pdo)
      {
				$data['error'].='Połączenie z bazą nie powidoło się! <br>';
			}
			if($login=="" || $login===null)
			{
				$data['error'].='Nie podano loginu! <br>';
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
											$data['error'].="Błędny login lub hasło! <br>";
											return $data;
											//return 1
										}
										else
										{
											$charArrayPassword = array(); //str_split
											$charArrayPassword = str_split($user[0]['haslo']); // podział hasla z bazy na tablice
											$hasloFormularz = array();
											$hasloFormularz[0]=$p1;
											$hasloFormularz[1]=$p2;
											$hasloFormularz[2]=$p3;
											$hasloFormularz[3]=$p4;
											$hasloFormularz[4]=$p5;
											$hasloFormularz[5]=$p6;
											$hasloFormularz[6]=$p7;
											$hasloFormularz[7]=$p8;
											$hasloFormularz[8]=$p9;
											$hasloFormularz[9]=$p10;
											$hasloFormularz[10]=$p11;
											$hasloFormularz[11]=$p12;
											$hasloFormularz[12]=$p13;
											$hasloFormularz[13]=$p14;
											$hasloFormularz[14]=$p15;
											$hasloFormularz[15]=$p16;
											$hasloFormularz[16]=$p17;
											$hasloFormularz[17]=$p18;
											$hasloFormularz[18]=$p19;
											$hasloFormularz[19]=$p20;

											//d($charArrayPassword);
											//d($hasloFormularz);

											$blad=false;
											for($i=0;$i<count($charArrayPassword);$i++)
											{
												if($hasloFormularz[$i]!="")
												{
													if(strcmp($charArrayPassword[$i],$hasloFormularz[$i]==0))
													{

													}
													else
													{
															$blad=true;
													}
												}
											}

												if(!$blad)
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
										/*

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

										*/

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
