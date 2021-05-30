<?php
$result = false;
$emi = 0;
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
$type = $_POST['type'];
$p = $_POST['amount'];
$t = $_POST['time'];
$name = $_POST['name'];
$email = $_POST['email'];
$desc = $_POST['desc'];
$r = .08;
$x = 1;
$emi = (($p*$r)+$p)/12 ;


$sql = "INSERT INTO `loan` (`type`, `amount`, `time`, `name`, `email`, `desc`) VALUES ('$type', '$p' , '$t', '$name', '$email', '$desc')";
$result = mysqli_query( $conn, $sql);
if($result)
{ }
else {
  echo "error".mysqli_error($conn);
}
$conn->close();
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h3>Loan Details</h3>
  <form  action="loan.php" method="post">

    <div class="input-box">
      <label for="state">which loan you want to apply:</label><br><br>
          <select  name="type">
            <option value="Select Your Loan Type here:">Select Your Loan Type Here</option><br><br>
            <option value="Home Loan">Home Loan</option>
            <option value="Personal Loan">Personal Loan</option>
            <option value="Education Loan">Education Loan</option>
            <option value="Car Loan">Car Loan</option>
            <option value="Medical Loan">Medical Loan </option>
          </select><br><br><br>
            <input type="number" name="amount" placeholder="Amount(in numbers)" >Amount(in numbers)</input><br><br>
            <input type="number" name="time" placeholder="time(in months)">time(in months)</input><br><br>
            <input type="text" name="name" placeholder="you name">enter you name</input> <br><br>
            <input type="text" name="email" placeholder="you email">enter you email</input> <br><br>
            <input type="text" name="desc" placeholder="optional">anything you would like to say</input> <br>

            <h4> NOTE--you will be charged 8% per annum<br> </h4>
            <input type="checkbox" name="" value="" required>all my information stored in my account is up-to-date<br>
            <input type="checkbox" name="" value="" required>I aggree to  <a href=#>TERMS and CONDITION <a><br> <br>
            <input type="submit"  value="submit"><br><br>
  </form>
  <center><h3>
<?php
if($result)
{
  echo "your calculated emi will be  $emi <br><br>";
  echo " we got you loan request,we will get back to asap <br>";

}
 ?></h3></center>
  </body>
</html>
