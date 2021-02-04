
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

$sql = "SELECT * FROM plantedtreerecord";
$result = $conn->query($sql);
?>
<?php 
include('include/header.php');
?>
<div class="container-lg py-4">
  <h2 class="text-center mb-4">List of Projects </h2>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Project ID</th>
          <th>Project Name</th>
          <th>Province</th>
          <th>District</th>
          <th>City</th>
          <th>Purchased Trees</th>
          <th>Planted Trees</th>
          <th>Area Covered</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo
            "<tr>
              <td>" .$row["id"]. "</td>
              <td>" .$row["ProjectName"]. "</td>
              <td>" .$row["Province"]. "</td>
              <td>" .$row["District"]. "</td>
              <td>" .$row["City"]. "</td>
              <td>" .$row["PurchasedTrees"]. "</td>
              <td>" .$row["PlantedTrees"]. "</td>
              <td>" .$row["AreaCovered"]. "</td>
            </tr>";
          }
        } else {
          echo 
          "<tr>
            <td colspan='7'>0 results</td>
          </tr>";
        }
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</div>
<?php 
include('include/footer.php');
?>