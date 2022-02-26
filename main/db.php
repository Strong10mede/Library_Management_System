<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=127.0.0.1:3307; dbname=library_management","root","");
        // echo "Done";
    }catch(PDOException $e){ //$e saves the error
        echo "Error";
        //die();

    }
}

}
