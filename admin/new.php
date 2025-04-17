<?php  
session_start();        
if(!$_SESSION['name']){
	header('Window-target: _top');
	header('location:../login/login.php?error=You are not an administrator ');
}
include '../db.php'; // Include your database connection
?>

<html>
<head>
<title>Admin Panel - What's New</title>
<link type="text/css" rel="stylesheet" href="abc1.css"/>
<style>
    #news-table {
        width: 100%;
        border-collapse: collapse;
    }
    #news-table th, #news-table td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    .form-container {
        margin-top: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Admin Control Panel - What's New</h2>

    <h3>Add News</h3>
    <div class="form-container">
        <form action="add_news.php" method="POST" enctype="multipart/form-data">
            <label>Title:</label>
            <input type="text" name="title" required><br>
            <label>Description:</label>
            <textarea name="description" required></textarea><br>
            <label>Category:</label>
            <select name="category">
                <option value="PRESS RELEASES">Press Releases</option>
                <option value="CIRCULARS">Circulars</option>
                <option value="GUIDELINES">Guidelines</option>
            </select><br>
            <label>Upload File:</label>
            <input type="file" name="file"><br>
            <button type="submit">Add News</button>
        </form>
        <div style="padding: 20px; background-color: #fff; border-radius: 10px;">
    <h2>📢 What's New - Admin Panel</h2>
    <a href="add_news.php" style="padding: 8px 15px; background: green; color: white; border-radius: 5px; text-decoration: none;">➕ Add News</a>
    <br><br>
    
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>File</th>
            <th>Actions</th>
        </tr>

        <?php
        include('../config/db.php'); // Database connection
        $result = mysqli_query($conn, "SELECT * FROM news ORDER BY created_at DESC");
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$i}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['category']}</td>
                    <td><a href='{$row['file_path']}' download>📄 Download</a></td>
                    <td>
                        <a href='edit_news.php?id={$row['id']}' style='color: blue;'>✏️ Edit</a> | 
                        <a href='delete_news.php?id={$row['id']}' style='color: red;' onclick='return confirm(\"Are you sure?\");'>🗑️ Delete</a>
                    </td>
                  </tr>";
            $i++;
        }
        ?>
    </table>
</div>

    </div>

    <h3>Latest News</h3>
    <table id="news-table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>File</th>
            <th>Actions</th>
        </tr>
        <?php
        $query = "SELECT * FROM news ORDER BY created_at DESC";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['category']}</td>
                    <td><a href='{$row['file_url']}' target='_blank'>Download</a></td>
                    <td>
                        <a href='edit_news.php?id={$row['id']}'>Edit</a> |
                        <a href='delete_news.php?id={$row['id']}' onclick='return confirm("Are you sure?")'>Delete</a>
                    </td>
                </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
