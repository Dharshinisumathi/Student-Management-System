<?php
include "db.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students 
            SET name='$name', email='$email', course='$course'
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>

<body>

<h2>Update Student</h2>

<form method="POST">

    <input type="text" name="name"
           value="<?= $row['name'] ?>" required>
    <br><br>

    <input type="email" name="email"
           value="<?= $row['email'] ?>" required>
    <br><br>

    <input type="text" name="course"
           value="<?= $row['course'] ?>" required>
    <br><br>

    <button type="submit" name="update">Update Student</button>

</form>

<br>

<a href="index.php">Back</a>

</body>
</html>