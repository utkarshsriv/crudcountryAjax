
<div class="container-fluid my-4">
    <h2></h2>
</div>
<div class="container my-5 ">
    <div class="row">
        <div class="col-md-4 fill-box ">
            <h3>Please Select Country, State and fill the City name</h3>
            <form action="city.php" method='post'>
                 <!-- Country dropdown's coding started here -->
      <input type="text" name="_token" value="<?php echo $_SESSION['token'] ?>" hidden>

                 <div class="form-group">
                    <label for="country_name1">Country Name</label>
                    <select class="custom-select custom-select-lg mb-3" id="country_name1" name="country_id" required>
                        
                        <option selected>Please Select Your Country</option>
                        <?php
                        $query = 'select * from location where type="1"';
                        $stmt = $conn->prepare($query);
                        $res = $stmt->execute();
                        
                        for ($i = 1; $i <= $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
                            
                            # code...
                            
                            ?>

                            <option value="<?php echo $row['id']; ?>"><?php echo $row['Name'];  ?>

                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- State dropdown's coding started here -->
                <div class="form-group">
                    <label for="State">State</label>
                    <select class="custom-select custom-select-lg mb-3" id="state" name="state_id" required>
                        
                        <option selected>Please Select Your State</option>
                        <?php
                        $query = 'select * from location where type="2"';
                        $stmt = $conn->prepare($query);
                        $res = $stmt->execute();

                        for ($i = 1; $i <= $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {

                            # code...

                        ?>

                            <option value="<?php echo $row['id']; ?>"><?php echo $row['Name'];  ?>

                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name='city' id="city" aria-describedby="emailHelp" placeholder="Enter City Name" required>
                </div>
                <button type="submit" class="btn btn-primary" name="citysubmit">Submit</button>
            </form>
        </div>
        <div class="col-md-6 show-box">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.no</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Country</th>

                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>




                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <?php
                        $query = 'select l1.id AS ID,l1.Name AS CITY_NAME, l2.Name AS STATE_NAME, l3.Name AS COUNTRY_NAME ,l1.status AS STATUS ,l1.deleted_status AS DELETED_STATUS from location l1 left join location l2 on l1.parent_id =l2.id left join location l3 on l2.parent_id = l3.id where l1.deleted_status="0" and l1.type="3"';
                        $stmt = $conn->prepare($query);
                        $res = $stmt->execute();
                        if (isset($_GET['msg'])) {
                            if ($_GET['msg'] == 402) {
                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hurrah !</strong> Deleted Successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                            }
                            if ($_GET['msg'] == 401) {
                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Alas !</strong> Not Deleted .
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
                            }
                        } ?>

                    </tr>
                    <?php

                    if ($res) {
                        # code...

                        # code...

                        // while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                        for ($i = 1; $i <= $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
                            # code...

                    ?>

                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $row['CITY_NAME']; ?></td>
                                <td><?php echo $row['STATE_NAME']; ?></td>
                                <td><?php echo $row['COUNTRY_NAME']; ?></td>
                                <td><a class="btn btn-success on " href="statusupdate.php?id=<?php echo $row['ID']; ?>">
                                        <?php
                                        if ($row['STATUS'] == '1') {
                                            echo 'ON';
                                        } else {
                                            echo 'OFF';
                                        }
                                        ?>
                                    </a>

                                </td>
                                <td>
                                    <a class="btn btn-danger my-2" href="delete.php?id=<?php echo $row["ID"]; ?>">Delete</a>
                                    <a class="btn btn-primary" href="update.php?id=<?php echo $row["ID"]; ?>">Edit</a>
                                </td>


                            </tr>

                    <?php
                        }
                    }


                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>