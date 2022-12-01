<?php

include_once 'conn.php';
$id=$_POST['id'];
$query="sele/ct * from location where id = $id and type='2'";
$stmt=$conn->prepare($query);
$res=$stmt->execute();
?>
<option value="">Select State</option>
<?php
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['Name'];?></option>
    <?php
}
?>