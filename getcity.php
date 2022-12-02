<?php

include_once 'conn.php';
$id=$_GET['id'];
$query="select * from location where parent_id = '$id' and type='3' ";
$stmt=$conn->prepare($query);
$res=$stmt->execute();
?>
<option value="">Select City</option>
<?php
$str="";
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

 echo "<option value='{$row ['id']}'>{$row ['Name']}</option>";

}

?>