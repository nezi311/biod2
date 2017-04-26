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
			if($result['error'] ==="")
				$this->redirect('');
			else
				$this->logform($result);
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
