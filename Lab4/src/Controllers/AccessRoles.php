<?php
	namespace Controllers;

  class AccessRoles extends Controller
  {
		//wyświetla formularz do logowania
		public function logform($result = null)
		{
			$view=$this->getView('AccessRoles');
			$view->logform($result);
		}
		//zalogowuje do systemu
		public function login()
		{
			$model=$this->getModel('AccessRoles');
			//$result = $model->login($_POST['login'],md5($_POST['password']),$_POST['g-recaptcha-response']);
			$result = $model->login($_POST['login'],$_POST['p1'], $_POST['p2'], $_POST['p3'], $_POST['p4'], $_POST['p5'], $_POST['p6'], $_POST['p7'], $_POST['p8'], $_POST['p9'], $_POST['p10'], $_POST['p11'], $_POST['p12'], $_POST['p13'], $_POST['p14'], $_POST['p15'], $_POST['p16'], $_POST['p17'], $_POST['p18'], $_POST['p19'], $_POST['p20'], $_POST['g-recaptcha-response']);
			//if($result === 0)
			if(isset($result['datazmianyhasla']))
				$this->redirect('Pracownicy/passReset');
			else
			{
				if($result['error'] ==="")
				{
					$this->redirect('');
				}
				else
				{
					if(isset($result['email']))
					{
						//procedura generowania kodu do odblokowania konta
						$tablicaznakow=array();
						for($i=65;$i<=90;$i++)
						{
						  $tablicaznakow[]=chr($i);
						}
						for($i=97;$i<=122;$i++)
						{
						  $tablicaznakow[]=chr($i);
						}
						for($i=0;$i<=9;$i++)
						{
						  $tablicaznakow[]=$i;
						}
						$kod="";

						for($i=0;$i<50;$i++)
						{
							$kod.=$tablicaznakow[rand(0,sizeof($tablicaznakow)-1)];
						}


						$model2 = $this->getModel("Odblokuj");
						d($model2->insert($result['email'],$kod));

						//mailto

						/*
							$to = "root@localhost.com";
							$subject = "Hi!";
							$body="test".PHP_EOL;
							$body.="Hello World. If all went well then you can see this mail in your Inbox".PHP_EOL;
							$body.="Regards".PHP_EOL;
							$body.="Idrish Laxmidhar".PHP_EOL;
							$body.="http://i-tech-life.blogspot.com".PHP_EOL;

							$headers = "From: root@localhost.com";

							if (mail($to, $subject, $body, $headers))
							{
								echo("Message successfully sent!");
							}
							else
							{
							echo("Message delivery failed...");
							}
						*/

					}

					$this->logform($result);
				}
			}

		}

		//wylogowuje z systemu
		public function logout()
		{
			$model=$this->getModel('AccessRoles');
			$model->logout();
			$this->redirect('');
		}
  }
  ?>
