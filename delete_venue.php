<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect user to login page if not logged in
    header('Location: login.php');
    exit;
}
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"ems3");

$venueId = $_POST['venueId'];

$query = "DELETE FROM venue WHERE venue_id = '$venueId'";
$query_run = mysqli_query($connection, $query);

if ($query_run) {
  echo "Venue deleted successfully";
} else {
  echo "Error: " . mysqli_error($connection);
}
?>
