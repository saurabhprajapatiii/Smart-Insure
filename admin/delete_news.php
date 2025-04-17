<?php
include('../config/db.php'); // Database Connection
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM news WHERE id=$id");
header('Location: admin.php');
?>
