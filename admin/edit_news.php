<?php
include('../config/db.php'); // Database Connection

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM news WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    
    // Update Query
    $sql = "UPDATE news SET title='$title', description='$description', category='$category' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('Location: admin.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Edit News</h2>
<form action="" method="POST">
    Title: <input type="text" name="title" value="<?= $row['title']; ?>" required><br><br>
    Description: <textarea name="description"><?= $row['description']; ?></textarea><br><br>
    Category: 
    <select name="category">
        <option value="Press Release" <?= $row['category'] == 'Press Release' ? 'selected' : ''; ?>>Press Release</option>
        <option value="Circular" <?= $row['category'] == 'Circular' ? 'selected' : ''; ?>>Circular</option>
        <option value="Guideline" <?= $row['category'] == 'Guideline' ? 'selected' : ''; ?>>Guideline</option>
    </select><br><br>
    <input type="submit" value="Update">
</form>