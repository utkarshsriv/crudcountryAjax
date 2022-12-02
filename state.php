<?php
include_once 'conn.php';
if (isset($_POST['submit'])) {
    if (isset($_SESSION['token'])) {
      if (isset($_POST['_token'])) {
         
          if ($_POST['_token'] == $_SESSION['token']) 
          {
              
                  # code...
                     $id=$_POST['country_id'];
                    $state=strip_tags($_POST['State']);
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

                 
          }else 
          {
              header('location:index.php?token="unmatched"');
          }
                
          }else {
            header('location:index.php?userToken="false"');
        }
      }else{
        header('location:index.php?token="false"');
      
      }
    }

?>