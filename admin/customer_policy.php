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

<script>
function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}
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
<div class="container" >
	
 


<div class="row">
<div class="col-sm-12" style="margin-top: 30px" >

<h4 align="center"><font color="green"><?php echo @$_GET['msg']; ?></font></h4>
<h3 align="center"><font color="sky blue"> Customer's Insurance Policy</font></h3><hr>
<div class="table-responsive">
<table class="table table-hover " border="2px solid green" cellspacing="0px" cellpadding="10px" align="center" style="border: 2px solid skyblue; font-family: comic; font-size: 13pt; ">

<tr>
<th> <center> Policy Holder </center> </th>
<th> <center>Relation </center> </th>
<th> <center>Start Date </center> </th>
<th> <center>Policy Name </center></th>
<th> <center>Sum Assured </center></th>
<th> <center>Premium Per year </center></th>
<th> <center>Policy Category </center> </th>
<th> <center>Policy Term </center> </th>
<th> <center>Profit Rate </center></th>
<th> <center>Installment Type </center></th>
<th> <center>Installment Amount </center></th>
</tr>

<?php

$namee = $_SESSION['name'];
$qwery = "SELECT * from customer_policy  ";
$run = mysqli_query($con, $qwery);

while ($row = mysqli_fetch_array($run, MYSQLI_BOTH)) {



echo " 
   <tr align='center'>
  
<td>$row[name] </td>
<td>$row[relation] </td>
<td>$row[Sdate] </td>
<td>$row[Pname] </td>
<td>$row[SumAssured] </td>
<td>$row[PremiumPerYear] </td>
<td>$row[PolicyCategory] </td>
<td>$row[PolicyTerm] </td>
<td>$row[ProfitRate] </td>
<td>$row[InstallmentType] </td>
<td>$row[InstallmentAmount] </td>

   </tr>";

}
?>

</div>
</div>
</div><!--  ENd of Row 3 -->


</div>
</body>
</html>

 