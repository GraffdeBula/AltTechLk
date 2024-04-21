<?php
/**
 *  функция для автоматичемской подгрузки классов
 * @author Andrey
 */

class Autoloader {
    protected $paths=[        
        UPPER_ROOT.'/app',
        UPPER_ROOT.'/controllers',                        
        UPPER_ROOT.'/models',               
    ];
    
    public function getClass($className){        
        foreach($this->paths as $path){            
            $fileName="{$path}/{$className}.php";            
            if (file_exists($fileName)){                
                include $fileName;                                
                break;
            } else {
                
            }
        }
    }
}
