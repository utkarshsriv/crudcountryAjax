<?php
include_once 'conn.php';

$id=$_GET['id'];
$que='select * from location where id=:id';
$res=$conn->prepare($que);
$res->bindParam(":id",$id);
$result=$res->execute();
if ($result) {
    $row=$res->fetch(PDO::FETCH_ASSOC);
}
if ($row['status']=='1') {
    $query="UPDATE `location` SET `status` = '0' WHERE `location`.`id` = $id";
    $stmt=$conn->prepare($query);
$stmt->execute();
header('location:index.php');

}elseif($row['status']=='0') {
    $query="UPDATE `location` SET `status` = '1' WHERE `location`.`id` = $id";
    $stmt=$conn->prepare($query);
$stmt->execute();
header('location:index.php');


}

?>