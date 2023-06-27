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
    <title>Add Manager</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
        <form method="POST" action="manager2.php">
        <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Add the Manager</div>
      <div class="input-container ic1">
        <input type="text" placeholder="Name" name="m_name" class="form-control required" required />
      </div>
      <div class="input-container ic2">
        <input  type="email" placeholder="Email" name="m_email" class="form-control required" required />
      </div>
      <div class="input-container ic2">
        <input type="text" placeholder="Venue ID" name="venue_id" class="form-control required" required />
      </div>
      <button type="text" class="submit">Add</button>
    </div>
        </form>
</body>
</html>