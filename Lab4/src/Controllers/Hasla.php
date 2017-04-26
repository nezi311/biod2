<?php
namespace Controllers;
class Hasla extends Controller
{

  public function index()
  {
    //tworzy obiekt widoku i zleca wyświetlenie wszystkich kategorii
    //w widoku
    $view = $this->getView('Hasla');
    $view->index();
  }
  public function showone($id=null)
  {
    if($id !== null)
    {
      //tworzy obiekt widoku i zleca wyświetlenie wybranej kategorii
      $view = $this->getView('Hasla');
      $view->showone($id);
    }
    else
      $this->redirect('Hasla/');
  }

  public function delete($id)
  {

      if($_SESSION['role']<=0)
      {
        if($id !== null)
        {
          //za operację na bazie danych odpowiedzialny jest model
          //tworzymy obiekt modelu i zlecamy usunięcie kategorii
          $model=$this->getModel('Hasla');
                  if($model) {
              $data = $model->delete($id);
                      //nie przekazano komunikatów o błędzie
                  }
          //powiadamiamy odpowiedni widok, że nastąpiła aktualizacja bazy
          $this->redirect('Hasla/');
        }
        else
          $this->redirect('Hasla/');
      }
      else
        $this->redirect('Hasla/');
    }


    public function insert()
    {
      $model=$this->getModel('Hasla');
            if($model)
            {
              $data = $model->insert($_POST['title'],$_POST['password'],$_POST['password2']);
            }
            $this->redirect('Hasla/');
    }
}
 ?>
