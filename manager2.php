<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect user to login page if not logged in
    header('Location: login.php');
    exit;
}
$connection = mysqli_connect("localhost","root","");
if (!$connection) {
    die('Error: Could not connect: ' . mysqli_error($connection));
}
$db = mysqli_select_db($connection,"ems3");
if (!$db) {
    die('Error: Could not select database: ' . mysqli_error($connection));
}

$email = $_POST['m_email'];
$name = $_POST['m_name'];
$venue_id = $_POST['venue_id'];


$query = "SELECT COUNT(*) as count 
FROM manager, venue 
WHERE m_email = '$email' 
AND venue.venue_id = '$venue_id' 
AND m_email NOT IN (SELECT m_email FROM manager) 
AND venue.venue_id IN (SELECT venue_id FROM venue)";

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

if($row['count'] == 0) {
    $query = "INSERT INTO manager(venue_id,m_name,m_email) VALUES('$venue_id','$name','$email')";
    header("Location: dashboard.php");
} else {
    echo '<script>alert("Manager already exist"); setTimeout(function(){window.location.href = "manager_form.php";}, 500);</script>';
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>