<?php
include "db.php";

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Student Management System</h1>
        <p>Manage student records easily</p>

        <a href="add.php" class="add-btn">+ Add Student</a>
    </div>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['course'] ?></td>

            <td>
                <a class="action update"
                   href="update.php?id=<?= $row['id'] ?>">
                   Edit
                </a>

                <a class="action delete"
                   href="delete.php?id=<?= $row['id'] ?>"
                   onclick="return confirm('Delete this student?');">
                   Delete
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>