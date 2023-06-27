<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect user to login page if not logged in
    header('Location: login.php');
    exit;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="home_css/bootstrap.min.css">
	<link rel="stylesheet" href="home_css/animate.min.css">
	<link rel="stylesheet" href="home_css/font-awesome.min.css">
  	<link rel="stylesheet" href="home_css/component.css">
	
    <link rel="stylesheet" href="home_css/owl.theme.css">
	<link rel="stylesheet" href="home_css/owl.carousel.css">
	<link rel="stylesheet" href="home_css/vegas.min.css">
	<link rel="stylesheet" href="home_css/style.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/user.jpg" alt="image">
        <div class="card-body">
          <h4 class="card-title">User</h4>
          <div class="card-buttons">
          <a href="user_form.php" class="btn btn-info" role="button">Create</a>
          <a href="all_users.php" class="btn btn-info" role="button">View</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/manager.jpg" alt="image2">
        <div class="card-body">
          <h4 class="card-title">Manager</h4>
          <div class="card-buttons">
          <a href="manager_form.php" class="btn btn-info" role="button">Create</a>
          <a href="all_managers.php" class="btn btn-info" role="button">View</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/venue.jpg" alt="image3">
        <div class="card-body">
          <h4 class="card-title">Venue</h4>
          <div class="card-buttons">
          <a href="venue_form.php" class="btn btn-info" role="button">Create</a>
          <a href="all_venues.php" class="btn btn-info" role="button">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/caterers.jpg" alt="image4">
        <div class="card-body">
         <h4 class="card-title">Caterer</h4>
         <div class="card-buttons">
         <a href="caterer_form.php" class="btn btn-info" role="button">Create</a>
         <a href="all_caterers.php" class="btn btn-info" role="button">View</a>
         </div>
        </div>
     </div>
    </div>
    <div class="col-md-4">
     <div class="card">
<img class="card-img-top" src="images/staff.jpg" alt="image5">
<div class="card-body">
<h4 class="card-title">Staff</h4>
<div class="card-buttons">
<a href="staff_form.php" class="btn btn-info" role="button">Create</a>
<a href="all_staff.php" class="btn btn-info" role="button">View</a>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<img class="card-img-top" src="images/event.jpg" alt="image6">
<div class="card-body">
<h4 class="card-title">Event</h4>
<div class="card-buttons">
<a href="event_form.php" class="btn btn-info" role="button">Create</a>
<a href="all_events.php" class="btn btn-info" role="button">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="logout.php" class="btn btn-info logout" role="button">Logout</a>
</body>
</html>
