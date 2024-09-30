<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <section>
        <div class="container">
        <!--Will change update to updated successful-->
            <h1>Update Information</h1><br><br>
            <form action="#" method="POST" enctype="multipart/form-data">
                <h3>Name: </h3>
                <input placeholder="Enter Name" type="text" name="sName" value="<?php echo $_GET['sn'] ?>"><br><br>

                <h3>ID: </h3>
                <input placeholder="Enter ID" type="text" name="sId" value="<?php echo $_GET['si'] ?>"><br><br>

                <h3>Department: </h3>
                <input placeholder="Enter Department" type="text" name="sDept" value="<?php echo $_GET['sd'] ?>"><br><br>

                <h3>Batch: </h3>
                <input placeholder="Enter Batch" type="text" name="sBatch" value="<?php echo $_GET['sb'] ?>"><br><br>

                <h3>Mobile: </h3>
                <input placeholder="Enter Mobile" type="text" name="sMob" value="<?php echo $_GET['sm'] ?>"><br><br>

                <h3>Gender: </h3>
                <input placeholder="Enter Gender" type="text" name="sGen" value="<?php echo $_GET['sg'] ?>"><br><br>

                <input id="btn" type="submit" value="Update" name="submit">
            </form>
        </div>    
    </section>

</body>
</html>


<?php
$con = mysqli_connect("localhost", "root", "", "student");
error_reporting(0);

$sName = $_POST['sName'];
$sId = $_POST['sId'];
$sDept = $_POST['sDept'];
$sBatch = $_POST['sBatch'];
$sMob = $_POST['sMob'];
$sGen = $_POST['sGen'];

$query = "update information set name='$sName', department='$sDept', batch='$sBatch', mobile='$sMob', gender='$sGen' where id='$sId'";

if ($_POST['submit']) {
    $data = mysqli_query($con, $query);
    if ($data) {
        echo "Record Updated.<a href='display.php'>Check Update List Here</a>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/test/display.php">
        <?php
    } else {
        echo "Record Updated failed!";
    }
} 

?>