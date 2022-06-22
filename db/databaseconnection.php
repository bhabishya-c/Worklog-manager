<?php
// namespace connect\db;
class database{
    public static function connection(){
        try{
            return new PDO("mysql:host=localhost;dbname=worklog manager","root","");        
        }
        catch(PDOException $e){
            $e->getMessage();
        }
    }
}
?>
