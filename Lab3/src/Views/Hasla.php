<?php
	namespace Views;

	class Hasla extends View
	{
    public function index()
    {
        $model = $this->getModel('Hasla');
        if($model)
        {
            $data = $model->getAll();
            if(isset($data['Hasla']))
                 $this->set('tablicaHasla', $data['Hasla']);
        }
        $model = $this->getModel('Pracownicy');

        if($model)
        {
            $data = $model->getAll();
            if(isset($data['pracownicy']))
                 $this->set('tablicaPracownicy', $data['pracownicy']);
        }


        if(isset($data['error']))
            $this->set('error', $data['error']);
        //przetworzenie szablonu do wyświetlania listy kategorii
        $this->render('indexHasla');
    }
  }
?>
