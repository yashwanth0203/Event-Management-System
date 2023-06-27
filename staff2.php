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

$email = $_POST['s_email'];
$name = $_POST['s_name'];


$query = "SELECT COUNT(*) as count FROM staff WHERE s_email = '$email'";
$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

if($row['count'] == 0) {
    $query = "INSERT INTO staff(s_name,s_email) VALUES('$name','$email')";
    header("Location: dashboard.php");
} else {
    echo '<script>alert("Staff already exists"); setTimeout(function(){window.location.href = "staff_form.php";}, 500);</script>';
    
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>