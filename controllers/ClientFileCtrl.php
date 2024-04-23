<?php

/**
 * Дефолт-контроллер
 *
 * @author Andrey
 */
class ClientFileCtrl extends AppController{
    protected $Client=[];
    protected $ClientPas=[];
    protected $ClientPens=[];
    protected $ClientINN=[];
    protected $ClChat=[];
    
    public function actionIndex(){
        $this->getData();        
        $Params=[
            'Client'=>$this->Client,
            'ClientPas'=>$this->ClientPas,
            'ClientINN'=>$this->ClientINN,
            'ClientPens'=>$this->ClientPens,
            'ClChat'=>$this->ClChat,
        ];
        $this->render('ClientFile',$Params);
    }
    
    protected function getData(){
        $Model=new Client();
        $this->Client=$Model->getClient($_GET['ClCode']);
        $this->ClientPas=$Model->getClientPas($_GET['ClCode']);
        $this->ClientINN=$Model->getClientINN($_GET['ClCode']);
        $this->ClientPens=$Model->getClientPens($_GET['ClCode']);
        $this->ClChat=$Model->getClientChat($_GET['ClCode']);
    }
}
