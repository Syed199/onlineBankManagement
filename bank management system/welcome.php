<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>myaccount</title>
  </head>
  <body>


    <?php
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
    {
        header("location: login_dup.php");
    }
    ?>
    <h3 align="center"><?php echo "welcome ".$_SESSION['username'] ?><h3>


    <p align="right">
      <?php
      echo "<a href='logout.php' >logout <a>";
      ?>
     <p>
    <h2 align=left>your account details </h2><br>
    <div align=left color: rgb(2,2,4)>
     <ol >
       <li>account holder's name:</li><b> <?php echo $_SESSION['username']; ?> <b><br><br><br>
       <li>account number:</li>11223344 <b><b> <br><br><br>
       <li>account balance:</li> <b>10000 <b><br><br><br>
      </ol>

   </div>

  </center>
  <center><h4>
   <a href='transaction.php' > transfer money <a>
   <h4>
   </center>

<center>
  <br><br><br><br><br><br><br><br><br><br><br>
  <h3>ok bye<h3></center></body>
</html>
