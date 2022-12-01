<div class="container-fluid my-4">
  <h2 >Welcome to Our CountryCrud Website!</h2>
</div>
<div class="container my-5 ">
  <div class="row">
    <div class="col-md-4 fill-box">
      <h3>Please enter the country name</h3>
      <form action="" method='post'>
        <div class="form-group">
          <label for="country_name">Country Name</label>
          <input type="text" class="form-control" name='country_name' id="country_name" aria-describedby="emailHelp" placeholder="Enter Country Name">
        </div>


        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
    <div class="col-md-6 show-box">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">S.no</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>




          </tr>
        </thead>
        <tbody>
          <?php
          $query = 'select * from location where deleted_status="0" and type="1"';
          $stmt = $conn->prepare($query);
          $res = $stmt->execute();
          ?>
          <tr>

            <?php
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
                  <td><?php echo $row['Name']; ?></td>
                  <td><a class="btn btn-success on " href="statusupdate.php?id=<?php echo $row['id']; ?>">
                      <?php
                      if ($row['status'] == '1') {
                        echo 'ON';
                      } else {
                        echo 'OFF';
                      }
                      ?>
                    </a>

                  </td>
                  <td>
                    <a class="btn btn-danger my-2" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                    <a class="btn btn-primary" href="update.php?id=<?php echo $row["id"]; ?>">Edit</a>
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
