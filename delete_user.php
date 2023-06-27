<?php
/*session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect user to login page if not logged in
    header('Location: login.php');
    exit;
}*/
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"ems3");

$usersId = $_POST['usersId'];

$query = "DELETE FROM users WHERE user_id = '$usersId'";
$query_run = mysqli_query($connection, $query);

if ($query_run) {
  echo "User deleted successfully";
} else {
  echo "Error: " . mysqli_error($connection);
}
?>
