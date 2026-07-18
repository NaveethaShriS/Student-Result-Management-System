<?php
include("db.php");

if(isset($_POST['update']))
{
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $department = $_POST['department'];

    $sql = "UPDATE student
            SET name='$name',
                department='$department'
            WHERE rollno='$rollno'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Student Details Updated Successfully');</script>";
    }
    else
    {
        echo "Error: ".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Student Details</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Update Student Details</h2>

<form method="post">

<input type="text"
name="rollno"
placeholder="Enter Roll Number"
required>

<input type="text"
name="name"
placeholder="Enter New Name"
required>

<input type="text"
name="department"
placeholder="Enter Department"
required>

<button type="submit" name="update">
Update Student
</button>

</form>

</div>

</body>
</html>