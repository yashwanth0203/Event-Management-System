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

$email = $_POST['c_email'];
$name = $_POST['c_name'];
$address = $_POST['c_address'];

$query = "SELECT COUNT(*) as count FROM caterers WHERE c_email = '$email'";
$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

if($row['count'] == 0) {
    $query = "INSERT INTO caterers(c_name,c_email,c_address) VALUES('$name','$email','$address')";
    header("Location: dashboard.php");
} else {
    echo '<script>alert("Caterer already exists"); setTimeout(function(){window.location.href = "caterer_form.php";}, 500);</script>';
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>