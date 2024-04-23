<?php

/**
 * Description of logger
 *
 * @author Andrey
 */
class Logger {    
    protected $FileName;    

    public function __construct($LogType=''){
        $this->fileName=LOG_ROOT.date("Ymd")."log".$LogType.".txt";                
    }

    public function logToFile($info){
    	
        file_put_contents($this->fileName, date("Y-m-d H:i:s")." --> ".$info."\r\n", FILE_APPEND);
        file_put_contents($this->fileName, "\r\n", FILE_APPEND);
    }

}
