<?php
include "db.php";

$result = $conn->query("SELECT * FROM posts ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    echo "<h3>".$row['title']."</h3>";
    echo "<p>".$row['content']."</p>";
    echo "<a href='edit.php?id=".$row['id']."'>Edit</a> | ";
    echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
    echo "<hr>";
}
?>
<a href="dashboard.php">Back</a>
