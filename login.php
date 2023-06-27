<html><head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="wrapper" style="background-image: url('background.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="logo.jpg" alt="">
            </div>
            <form method="POST" action="">
                <h3>Login</h3>
                <div class="form-wrapper">
                    <input type="text" style="background-color:rgba(255, 255, 255, 0.5)" name="a_email" placeholder="Email Address" class="form-control required">
                    
                </div>
                <div class="form-wrapper">
                    <input type="password" name="password" style="background-color:rgba(255, 255, 255, 0.5"  placeholder="Password" class="form-control required">
                </div>
                <button type="submit" name="login1">Login
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
                </form>
                <div class="pt-3">
            <small class="text-muted">
                New Admin? <a href="signup.php">Register</a>
            </small>
            <br>
            <hr>
            <small class="text-muted">
                <a href="userquery_form.php">Are you a User?</a>
            </small>
            </div>
        <?php
            session_start();
            
            if(isset($_POST['login1'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"ems3");
                $query = "select * from admin where a_email = '$_POST[a_email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['a_email'] == $_POST['a_email']){
                        if($row['password'] == $_POST['password']){
                            $_SESSION['a_name'] = $row['a_name'];
                            $_SESSION['a_email'] = $row['a_email'];
                            $_SESSION['admin_id'] = $row['admin_id'];
                            $_SESSION['logged_in'] = true;
                            header("Location:dashboard.php");
                        }
                        else{
                             echo '<script>alert("Wrong Password")</script>';
                        }
                    }
                }
            }
        ?>
        </div>
        </div>
    </div>
    

</body></html>