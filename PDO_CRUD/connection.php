<?php


    define('dbname',"mysql:host=localhost;dbname=2404G1");
    define('user',"root");
    define('password',"");



    try{
        // $connection = new PDO("mysql:host=localhost;dbname=2211b1","usama",'123');
        
        $connection = new PDO(dbname,user,password);
        // echo "Database Connected Successfully";
    }
    catch(PDOException $e)
    {
        echo "Database Connection Failed: " . $e->getMessage();
    }




?>