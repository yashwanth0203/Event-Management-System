<?php
  // Start the session
  session_start();
  
  
  // Connect to the database
  $connection = mysqli_connect("localhost", "root", "");
  if (!$connection) {
      die('Error: Could not connect: ' . mysqli_error($connection));
  }
  $db = mysqli_select_db($connection, "ems");
  if (!$db) {
      die('Error: Could not select database: ' . mysqli_error($connection));
  }
  
  // Retrieve the form data
  $name = $_POST['e_name'];
  $venue_id = $_POST['venue_id'];
  $date = $_POST['e_date'];
  $user_id = $_POST['user_id'];
  $staff_id = $_POST['staff_id'];
  $caterer_id = $_POST['caterer_id'];
  $no_of_attendees = $_POST['no_of_attendees'];
  
  // Select the number of rows in the events table with the same venue, user, staff, and caterer IDs
  $query = "SELECT COUNT(*) as count 
FROM events ,venue  ,users, caterers, staff
WHERE venue.venue_id = '$venue_id'
AND users.user_id = '$user_id'
AND staff.staff_id = '$staff_id'
AND caterers.caterer_id = '$caterer_id'
";
  $result = mysqli_query($connection, $query);
  if ($result === FALSE) {
      die('Error: ' . mysqli_error($connection));
  }
  $row = mysqli_fetch_assoc($result);
  
  // Select the capacity of the venue with the specified venue ID
  $query1 = "SELECT venue.capacity FROM venue WHERE venue_id = '$venue_id'";
  $query_run = mysqli_query($connection, $query1);
  $row1 = mysqli_fetch_assoc($query_run);
  
  // Select the admin_id of the logged in admin
  $admin_id = $_SESSION['admin_id'];
  $query2 = "SELECT admin_id FROM admin WHERE admin_id = '$admin_id'";
  $query_run = mysqli_query($connection, $query2);
  $row2 = mysqli_fetch_assoc($query_run);
  
  // If there are no rows in the events table with the same venue, user, staff, and caterer IDs, and the number of attendees is less than or equal to the capacity
  // If there are no rows in the events table with the same venue, user, staff, and caterer IDs, and the number of attendees is less than or equal to the capacity of the venue, insert a new row into the events table
  if ($row['count'] == 0 && $no_of_attendees <= $row1['capacity']) {
    $query = "INSERT INTO events(e_name, e_date, venue_id,  staff_id, caterer_id, user_id, admin_id, no_of_attendees) VALUES('$name', '$date', '$venue_id', '$staff_id', '$caterer_id', '$user_id', '$row2[admin_id]', '$no_of_attendees')";
    header("Location: admin_dashboard.php");
} else {
    header("Location: event.php");
}

$result = mysqli_query($connection, $query);
if ($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

// Close the database connection
mysqli_close($connection);
?>
