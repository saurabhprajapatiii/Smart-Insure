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
 #message{
  
  margin-left: 400px;
  font-size: 14pt;
  color: skyblue;
  font-weight: bold;

 }
</style>
</head>
<body>
<div class="container" >


<div class="row">
<div class="col-sm-12" style="margin-top: 30px" >

<h3 align="center"><font color="sky blue"> Customer's Feedback</font></h3><hr>

<h4 align="center"><font color="sky blue"> <?php echo @$_GET['delete']; ?> </font></h4><hr>

<div class="table-responsive">
<table class="table table-hover " border="2px solid green" cellspacing="0px" cellpadding="10px" align="center" style="border: 2px solid skyblue; font-family: comic; font-size: 13pt; ">


<?php
$agent_name =$_SESSION['name'];
$qwery = "SELECT * from feedback where receiver='admin'";
$run = mysqli_query($con, $qwery);
if ( mysqli_num_rows($run) == 0){
  echo " <span id='message'>NO Feedback </span>";
}
while ($row = mysqli_fetch_array($run, MYSQLI_BOTH)) {

$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$comment=$row['comment'];

echo "
<tr>
<th> <center>  Name </center> </th>
<th> <center>Email </center> </th>
<th> <center>Comment </th>
<th> <center>Delete </th>
</tr>
<tr>
      <td><center> $name </center></td>
      <td><center> $email </center></td>
      <td><center> $comment </center></td>
      <td><center> <a href='delete.php?id=$id'>Delete</a> </center></td>
";

}
     
?>

</div>
</div>
</div><!--  ENd of Row 3 -->

</div>
</body>
</html>