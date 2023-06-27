
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Events</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="tables.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head$user_id>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">EVENT MANAGEMENT</a>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="registerbox">
        <h2>
            User Events
        </h2>
        <br>
        <div>
  <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"ems3");
    $user_id = $_POST['user_id'];
    $query = "select * from events where user_id = '$user_id' ";
    $query_run = mysqli_query($connection,$query);
    
    // Check if the query was successful
    if ($query_run) {
      // Print the table header
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>Event ID</th>";
      echo "<th>Event Name</th>";
      echo "<th>Event Date</th>";
      echo "<th>Venue ID</th>";
      echo "<th>Staff ID</th>";
      echo "<th>Caterer ID</th>";
      echo "<th>User ID</th>";
      echo "<th>Number of Attendees</th>";
      echo "</tr>";
      
      // Print the table rows
      while ($row = mysqli_fetch_assoc($query_run)) {
        echo "<tr>";
        echo "<td>" . $row['event_id'] . "</td>";
        echo "<td>" . $row['e_name'] . "</td>";
        echo "<td>" . $row['e_date'] . "</td>";
        echo "<td>" . $row['venue_id'] . "</td>";
        echo "<td>" . $row['staff_id'] . "</td>";
        echo "<td>" . $row['caterer_id'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['no_of_attendees'] . "</td>";
        echo "</tr>";
    }

// Close the table
echo "</table>";
} else {
echo "Error: " . mysqli_error($connection);
}
?>
</div>

    </div>
    </div>
</body>
</html>