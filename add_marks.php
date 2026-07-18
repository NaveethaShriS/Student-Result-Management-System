<?php
include("db.php");

if(isset($_POST['submit']))
{
    $rollno = $_POST['rollno'];
    $python = $_POST['python'];
    $java = $_POST['java'];
    $dbms = $_POST['dbms'];
    $webtech = $_POST['webtech'];

    $total = $python + $java + $dbms + $webtech;
    $percentage = $total / 4;

    if($percentage >= 90)
        $grade = "A";
    elseif($percentage >= 75)
        $grade = "B";
    elseif($percentage >= 60)
        $grade = "C";
    else
        $grade = "Fail";

    $sql = "UPDATE student SET
            python='$python',
            java='$java',
            dbms='$dbms',
            webtech='$webtech',
            total='$total',
            percentage='$percentage',
            grade='$grade'
            WHERE rollno='$rollno'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Marks Added Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Marks</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Add Marks</h2>

<form method="post">

<input type="text" name="rollno" placeholder="Roll Number" required>

<input type="number" name="python" placeholder="Python Marks" required>

<input type="number" name="java" placeholder="Java Marks" required>

<input type="number" name="dbms" placeholder="DBMS Marks" required>

<input type="number" name="webtech" placeholder="Web Technology Marks" required>

<button type="submit" name="submit">
Submit Marks
</button>

</form>

</div>

</body>
</html>
