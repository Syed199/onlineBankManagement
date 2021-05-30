<?php
$result = false;
if ($_SERVER ['REQUEST_METHOD'] == 'POST')
{

$servername = "localhost";
$username = "root";
$password = "";
$database = "bank";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
  die("connection to this database failed due to" . mysqli_connect_error());
}
else
{
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $account_no = $_POST['account_no'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br><hr>";
$sql = "INSERT INTO `customer` ( `name`, `username`, `email`, `phone_no`, `password`, `gender`,`account_no`) VALUES ( '$name', '$username', '$email', '$phone_no', '$password', '$gender','$account_no') ";
$result = mysqli_query( $conn, $sql);

if ($result)
{
  echo "<br>";
  echo "<br>";

}
else
{
  echo "error " . mysqli_error($conn);
}
}
$conn->close();
}

?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- Responsive Registration Form --->
    <link rel="stylesheet" href="reg_dup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="reg_dup.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" >
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" name="email" >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone_no">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="password">
          </div>
        </div>

        <div class="gender-details">
          <input type="radio" name="gender" value="male" id="dot-1">
          <input type="radio" name="gender" value="female" id="dot-2">
          <input type="radio" name="gender" value="not_known" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>

        </div>
        <div class="button">
          <input type="submit" >
          <?php
           if($result){
            echo " ACCOUNT CREATED ,<a href='login_dup.php' >LOGIN !!!</a>"; } ?>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
