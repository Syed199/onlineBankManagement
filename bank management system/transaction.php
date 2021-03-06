<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$database = "bank";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";

$name = $_POST['name'];
$account_no = $_POST['account_no'];
$account_type = $_POST['account_type'];
$IFSC_code = $_POST['IFSC_code'];
$money_transfer = $_POST['money_transfer'];

$sql = "INSERT INTO `account` (`Name`, `account_no`, `account_type`, `IFSC_code`, `money_transfer`) VALUES ('$name', '$account_no', '$account_type', '$IFSC_code', '$money_transfer');";

// echo $sql;

if($conn->query($sql)== TRUE){
    echo "Successfully transferred";
}
else{
    echo "ERROR: sql <br> $conn->error";
}
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Login Form -->
 <link rel="stylesheet" href="transaction.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Transactions</span></div>
        <form action="transaction.php" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="name" placeholder="name" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="number" name="account_no" placeholder="account_no" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="text" name="account_type" placeholder="account_type" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="text" name="IFSC_code" placeholder="IFSC_code" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="number" name="money_transfer" placeholder="money to transfer" required>
          </div>
          <input type="radio" id="credit" name="bank" value="credit">
          <label for="credit">credit</label><br>
          <input type="radio" id="Debit" name="bank" value="Debit">
          <label for="Debit">Debit</label><br>
          <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
          <div class="row button">
            <input type="submit" value="Send">
          </div>
          <!-- <div class="signup-link">Not a member? <a href="reg_dup.html">Signup now</a></div> -->
        </form>
      </div>
    </div>
    <script src="transaction.js"></script>
  </body>
</html>
