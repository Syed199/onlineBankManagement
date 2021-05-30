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
      $email = $_POST['email'];
      $phone_no = $_POST['phone_no'];
      $message = $_POST['message'];

    $sql = "INSERT INTO `contact_us` ( `name`, `email`, `phone_no`, `message`) VALUES ( '$name', '$email', '$phone_no', '$message') ";
    $result = mysqli_query( $conn, $sql);
    if ($result)
    {

      echo " <h3 style='color:black' align='center'> your message has been recorded,we will get back to you soon. <h3>";

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamia's Bank|myonlinebanking.com</title>
    <link rel="stylesheet" href="bank_dup_1.css">
    <link rel="stylesheet" media="screen and (max-width:1050px)" href="phone.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <nva id="navbar">
        <div id="logo">
            <img src="trustbankinc_trans.png" alt="" myonlinebanking.com>
        </div>
        <ul>
            <li class="item"><a href="#home"><b>Home</b></a></li>
            <li class="item"><a href="#service-container"><b>Services</b></a></li>
            <li class="item"><a href="#client-section"><b>Our Clients</b></a></li>
            <li class="item"><a href="#contact"><b>Contact Us</b></a></li>
            <li class="item"><a href="login_dup.php"><b>Login</b></a></li>
            <li class="item"><a href="nearestcenter_dup.php"><b>Locate us</b></a></li>
            <li class="item"><a href="loan.php"><b>Apply for Loan </b></a></li>
        </ul>
    </nva>
    <section id="home">
        <h1 class="h-primary">Welcome to my online Banking </h1>
        <p>This internet banking portal provides personal banking services that gives you complete control over all your banking demands online.
        </p>
        <p>Try our new simplified and intuitive business banking platform? Create an account to avail banking services.</p>
        <button class="btn"> <a href= "reg_dup.php" > Create a New Account </a></button>
    </section>
<br><br><br>
    <section id="service-container">
        <h1 class="h-primary center" style="color: white;">Our Services</h1>
        <div id="services">

            <div class="box">
                <img src="savings_trans.png" alt="">
                <h2 class="h-secondary center" style="color: white;">Savings Account</h2>
                <p class="center">Through its network of branches in India and overseas, we provides a range of financial products including the New Savings Account. The savings account has a variety of benefits and services. The most attractive features are that the savings account does not require a minimum balance and provides ATM/Debit card, net banking and mobile banking facilities</p>
            </div>
            <div class="box">
                <img src="loan_trans.png" alt="">
                <h2 class="h-secondary center" style="color: white;">Loan Account</h2>
                <p class="center">We are the largest Mortgage Lender in India, which has helped over 30 lakh families to achieve the dream of owning a home. Our values - Our Values
                    Trust, Transparency, Integrity, Excellence. Value to Customers -  Wide Product Range,  Interest Calculation on Daily, Reducing Balance Overdraft Facility available, Low Interest Rates, Low Processing Fees, No Hidden Costs, No Pre-payment penalty</p>
            </div>
            <div class="box">
                <img src="current_trans.png" alt="">
                <h2 class="h-secondary center" style="color: white;">Current Account</h2>
                <p class="center">Our Regular Current Account (C. Acc) is for Professionals, traders, small businessmen, and relevant others who require all the C. Acc services at an affordable cost. The monthly average balance (MAB) for this account is Rs. 10,000 only. 50 multicity cheque leaves per month are free. You will receive PRIDE Business Debit Card. You will receive free SMS alerts for transactions. Statement of the account first/original is free of cost.</p>
            </div>
        </div>
    </section>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <section id="client-section">
        <h1 class="h-primary center" style="color: white;">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="tesla_trans.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="starbucks_trans.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="netflix_trans.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="hubspot_trans.png" alt="Our Clients">
            </div>
        </div>
    </section>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <section id="contact">
        <h1 class="h-primary center" style="color: white;">Contact Us</h1>
             <div id="contact-box">
            <form action="bank_dup.php" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name here">
                </div>
                <div class="form-group">
                    <label for="Email">Email: </label>
                    <input type="Email" name="email" id="email" placeholder="Enter your email here">
                </div>
                <div class="form-group">
                    <label for="phone">Phone No: </label>
                    <input type="phone" name="phone_no" id="phone" placeholder="Enter your phone here">
                </div>
                <div class="form-group">
                    <label for="address">Enter your Message: </label>
                    <textarea name="message" id="message" cols="2" rows="5" placeholder="Enter your message here"></textarea>
                    <input type="submit" >

                </div>
            </form>
        </div>
    </section>


    <footer>
        <div class="center">
            Copyright &copy; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; www.myonlinebanking.com  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  All rights reserved!
        </div>
    </footer>
</body>

</html>
