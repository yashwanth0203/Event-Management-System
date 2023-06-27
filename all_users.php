<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Users</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="tables.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Magical Moments</a>
            </li>
        </ul>
    </div>
    <!--<div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">All Users</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>-->
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item float-right">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
    <h3>All Users</h3>
    <div class="container">
    <div class="registerbox">
        <br>
        <div>
  <?php
    session_start();
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        // Redirect user to login page if not logged in
        header('Location: login.php');
        exit;
    }
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"ems3");
    
    $query = "SELECT * from users
    ";
    $query_run = mysqli_query($connection,$query);
    //$query1 = "CREATE ";
    //$query_run = mysqli_query($connection,$query1);
    
    // Check if the query was successful
    if ($query_run) {
      // Print the table header
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>User ID</th>";
      echo "<th>Name</th>";
      
      echo "<th>Email</th>";
      echo "<th>Address</th>";
      echo "<th>Delete</th>";
     
      echo "</tr>";
      
      // Print the table rows
      while ($row = mysqli_fetch_assoc($query_run)) {
        echo "<tr>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['u_name'] . "</td>";
        
        echo "<td>" . $row['u_email'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
     
        
        echo "<td><button type='button' class='btn btn-danger delete-btn'>Delete</button></td>";

        echo "</tr>";
    }

// Close the table
echo "</table>";
} else {
echo "Error: " . mysqli_error($connection);
}
?>
<script>
$('.delete-btn').click(function() {
  // Get the event ID from the row
  var usersId = $(this).closest('tr').find('td:first').text();
  
  // Send an AJAX request to delete the event from the database
  $.ajax({
    url: 'delete_user.php',
    method: 'POST',
    data: { usersId: usersId },
    success: function(response) {
      // Update the table
      location.reload();
    },
    error: function(xhr, status, error) {
      console.error(error);
    }
  });
});
</script>
</div>

    </div>
    </div>
</body>
</html>