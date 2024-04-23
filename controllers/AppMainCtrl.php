<?php
/**
 * Основной контроллер приложения
 * Запускается из index.зрз, проверяет какой контроллер передан и какой экшн передан
 
 * @author Andrey
*/
class AppMainCtrl extends AppController{    
    protected $MyCtrl=FALSE;
    protected $DefaultCtrl='DefaultCtrl';
    protected $MyAction;
    protected $DefaultAction='Index';
    
    public function actionIndex(){        
        if ($this->getController()){
            if ($this->getMyAction()){
                $newCtrl=new $this->MyCtrl();
                $newCtrl->getAction($this->MyAction);
                $newCtrl->run();                
            }else {                
                (new $this->MyCtrl)->run();
            }
        } 
    }
          
    public function getController(){
        if (isset($_GET['controller'])){
            $this->MyCtrl=$_GET['controller'];                    
        } else {
            $this->MyCtrl=$this->DefaultCtrl;
        }        
        return $this->MyCtrl;
    }

    public function getMyAction(){
        if (isset($_GET['action'])){
            $this->MyAction=$_GET['action'];            
        } else {            
            $this->MyAction=$this->DefaultAction;
        }
        
        return $this->MyAction;
    }
    
    
}
