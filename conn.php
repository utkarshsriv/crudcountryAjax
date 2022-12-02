<?php
try{
$host='mysql:host=localhost;dbname=masters;';
$user='root';
$pass='';
$conn = new PDO($host,$user,$pass);
// echo('connected');
}catch(PDOException $err){
    $err->getMessage();
}

include_once 'crud.php';
$obj=new CRUD($conn);
?>