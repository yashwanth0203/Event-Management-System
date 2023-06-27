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
    <title>Create User</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<body>

     <form method="POST" action="user2.php">
        <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Create User</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder="Name" type="text" name="u_name" class="form-control required" required />
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder="Email" type="email" name="u_email" class="form-control required" required />
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder="Address" type="text" name="u_address" class="form-control required" required />
      </div>
      <button type="text" class="submit">Create</button>
    </div>
        </form>
</body>
</html>