<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect user to login page if not logged in
    header('Location: login.php');
    exit;
}
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"ems3");

$catererId = $_POST['catererId'];

$query = "DELETE FROM caterers WHERE caterer_id = '$catererId'";
$query_run = mysqli_query($connection, $query);

if ($query_run) {
  echo "Caterer deleted successfully";
} else {
  echo "Error: " . mysqli_error($connection);
}
?>
