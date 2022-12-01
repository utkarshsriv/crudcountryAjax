<?php
include_once 'conn.php';
$id=$_POST['country_id'];
$state=$_POST['State'];
$query="Insert into location (Name,parent_id,type) values (?,?,2)";
$stmt=$conn->prepare($query);
$stmt->bindParam(1,$state);
$stmt->bindParam(2,$id);
$res=$stmt->execute();
if ($stmt->rowCount()>0) {
    header("location:index.php");
}else{
    header("location:index.php");

}

?>