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
    <title>Create an Event</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
        <form method="POST" action="event2.php">
        <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Create an Event</div>
      <div class="input-container ic1">
        <input  type="text" placeholder="Event Name" name="e_name" class="form-control required" required />
      </div>
      <div class="input-container ic2">
        <input type="date" placeholder="Date" name="e_date" class="form-control required" required />
      </div>
      <div class="input-container ic2">
        <input type="text" placeholder="User ID"  name="user_id" class="form-control required" required />
      </div>
      <div class="input-container ic2">
        <input type="text" placeholder="Venue ID"  name="venue_id" class="form-control required" required />
      </div>
      <div class="input-container ic2 scroll-form">
        <input type="text" placeholder="Staff ID"  name="staff_id" class="form-control required" required />
      </div>
      <div class="input-container ic2 scroll-form">
        <input type="text" placeholder="Caterer ID"  name="caterer_id" class="form-control required" required />
      </div>
      <div class="input-container ic2 scroll-form">
        <input type="number" placeholder="Number of Attendees"  name="no_of_attendees" class="form-control required" required />
      </div>
      <button type="text" class="submit">Create</button>
    </div>
        </form>
</body>
</html>