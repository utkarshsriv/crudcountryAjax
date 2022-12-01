<?php
class CRUD
{
    public $conn;
    public function __construct($n)
    {
        # we are taking connection as parameter here and convert it into our public var conn.
        $this->conn = $n;
    }
    public function insert($name)
    {
        $query = "Insert into location (Name,parent_id,type) Values (?,0,1)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindparam(1, $name);

        $row = $stmt->execute();

        if ($row) {
            header('location:index.php');
        }
        else {
            echo 'not inserted';
            header('location:index.php');
        }
    }


     public function delete($id)    {
        $query = "UPDATE `location` SET `deleted_status` = '1' WHERE `id` = '$id'";
        var_dump($query);
        $stmt = $this->conn->prepare($query);

        var_dump($stmt);
        $row = $stmt->execute();
        var_dump($row);


        if ($stmt->rowCount() > 0) {
            echo 'deleted';
            header('location:index.php?msg=402');
        }
        else {
            echo 'not deleted';
            header('location:index.php?msg=401');
        }    }    public function update($id, $name)    {
        $query = 'update location set Name=:name,parent_id=:pid,type=:type where id=:id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindparam(":name", $name);
        $stmt->bindparam(":id", $id);
        $res = $stmt->execute();        if ($res) {
            echo 'updated';
            header('location:index.php');        }
        else {
            echo 'not updated';
            header('location:index.php');        }    }
}
?>