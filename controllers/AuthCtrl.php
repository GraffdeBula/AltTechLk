<?php

/**
 * контроллер авторизации
 *
 * @author Andrey
 */
class AuthCtrl extends AppController{
        
    public function actionIndex(){
        
        if (($_GET['ClLogin']=='10002')&&($_GET['ClPass']=='10002')){
            header("Location: index.php?controller=ClientFileCtrl&ClCode={$_GET['ClLogin']}");
        } else {            
            $this->render('Authorization',['authresult'=>'Неверный логин и/или пароль']);
        }
    }
}
