<?php

include "../login/db.php";
session_start();
if (! isset($_SESSION['name'])) {
          echo " <script> alert('You must be logged in to enroll.') 
                       window.location='../login/login.php';
            </script>; ";
}
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
  
  input{
    background-color: #BBCDC7;
  }

  #left{
    float: left;
  }

  #right{
    float: right;
  }


  div#relation {
    background-color: #ce153f;
    padding: 5px;
    display: none;
    float: left;
    color: white;
    float: center;
    height: 30px;
    width: 180px;


}
    
span:hover + div#relation {
    display: block;
}
.btn{
  background-color: #ce153f;
  color: white;
}
</style>
</head>
<body>
<div class="container" style="border: 2px solid #73EE13;"> 

<?php

include "header.php";

?>

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
 <?php 

  $uname = $_SESSION['name'];
 
    $Pname=@$_GET['Pname'];
    $SumAssured=@$_GET['SumAssured'];
    $PremiumPerYear=@$_GET['PremiumPerYear'];
    $PolicyCategory=@$_GET['PolicyCategory'];
    $PolicyTerm=@$_GET['PolicyTerm'];
    $ProfitRate=@$_GET['ProfitRate'];
    $InstallmentType=@$_GET['InstallmentType'];
    $InstallmentAmount=@$_GET['InstallmentAmount'];
    $PolicyHolder=@$_GET['PolicyHolder'];


  ?>
<div class="row"><!--  Start of Row 3 -->
  
  <div class="col-sm-12" style="background-color: #BBCDC7; margin-top: 30px; margin-left: 20px; margin-bottom: 20px; border-radius: 10px;  width: 40%; box-shadow: inset -5px -5px #ce153f" align="center">




  <form action="enroll.php" method="POST">
    
    <br><label class="form-control" style="float: center; color: #ce153f; font-size: 13pt;">  Enrollment Form </label><br>

    <br><br><label id="left"> Name </label>
    <label id="right"> <input type="text" name="name" value="<?php echo $uname ?>" readonly></label><br><br>

    <label id="left"> Relation </label>
    <span id="right"> <input type="text" name="relation" placeholder="Relation If Any" style="width: 192px"> </span>
   
    <div id="relation"> Enter Relationship </div>
    <br><br>

    <label id="left"> Start Date </label>
    <label id="right"> <input type="date" name="date" style="width: 192px"></label><br><br>

    <label id="left"> Plan Name </label>
    <label id="right"> <input type="text" name="Pname" value="<?php echo $Pname ?>" readonly></label><br><br>

    <label id="left"> Sum Assured </label>
    <label id="right"> <input type="text" name="SumAssured" value="<?php echo $SumAssured ?>" readonly></label><br><br>

    <label id="left"> Premium Per year </label>
    <label id="right"> <input type="text" name="PremiumPerYear" value="<?php echo $PremiumPerYear ?>" readonly></label><br><br>

    <label id="left"> Policy Category </label>
    <label id="right"> <input type="text" name="PolicyCategory" value="<?php echo $PolicyCategory ?>" readonly></label><br><br>

    <label id="left"> Policy Term </label>
    <label id="right"> <input type="text" name="PolicyTerm" value="<?php echo $PolicyTerm ?>" readonly></label><br><br>

    <label id="left"> Profit Rate </label>
    <label id="right"> <input type="text" name="ProfitRate" value="<?php echo $ProfitRate ?>%" readonly></label><br><br>

    <label id="left"> Installment Type </label>
    <label id="right"> <input type="text" name="InstallmentType" value="<?php echo $InstallmentType ?>" readonly></label><br><br>

    <label id="left"> Installment Amount </label>
    <label id="right"> <input type="text" name="InstallmentAmount" value="<?php echo $InstallmentAmount ?>" readonly></label><br><br>

    <input type="submit" name="submit" value="Submit" class="btn">



  
<br><br></form>

  </div>

</div>


 
</div>

</body>
</html>


<?php

if (isset($_POST['submit'])) {


    $name=$_POST['name'];
    $relation=$_POST['relation'];
    $date=$_POST['date'];
    $Pname=$_POST['Pname'];
    $SumAssured=$_POST['SumAssured'];
    $PremiumPerYear=$_POST['PremiumPerYear'];
    $PolicyCategory=$_POST['PolicyCategory'];
    $PolicyTerm=$_POST['PolicyTerm'];
    $ProfitRate=$_POST['ProfitRate'];
    $InstallmentType=$_POST['InstallmentType'];
    $InstallmentAmount=$_POST['InstallmentAmount'];

    $query=" INSERT into customer_policy set name='$name', relation='$relation', Sdate='$date', Pname='$Pname', SumAssured='$SumAssured', PremiumPerYear='$PremiumPerYear', PolicyCategory='$PolicyCategory', PolicyTerm='$PolicyTerm', ProfitRate='$ProfitRate', InstallmentType='$InstallmentType', InstallmentAmount='$InstallmentAmount' ";

    $run=mysqli_query($con, $query);

     echo("<script>location.href = '../user_profile/my_policy.php';</script>");


  }



?>
</ul>
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
<!---------------------------END OF SLIDER---------------------------------- -->
</div>
	</div><!--  ENd of Row 3 -->

<div class="row">
		<div class="col-sm-12" align="center" style="padding-top: 10px; margin-top: 50px; border-top: 2px solid #73EE13">

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
	</div><!--  ENd of Row 3 -->
 
</div>
</body>
</html>