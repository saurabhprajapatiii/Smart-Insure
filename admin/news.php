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
