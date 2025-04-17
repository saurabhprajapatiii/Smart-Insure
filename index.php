<?php

include "login/db.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Smart Insure Save your Life & health</title>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<script src="js/jquery-3.1.1.min.js"  > </script>
<script type="text/javascript" src="js/bootstrapp.min.js"></script>

<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/cycle.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function()
		{
		
		$('#sliderimage').cycle('fadeZoom');
		}
		
		
		);
		
		</script>
<style type="text/css">
	
	 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
     
  }
   .icon-bar {
    background-color: black;

}

#sliderimage img {
	border: 3px solid grey;
	height: 300px;
	width: 500px;
	 
}

</style>
</head>
<body>
<div class="container" style="border: 2px solid #73EE13">
	<div class="row" style="border-bottom: 1px solid #73EE13">
		<div class="col-sm-4">
			<img src="images/logo.png" class="img-responsive" height="150px" width="200px">
		</div>
		<div class="col-sm-8" style="  margin-top: 30px; text-align: center ">
			<h2> <font color="#73EE13"> Smart Insure Save  your Life & health </font>  </h2>
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
      <a class="navbar-brand" href="#">Smart Insure</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="other/plan.php">Insurance Plans</a></li>
        <li><a href="other/calculator.php">Premium Calculator</a></li> 
        <li><a href="other/about.php">About Us</a></li>
        <li><a href="other/contact.php">Contact Us</a></li> 
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
              $redirect = 'user_profile/user_profile.php  ';
          break;
          case 'admin':
              $redirect = 'admin/admin.php';
          break;
          case 'manager':
              $redirect = 'manager/manager.php';
          break;
          case 'agent':
              $redirect = 'agent/agent.php';
          break;
                          
                          }
						  }

	
		?>
	 <li> <?php echo '<a href="' . $redirect . '">' ?> <?php echo strtoupper($_SESSION['name']); ?></a></li>
      <li><a href="login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    <?php
}
else{
	echo "<li><a href='login/register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
	echo "      <li><a href='login/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
}

?> </ul>
    </div>
  </div>
</nav>
		</div>
	</div> <!--  ENd of Row 2 -->

	<div class="row">
		<div class="col-sm-12" align="center" style="padding-top: 20px; margin-top: 30px; padding-bottom: 20px;">
<!---------------------------END OF SLIDER---------------------------------- -->
		
<style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .tabs {
            display: flex;
            gap: 10px;
        }
        .tab {
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            background: #e0e0e0;
        }
        .tab.active {
            background: #007bff;
            color: white;
        }
        .news-list {
            margin-top: 10px;
        }
        .news-item {
            background: #f1f1f1;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
        }
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
    </style>
</head>
<body>
<body>
    <style>
       * {
    margin: 0;
    padding: 0;
}

.slider {
    width: 100%;
    height: 500px;
    overflow: hidden;
    border: 5px solid white; /* Added white border */
    box-sizing: border-box;
    border-radius: 10px; /* Optional: for rounded corners */
}

figure {
    position: relative;
    left: 0;
    width: 400%; /* width dikali slide */
    animation: 10s slide infinite;
}

.slide {
    position: relative;
    width: 25%; /* width dibagi slide */
    float: left;
}

.slide h1 {
    position: absolute;
    font-size: 3em;
    width: 100%;
    text-align: center;
    margin-top: 50px;
    color: white;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.slide img {
    width: 100%;
    height: 500px;
    border: 5px solid white; /* Added white border around images */
    box-sizing: border-box;
    border-radius: 10px; /* Optional: for rounded corners */
}

@keyframes slide {
    0%, 10% {
        left: 0;
    }
    20%, 30% {
        left: -100%;
    }
    40%, 50% {
        left: -200%;
    }
    55%, 65% {
        left: -300%;
    }
    66%, 74% {
        left: -200%;
    }
    75%, 85% {
        left: -100%;
    }
    90%, 100% {
        left: 0;
    }
}


</style>
    
    <div class="slider">
        <figure>
            <div class="slide">
                <h1>   </h1>
                <img src="images/maxresdefault.jpg" alt="">
            </div>
            <div class="slide">
                <h1> </h1>
                <img src="images/insurance.webp" alt="">
            </div>
            <div class="slide">
                <h1> </h1>
                <img src="images/insurance 2.webp" alt="">
            </div>
            <div class="slide">
                <h1> </h1>
                <img src="images/1.jpg" alt="">
            </div>
        </figure>
    </div>

</body>

<div class="info-section">
    <h3>Information for</h3>
    <div class="info-grid">
        <div class="info-card">
            <span class="icon">☂️</span>
            <h4>Insurance Companies</h4>
            <p>Circulars, Notices, and other important information.</p>
        </div>
        <div class="info-card">
            <span class="icon">📄</span>
            <h4>Policyholders</h4>
            <p>Public notices, policyholder information, and claim procedures.</p>
        </div>
        <div class="info-card">
            <span class="icon">🤝</span>
            <h4>Intermediaries</h4>
            <p>Circulars, Notices, and other important information.</p>
        </div>
        <div class="info-card">
            <span class="icon">🔍</span>
            <h4>Researchers</h4>
            <p>Find information about policyholder protection, consumer education, and other issues.</p>
        </div>
    </div>
</div>

<div class="how-to-become">
    <h3>How to become</h3>
    <div class="carousel">
        <div class="slide">📜 Insurance Broker</div>
        <div class="slide">🔎 Surveyor</div>
        <div class="slide">🏢 Corporate Agent</div>
        <div class="slide">📊 Insurance Marketing Firm</div>
        <div class="slide">☂️ Life Insurer</div>
    </div>
</div>

<style>
    .whats-new, .info-section, .how-to-become {
        padding: 20px;
        background: #f9fafe;
        border-radius: 10px;
        margin: 20px 0;
    }
    .tabs button {
        background: none;
        border: none;
        padding: 10px;
        font-weight: bold;
        cursor: pointer;
    }
    .tabs button.active {
        color: #007bff;
        border-bottom: 2px solid #007bff;
    }
    .news-list {
        margin-top: 10px;
    }
    .news-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    .badge {
        background: green;
        color: white;
        padding: 3px 6px;
        border-radius: 5px;
    }
    .file-icon {
        font-size: 20px;
    }
    .view-all {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    .info-grid {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    .info-card {
        background: white;
        padding: 15px;
        border-radius: 10px;
        flex: 1;
        min-width: 200px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .carousel {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        white-space: nowrap;
    }
    .slide {
        background: #007bff;
        color: white;
        padding: 15px;
        border-radius: 10px;
        min-width: 150px;
        text-align: center;
    }
</style>

<script>
    const newsData = [
        { date: "21-02-2025", type: "press", title: "List of selected Candidates for Assistant Manager post", size: "0.85 MB" },
        { date: "19-02-2025", type: "circulars", title: "Order in the matter of UIB Insurance Brokers Pvt Ltd", size: "0.42 MB" },
        { date: "19-02-2025", type: "guidelines", title: "Corrigendum - Changes in selection process", size: "0.23 MB" }
    ];

    function displayNews(newsItems) {
        const container = document.getElementById("news-container");
        container.innerHTML = ""; // Clear previous items
        newsItems.forEach(item => {
            const newsHTML = `
                <div class="news-item">
                    <span class="date">${item.date}</span>
                    <span class="badge">New</span>
                    <span class="file-icon">📄</span>
                    <p>${item.title}</p>
                    <span class="size">${item.size}</span>
                </div>
            `;
            container.innerHTML += newsHTML;
        });
    }

    function filterNews(category) {
        let filteredNews;
        if (category === "all") {
            filteredNews = newsData;
        } else {
            filteredNews = newsData.filter(item => item.type === category);
        }
        displayNews(filteredNews);

        // Update active tab
        document.querySelectorAll(".tabs button").forEach(btn => btn.classList.remove("active"));
        event.target.classList.add("active");
    }

    // Display all news by default
    displayNews(newsData);
</script>

  

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