<?php
$con = mysqli_connect("localhost", "root", "", "student");
error_reporting(0);

$sId = $_GET['si'];

$query = "delete from information where id='$sId'";

$data = mysqli_query($con, $query);

if ($data) {  
    echo "Record Deleted From Table";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/test/display.php">
    <?php

} else {
    echo "Sorry, Delete Process Failed!";
}

?>