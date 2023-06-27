<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Query</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">EVENT MANAGEMENT</a>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="registerbox">
        <h2>Enter User ID</h2>
        <br>
        <form method="POST" action="userquery2.php">
            <div class="form-group">    
                <label for="name">User ID:</label>
                <input type="text" name="user_id" class="form-control required" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    </div>
</body>
</html>