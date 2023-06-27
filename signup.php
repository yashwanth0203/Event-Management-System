<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('background.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="logo1.jpg" alt="">
            </div>
            <form method="POST" action="register3.php">
                <h3>Registration Form</h3>
                <div class="form-wrapper">
                    <input type="text" name="a_name" placeholder="Name" style="background-color:rgba(255, 255, 255, 0.5)" placeholder="Name" class="form-control required" required>
                </div>
                <div class="form-wrapper">
                   
                    <input type="email" style="background-color:rgba(255, 255, 255, 0.5)" name="a_email" placeholder="Email Address" class="form-control required" required>
                    
                </div>
                <div class="form-wrapper">
                    
                    <input type="password" name="password" style="background-color:rgba(255, 255, 255, 0.5"  placeholder="Password" class="form-control required" required>
                    
                </div>
                <div class="form-wrapper">    
                <input type="text" name="address" style="background-color:rgba(255, 255, 255, 0.5)" placeholder="Address"class="form-control required" required>
            </div>
                <button type="submit">Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
            <div class="pt-3">
            <small class="text-muted">
                Account Already Exists? <a href="login.php">Login</a>
            </small>
            
        </div>
        </div>
    </div>
    

</body><!-- This templates was made by Colorlib (https://colorlib.com) --></html>