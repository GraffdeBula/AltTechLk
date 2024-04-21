<?php

/**
 * Description of logger
 *
 * @author Andrey
 */
class Logger {
    const FILE_PATH='/'.WORK_FOLDER.'/log/';
    protected $FileName;    

    public function __construct($LogType=''){
        $this->fileName=$_SERVER["DOCUMENT_ROOT"].self::FILE_PATH.date("Ymd")."log".$LogType.".txt";                
    }

    public function logToFile($info){
    	#$add=json_encode($info['leads']['add']);
    	#$addSubStr=explode('","',$add,2);
    	#$addSubStr=explode('":"',$addSubStr[0],2);
    	#$toLog=implode(';',$toLog);
    	#file_put_contents($this->fileName, date("Y-m-d H:i:s")." --> ".$add."\r\n", FILE_APPEND);
        #file_put_contents($this->fileName, date("Y-m-d H:i:s")." --> ".$addSubStr[0]."\r\n", FILE_APPEND);
        #file_put_contents($this->fileName, date("Y-m-d H:i:s")." --> ".$addSubStr[1]."\r\n", FILE_APPEND);
        file_put_contents($this->fileName, date("Y-m-d H:i:s")." --> ".$info."\r\n", FILE_APPEND);
        file_put_contents($this->fileName, "\r\n", FILE_APPEND);
    }

}
