<?php
	namespace Views;
// ** Dawid Dominiak **//
	class Access extends View {

		// private static $messages = array(
		// 	1 => 'Podane dane są niepoprawne!',
		// 	100 => 'Nieokreślony błąd!'
		// );

		//wyświetla formularz do logowania
		public function logform($result = null){
			$this->set('customScript', 'logform');

			//d($result);
			if(isset($result['error']))
			{
				$this->set('error',$result['error']);
			}
				$this->render('logform');
		}
	}
