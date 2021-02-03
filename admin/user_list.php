<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, first_name, last_name FROM user";
$result = $conn->query($sql);
?>
<h2 align="Center">List of User </h2>
<table class="table table-hover">
 <tr>   <th>User ID</th>
    <th>First Name</th>
    <th>Last Name</th>
 </tr>

<?php if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

     echo " <tr> <td>" . $row["id"]. "</td> <td>". $row["first_name"]."</td> <td>".$row["last_name"] ."</td></tr>";


    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>