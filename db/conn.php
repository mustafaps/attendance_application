<?php

    //PDO secure and reduce the connection to db there is mysql and mysqli
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";   //data source name
    try{   
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    } catch(PDOException $e){
        throw new PDOException($e->getMessage());
        //echo "<h1 class='text-danger'>No Database found</h1>";
    }
    require_once 'crud.php';
    $crud = new crud($pdo);


?>