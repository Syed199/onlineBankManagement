<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Login Form -->
    <link rel="stylesheet" href="login_dup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="login_dup.php" method="post" target="_blank"  >
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password"  name="password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit"  value="Login"  >
          </div>
          <div class="signup-link">Not a member? <a href="reg_dup.php">Signup now</a></div>
        </form>
      </div>
    </div>

<?php


session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "bank";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
  die("connection to this database failed due to" . mysqli_connect_error());
}
else{
  echo "check";
$eusername = $epassword = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username and password";
    }
    else{
        $eusername = trim($_POST['username']);
        $epassword = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT CID, username, password FROM customer WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $eusername;

    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $CID, $username, $password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if($epassword == $password)
{
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["CID"] = $CID;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
}
                        }
                    }

                }
    }
}
}

 ?>
  </body>
</html>
