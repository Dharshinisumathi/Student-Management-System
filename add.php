<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>

<body>

<h2>Add Student</h2>

<form method="POST">

    <input type="text" name="name" placeholder="Student Name" required>
    <br><br>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="text" name="course" placeholder="Course" required>
    <br><br>

    <button type="submit" name="submit">Add Student</button>

</form>

<br>

<a href="index.php">Back</a>

</body>
</html>