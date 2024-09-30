<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>
    <div class="container2">
        <h1>All Student's Information</h1><br><br>
        <table border=1>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Department</th>
                <th>Batch</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th colspan="2">Operations</th>
            </tr>    


<!------- PHP CODE ------->    
<?php
$con = mysqli_connect("localhost", "root", "", "student");
error_reporting(0);

$query = "SELECT * FROM information";
// $query = "SELECT * FROM information WHERE Department='CSE'";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);

// Display table content
if ($total != 0) {
    while($result = mysqli_fetch_array($data)) {
        echo "<tr>
                <td>$result[Name]</td>
                <td>$result[ID]</td>
                <td>$result[Department]</td>
                <td>$result[Batch]</td>
                <td>$result[Mobile]</td>
                <td>$result[Gender]</td>
                <td><button class=btn1>
                    <a href='update.php?
                        sn=$result[Name]
                        &si=$result[ID]
                        &sd=$result[Department]
                        &sb=$result[Batch]
                        &sm=$result[Mobile]
                        &sg=$result[Gender]'>Edit
                    </a>
                </button></td>
                <td><button class=btn2>
                <a onclick=' return checkDelete()' href='delete.php?si=$result[ID]'>Delete</a>
                </button></td>
            </tr>";   
    }
    echo "</table>";
} else {
    echo "No Records Found!";
}
?>

<!------- Javscript Code ------->
<script>
function checkDelete() {
    return confirm('Are you sure you want to delete this data?');
}
</script>


    </div>
</section>
</body>
</html>