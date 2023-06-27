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

$address = $_POST['v_address'];
$name = $_POST['v_name'];
$capacity = $_POST['capacity'];

$query = "SELECT COUNT(*) as count FROM venue WHERE v_name = '$name' and v_address='$address'";
$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

if($row['count'] == 0) {
    $query = "insert into venue(v_name,v_address,capacity) values('$name','$address','$capacity')";
    header("Location:dashboard.php");
} else {
    echo '<script>alert("Venue already exists"); setTimeout(function(){window.location.href = "venue_form.php";}, 500);</script>';
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>