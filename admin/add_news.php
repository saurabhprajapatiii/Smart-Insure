<?php
include('../config/db.php'); // Database Connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    // Handle File Upload
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_path = "uploads/" . $file_name;
    move_uploaded_file($file_tmp, "../" . $file_path);

    // Insert into DB
    $sql = "INSERT INTO news (title, description, category, file_path) VALUES ('$title', '$description', '$category', '$file_path')";
    if (mysqli_query($conn, $sql)) {
        header('Location: admin.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Add News</h2>
<form action="" method="POST" enctype="multipart/form-data">
    Title: <input type="text" name="title" required><br><br>
    Description: <textarea name="description" required></textarea><br><br>
    Category: 
    <select name="category">
        <option value="Press Release">Press Release</option>
        <option value="Circular">Circular</option>
        <option value="Guideline">Guideline</option>
    </select><br><br>
    File: <input type="file" name="file" required><br><br>
    <input type="submit" value="Submit">
</form>
