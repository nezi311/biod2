<?php
namespace Controllers;
class Hasla extends Controller
{

  public function index()
  {
    $data=array();
    $model = $this->getModel("Odblokuj");
    if($model)
    {
      //$data=$model->
    }
    $view = $this->getView('Odblokuj');
    $view->index();
  }
}
 ?>
