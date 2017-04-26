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
            if(isset($data['hasla']))
                 $this->set('tablicaHasla', $data['hasla']);
        }


        if(isset($data['error']))
            $this->set('error', $data['error']);
        //przetworzenie szablonu do wyświetlania listy kategorii
        $this->render('indexHasla');
    }
  }
?>
