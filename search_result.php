<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Result</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Search Student Result</h2>

<form method="post">

<input type="text" name="rollno"
placeholder="Enter Roll Number"
required>

<button type="submit" name="search">
Search
</button>

</form>

<?php

if(isset($_POST['search']))
{
    $rollno = $_POST['rollno'];

    $sql = "SELECT * FROM student
            WHERE rollno='$rollno'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);

        echo "<h3>Result Card</h3>";

        echo "Roll No : ".$row['rollno']."<br><br>";
        echo "Name : ".$row['name']."<br><br>";
        echo "Department : ".$row['department']."<br><br>";

        echo "Python : ".$row['python']."<br><br>";
        echo "Java : ".$row['java']."<br><br>";
        echo "DBMS : ".$row['dbms']."<br><br>";
        echo "Web Technology : ".$row['webtech']."<br><br>";

        echo "Total : ".$row['total']."<br><br>";
        echo "Percentage : ".$row['percentage']."<br><br>";
        echo "Grade : ".$row['grade']."<br><br>";
    }
    else
    {
        echo "Student Not Found";
    }
}
?>

</div>

</body>
</html>
