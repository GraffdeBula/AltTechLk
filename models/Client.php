<?php
/**
 * модель для получения данных клиента
 *
 * @author Andrey
 */
class Client {
    public function getClient($ClCode){
        $Sql="SELECT * FROM tblClients WHERE ClCode=?";
        return DB::getInstance()->FetchOne($Sql,[$ClCode]);
    }
    
    public function getClientPas($ClCode){
        $Sql="SELECT * FROM tblClDocuments WHERE ClCode=? AND ClDocName=?";
        return DB::getInstance()->FetchOne($Sql,[$ClCode,'паспорт']);
    }
    
    public function getClientINN($ClCode){
        $Sql="SELECT * FROM tblClDocuments WHERE ClCode=? AND ClDocName=?";
        return DB::getInstance()->FetchOne($Sql,[$ClCode,'ИНН']);
    }
    
    public function getClientPens($ClCode){
        $Sql="SELECT * FROM tblClDocuments WHERE ClCode=? AND ClDocName=?";
        return DB::getInstance()->FetchOne($Sql,[$ClCode,'СНИЛС']);
    }
    
    public function getClientPhone($ClCode){
        $Sql="SELECT * FROM tblClients WHERE ClCode=?";
        return DB::getInstance()->FetchOne($Sql,[$ClCode]);
    }
    
    public function getClientChat($ClCode){
        $Sql="SELECT * FROM tblClChat WHERE ClCode=? ORDER BY Id DESC";
        return DB::getInstance()->FetchAll($Sql,[$ClCode]);
    }
}
