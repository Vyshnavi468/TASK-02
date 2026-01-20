<?php
include "db.php";
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM posts WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header("Location: view.php");
}
?>

<h2>Edit Post</h2>
<form method="post">
    <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br><br>
    <textarea name="content" required><?php echo $row['content']; ?></textarea><br><br>
    <button name="update">Update</button>
</form>
