<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <div class="container">
            <h1>Student's Information</h1><br><br>
            <form action="#" method="POST" enctype="multipart/form-data">
                <h3 style="margin-left: 13%; text-align: left">Name: </h3>
                <input placeholder="Enter Name" type="text" name="sName"><br><br>

                <h3 style="margin-left: 13%; text-align: left">ID: </h3>
                <input placeholder="Enter ID" type="text" name="sId"><br><br>

                <h3 style="margin-left: 13%; text-align: left">Department: </h3>
                <input placeholder="Enter Department" type="text" name="sDept"><br><br>

                <h3 style="margin-left: 13%; text-align: left">Batch: </h3>
                <input placeholder="Enter Batch" type="text" name="sBatch"><br><br>

                <h3 style="margin-left: 13%; text-align: left">Mobile: </h3>
                <input placeholder="Enter Mobile" type="text" name="sMob"><br><br>

                <h3 style="margin-left: 13%; text-align: left">Gender: </h3>
                <input placeholder="Enter Gender" type="text" name="sGen"><br><br>

                <input id="btn" type="submit" value="Submit" name="submit">
            </form>
        </div>    
    </section>

</body>
</html>


<?php
$con = mysqli_connect("localhost", "root", "", "student");
error_reporting(0);

// Data insertion into database
$sName = $_POST['sName'];
$sId = $_POST['sId'];
$sDept = $_POST['sDept'];
$sBatch = $_POST['sBatch'];
$sMob = $_POST['sMob'];
$sGen = $_POST['sGen'];

$query = "insert into information values ('$sName', '$sId', '$sDept', '$sBatch', '$sMob', '$sGen')";

if ($_POST['submit']) {
    if ($sName != "" && $sId != "" && $sDept != "" && $sBatch != "" && $sMob != "" && $sGen != "") {
        mysqli_query($con, $query);
    } else {
        echo "All fields are required!";
    }
}

?>