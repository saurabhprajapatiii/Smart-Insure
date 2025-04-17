<?php

include "../login/db.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Smart Insure Save your Life & health</title>

<link type="text/css" rel="stylesheet" href="../css/bootstrap.css"/>
<script src="../js/jquery-3.1.1.min.js"  > </script>
<script type="text/javascript" src="../js/bootstrapp.min.js"></script>


<style type="text/css">
    body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            margin-bottom: 20px;
            background-color: #0a1f44;
        }
        .navbar-brand, .navbar-nav li a {
            color: white !important;
        }
        .footer {
            background-color: #0a1f44;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

   .icon-bar {
    background-color: black;

}

</style>
</head>
<body>
<div class="container" style="border: 2px solid #73EE13; min-height: 600px">
	<div class="row" style="border-bottom: 1px solid #73EE13">
		<div class="col-sm-4"><a href="../index.php">
			<img src="../images/logo.png" class="img-responsive" height="150px" width="200px"></a>
		</div>
		<div class="col-sm-8" style="  margin-top: 30px; text-align: center ">
			<h2> <font color="#73EE13"> Smart Insure Save your Life & health </font>  </h2>
		</div>
		
	</div> <!-- End Of Row 1 -->
 
	<div class="row" style="border-bottom: 1px solid #73EE13">
		<div class="col-sm-12" style="margin-bottom: -15px; margin-top: 5px; ">
			<nav class="navbar navbar-fluid">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="../index.php">Smart Insure</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="plan.php">Insurance Plans</a></li>
        <li><a href="calculator.php">Premium Calculator</a></li> 
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li> 
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
       <?php 
	if(isset($_SESSION['name'])){

		$namee = $_SESSION['name'];


		$query="SELECT * from registration where name='$namee' ";
	$run=mysqli_query($con, $query) ;
	
	
	while ($roww = mysqli_fetch_array($run, MYSQLI_BOTH)) {


		
	
	
	                           
								$name = $roww['name'];
								$userType = $roww['userType'];
      switch ($userType) {
          
          case 'user':
              $redirect = '../user_profile/user_profile.php  ';
          break;
          case 'admin':
              $redirect = '../admin/admin.php';
          break;
          case 'manager':
              $redirect = '../manager/manager.php';
          break;
          case 'agent':
              $redirect = '../agent/agent.php';
          break;
                          
                          }
						  }

	
		?>
	 <li> <?php echo '<a href="' . $redirect . '">' ?> <?php echo strtoupper($_SESSION['name']); ?></a></li>
      <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    <?php
}
else{
	echo "<li><a href='../login/register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
	echo "      <li><a href='../login/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
}

?> </ul>
    </div>
  </div>
</nav>
		</div>
	</div> <!--  ENd of Row 2 -->
  <h4>
    At Smart Insure, we are committed to providing reliable and comprehensive insurance solutions tailored to meet the diverse needs of individuals and families. With a customer-first approach, we offer a range of insurance plans, ensuring financial security and peace of mind.</P>


<P>Our mission is to simplify the insurance process by offering transparent policies, easy claim settlements, and personalized services. Whether it’s health, life, vehicle, or property insurance, Smart Insure is dedicated to safeguarding what matters most to you.</P>

<P>With a team of experienced professionals and advanced digital solutions, we strive to make insurance accessible, affordable, and hassle-free. Choose Smart Insure for smart, secure, and seamless protection.</P>

	<P>This company provides family life insurance policies, emphasizing both future protection and present benefits. Policyholders receive access to free health and wellbeing services, a ₹ 125 gift card, and 10% cashback. They have been recognized for their customer experience, ranking No.1 by Fairer Finance and being named Best Life Insurer in The Times Money Mentor 2025 awards.</h4></P>

  
<style>
	footer {
    background-color: #0a1f44;
    color: white;
    padding: 30px 0;
    text-align: center;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: auto;
}

.footer-section {
    width: 30%;
    padding: 10px;
}

.footer-section h3 {
    color: #f4b400;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li a {
    color: white;
    text-decoration: none;
}

.footer-section ul li a:hover {
    color: #f4b400;
}

.footer-bottom {
    margin-top: 20px;
    border-top: 1px solid #f4b400;
    padding-top: 10px;
}
</style>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Smart Insure</h3>
            <p>Providing AI-driven, hassle-free, and digital-first insurance solutions for modern customers.</p>
        </div>
        
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.html">Our Services</a></li>
                <li><a href="contact.pho">Contact</a></li>
                <li><a href="faq.html">FAQs</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: support@smartinsure.com</p>
            <p>Phone: +91 8080793856</p>
            <p>Address: SmartInsure, Ambernath , Thane , Maharashtra 400 001</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; Smart Insure Save your Life & health.</p>
    </div>
</footer>


	


 
</div>
</body>
</html>