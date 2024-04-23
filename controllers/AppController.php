<?php

abstract class AppController {
    protected $action; //название метода (action) который выполняет контроллер
    protected $defaultAction='index';
    protected $templateRoot=WORK_FOLDER.'/views';
    protected $useLayout=false; //по умолчанию всё с лэйаутом
    protected $userLayout='layouts/MainLayout'; // по умолчанию обычный лэйаут
    protected $ViewName='NewView';
    
    //основной метод для каждого контроллера
    public function run() {
        
        if (empty($this->action)){
            $this->action=$this->defaultAction;
        }
        
        $method='action'.ucfirst($this->action);
        
        if (!method_exists($this, $method)){
            header('Location: ../error.php');
        }
        
        $this->$method();
                
    }

    public function getAction($ActionName){
        $this->action=$ActionName;        
    }
    
    protected function render($name,$args=[]){//метод загрузки общего щаблона () и отображения в нём конкретной view
        if ($this->useLayout){
            echo $this->renderTemplate($this->userLayout,[                
                'title'=> $this->ViewName,
                'content'=>$this->renderTemplate($name, $args) //контент открываемой страницы - название нужной вью и массив аргументов для неё
            ]);
        }else{
            echo $this->renderTemplate($name, $args);
        }
    }

    protected function renderTemplate($name, $args=[]){ //метод получает имя шаблона и аргументы для отображения       
        extract($args);                         
        $templatePath="{$_SERVER['DOCUMENT_ROOT']}/{$this->templateRoot}/{$name}.php"; //формируем полное имя шаблона
        ob_start();
        require $templatePath; //подключаем шаблон по имени и он сразу отображает тот HTML который в нём        
        return ob_get_clean();        
    }
    
    
}
