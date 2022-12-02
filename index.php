<?php
include_once 'conn.php';

include_once 'nav.php';
include_once 'country.php';
include_once 'stateui.php';
include_once 'all.php';
?>
<div class="container-fluid my-5 ">
 <div class="container fill-box-all">
            <h3>Please Select Country, State and fill the City name</h3>
            <form action="city.php" method='post'>
      <input type="text" name="_token" value="<?php echo $_SESSION['token'] ?>" hidden>

                 <!-- Country dropdown's coding started here -->
                 <div class="form-group">
                    <label for="countryAjax">Country Name</label>
                    <select class="custom-select custom-select-lg mb-3" id="countryAjax" name="countryAjax" onchange="get_state('countryAjax')">
                        
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
                    <label for="StateAjax">State</label>
                    <select class="custom-select custom-select-lg mb-3" id="StateAjax" name="StateAjax" onchange="get_city('StateAjax')">
                        
                        <option selected>Please Select Your State</option>
                        <?php
                        // $query = 'select * from location where type="2"';
                        // $stmt = $conn->prepare($query);
                        // $res = $stmt->execute();

                        // for ($i = 1; $i <= $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {

                        //     # code...

                        ?>

    <option value="1">Select Country First</option>
                        <?php
                        // }
                        ?>
                    </select>
                </div>
                <!-- City dropdown's coding started here -->
                <div class="form-group">
                    <label for="CityAjax">City</label>
                    <select class="custom-select custom-select-lg mb-3" id="CityAjax" name="CityAjax">
                        
                        <option selected>Please Select Your City</option>
                        <?php
                        // $query = 'select * from location where type="3"';
                        // $stmt = $conn->prepare($query);
                        // $res = $stmt->execute();

                        // for ($i = 1; $i <= $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {

                        //     # code...

                        ?>

                            <option value="1">Select State First

                            </option>
                        <?php
                        // }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="">Submit</button>
            </form>
        </div>

        </div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
<script>
$(document).ready(function () {
  // $('#countryAjax').on('change',function () {
  //   let id=this.value;
  //   alert(id);
  //   $('#StateAjax').html('select country first');
  //   // alert($('#StateAjax').html());
  //   $.ajax({
  // url: 'getstate.php',
  // type: 'POST',
  // data: {id:id},
  // success: function (result) {
  //   $('#StateAjax').html(result);
  //   alert(result);
  // }
});


function get_state(get_id)
{
     let data= document.getElementById(get_id).value;
    // alert(data);
    
  const ajaxreq= new XMLHttpRequest();
  ajaxreq.open('GET','getstate.php?id='+data,'true');
  ajaxreq.send();
  ajaxreq.onreadystatechange= function(){
    if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
        document.getElementById('StateAjax').innerHTML=ajaxreq.responseText;
    }else{
        document.getElementById('StateAjax').innerHTML='Not found';
    }
  }
}
function get_city(get_id)
{
     let data= document.getElementById(get_id).value;
    // alert(data);
    
  const ajaxreq= new XMLHttpRequest();
  ajaxreq.open('GET','getcity.php?id='+data,'true');
  ajaxreq.send();
  ajaxreq.onreadystatechange= function(){
    if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
        document.getElementById('CityAjax').innerHTML=ajaxreq.responseText;
    }else{
        document.getElementById('CityAjax').innerHTML='Not found';
    }
  }
}

    // $.ajax({
    //   url:'getstate.php',
    //   type:'POST',
    //   data: {id:id},
    //   success:function (result) {
    //     alert(result);
    //     $('#StateAjax').html(result);
    //     $('#CityAjax').html=('<option value="">Select State First</option>');
    //   }
    // });
  // });
// });
</script>
</body>

</html>