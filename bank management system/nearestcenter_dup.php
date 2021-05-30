
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- Responsive Registration Form --->
    <link rel="stylesheet" href="nearestcenter_dup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php
  $result = 'false';
  if ($_SERVER ['REQUEST_METHOD'] == 'POST')
  {
    $state ="";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "bank";
  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn)
  {
    die("connection to this database failed due to" . mysqli_connect_error());
  }

  $sql= "SELECT branch_id,address FROM branch WHERE state = ? ";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $param_state);
  $param_state = $_POST['state'];
 $result = mysqli_stmt_execute($stmt);
  if($result)
      {
      mysqli_stmt_store_result($stmt);
      if(mysqli_stmt_num_rows($stmt) == 1)
              {
                  mysqli_stmt_bind_result($stmt, $branch_id, $address);
                  if(mysqli_stmt_fetch($stmt))
                  { echo " address of the bank is-- ". $address;
                  echo "<br>branch id of the bank is-- ". $branch_id;
                }
              }
            }
          }
   ?>
  <div class="container">
    <div class="title">Find Nearest Bank to You</div>
    <div class="content">
      <form action="nearestcenter_dup.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <!-- <span class="details">Country</span> -->
            <label for="country">Select Your Country:</label>
              <select id="country" name="country">
                <option value="Select Your Country Here">Select Your Country Here</option>
                <option value="India">India</option>
              </select>
            <!-- <input type="text" placeholder="Select your Country" required> -->
          </div>
        <!--  <div class="input-box">
            <span class="details">Pincode</span>
            <input type="text" placeholder="Enter your 5-digit Pincode" required>
          </div> -->
          <div class="input-box">
            <!-- <span class="details">State</span> -->
            <label for="state">Select Your State:</label>
                <select id="state" name="state">
                  <option value="Select Your State Here">Select Your State Here</option>


                  <option value="Assam">Assam</option>

                  <option value="Delhi">Delhi</option>

                  <option value="Goa">Goa</option>

                  <option value="Haryana">Haryana</option>

                  <option value="Karnataka">Karnataka</option>

                  <option value="Maharashtra">Maharashtra</option>

                  <option value="Punjab">Punjab</option>

                  <option value="Rajasthan">Rajasthan</option>

                  <option value="Uttar Pradesh">Uttar Pradesh</option>

                </select>
            <!-- <input type="text" placeholder="Select your State" required> -->
          </div>

        </div>
        <div class="button">
          <input type="submit" value="Find Nearest Bank for Me">
        </div>
      </form>
      <?php
      if($result)
      {
      echo " <a href='bank_dup.php'> HOME <a> ";
      }
      ?>
    </div>
  </div>

</body>
</html>
