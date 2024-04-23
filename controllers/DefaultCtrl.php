<?php

/**
 * Дефолт-контроллер
 *
 * @author Andrey
 */
class DefaultCtrl extends AppController{
        
    public function actionIndex(){
        echo('<h1>Здесь пока ничего не происходит</h1>');
        echo('<h2>Здесь пока ничего не происходит</h2>');
        echo('<h3>Здесь пока ничего не происходит</h3>');
        echo('<h4>Здесь пока ничего не происходит</h4>');
        echo('<h5>Здесь пока ничего не происходит</h5>');
        
        $this->render('Authorization',['authresult'=>'']);
    }
}
