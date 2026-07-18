<?php
include("db.php");

if(isset($_POST['delete']))
{
    $rollno = $_POST['rollno'];

    $sql = "DELETE FROM student WHERE rollno='$rollno'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Student Deleted Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Delete Student</h2>

<form method="post">

<input type="text"
name="rollno"
placeholder="Enter Roll Number"
required>

<button type="submit" name="delete">
Delete Student
</button>

</form>

</div>

</body>
</html>
