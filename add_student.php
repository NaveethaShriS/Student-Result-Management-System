<?php
include("db.php");

if(isset($_POST['submit']))
{
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $department = $_POST['department'];

    $sql = "INSERT INTO student(rollno,name,department)
            VALUES('$rollno','$name','$department')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Student Added Successfully');</script>";
    }
    else
        {
            echo mysqli_error($conn);
        }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Add Student</h2>

<form method="post">

<input type="text" name="rollno" placeholder="Roll Number" required>

<input type="text" name="name" placeholder="Student Name" required>

<input type="text" name="department" placeholder="Department" required>

<button type="submit" name="submit">
Add Student
</button>

</form>

</div>

</body>
</html>
