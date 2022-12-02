<?php
include_once 'conn.php';
$id=$_POST['state_id'];
$city=$_POST['city'];
$query="Insert into location (Name,parent_id,type) values (?,?,3)";
$stmt=$conn->prepare($query);
$stmt->bindParam(1,$city);
$stmt->bindParam(2,$id);
$res=$stmt->execute();
if ($stmt->rowCount()>0) {
    header("location:index.php");
}else{
    header("location:index.php");

}

?>