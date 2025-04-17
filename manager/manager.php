<?php

include "db.php";
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
      <a class="navbar-brand" href="manager.php">Manager Panel</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="agent.php">Agent</a></li>
        <li><a href="manager_customer.php">Customer</a></li>
        <li><a href="customer_policy.php">Customer Policy</a></li>
        <li><a href="policy_payment.php">Policy Payment</a></li> 
        <li><a href="insurance_policy.php">Insurance Policy </a></li> 
        <li><a href="feedback.php">Feedback</a></li> 
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
       <?php 
	if(isset($_SESSION['name'])){

		
		?>
	 <li><a href="#"> <?php echo strtoupper($_SESSION['name']); ?></a></li>
      <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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


</div>
</body>
</html>