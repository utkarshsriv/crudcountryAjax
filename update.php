<?php
include_once 'nav.php';
include_once 'conn.php';
$id=$_GET['id'];
$query="select * from location where id=:id";
$stmt=$conn->prepare($query);
$stmt->bindParam(":id",$id);
$res=$stmt->execute();
if ($res) {
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
}else{
    echo'something went wrong';
}
if (isset($_POST['submit'])) {
    # code...
    $name=$_POST['country_name'];
   
    $obj->update($id,$name);
}

?>
 <div class="container my-5">
      
       <div class="container">
           <h3>Please enter the country name</h3>
       <form action=""method='post'>
      <input type="text" name="_token" value="<?php echo $_SESSION['token'] ?>" hidden>

  <div class="form-group">
    <label for="country_name">Country Name</label>
    <input type="text" class="form-control" name='country_name' id="country_name" aria-describedby="emailHelp" placeholder="Enter Country Name" value="<?php echo $row['Name']?>">
  </div>
       
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
       </div>
 </div>