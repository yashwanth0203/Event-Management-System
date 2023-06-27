<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Event Management</title>
<!--
Snapshot Template
http://www.templatemo.com/tm-493-snapshot

Zoom Slider
https://vegas.jaysalvat.com/

Caption Hover Effects
http://tympanus.net/codrops/2013/06/18/caption-hover-effects/

-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous"
  referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="home_css/bootstrap.min.css">
	<link rel="stylesheet" href="home_css/animate.min.css">
	<link rel="stylesheet" href="home_css/font-awesome.min.css">
  	<link rel="stylesheet" href="home_css/component.css">
	
    <link rel="stylesheet" href="home_css/owl.theme.css">
	<link rel="stylesheet" href="home_css/owl.carousel.css">
	<link rel="stylesheet" href="home_css/vegas.min.css">
	<link rel="stylesheet" href="home_css/style.css">

	<!-- Google web font  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section  -->

  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="#top" class="navbar-brand smoothScroll">Magical Moments</a>
      </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#top" class="smoothScroll"><span>Home</span></a></li>
            <li><a href="#about" class="smoothScroll"><span>About</span></a></li>
            <li><a href="login.php" id="myLink"><span>Login</span></a></li>
            <li><a href="signup.php"><span>Register</span></a></li>
            <li><a href="#gallery" class="smoothScroll"><span>Services</span></a></li>
            <li><a href="#contact" class="smoothScroll"><span>Contact</span></a></li>
          </ul>
       </div>

    </div>
  </div>


<!-- Home section -->

<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">Manage your Event</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s">The role of an event planner is to produce an event that exceeds expectations, is memorable and leaves a lasting impression.Event planning is the art of telling a story through a live experience.</p>
      </div>
      <a href="https://wa.me/918088466300" class="whatsapp_float" target="_blank" rel="noopener noreferrer">
  <i class="fa fa-whatsapp whatsapp-icon"></i>
</a>
    </div>
  </div>
</section>


<!-- About section -->

<section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-thumb">
          <h1 style="color: aliceblue;">About</h1>
          <p style="color: burlywood;">Welcome to our Event Management System, a cutting-edge database management system designed to streamline the planning and execution of events of all sizes. Our system offers a wide range of features to help you manage your guests, venues, and event logistics with ease. With our user-friendly interface, you can easily create and manage events . 
Our system also includes advanced features. 
Whether you're planning a small corporate event or a large-scale festival, our Event Management System has everything you need to ensure your event is a success. Let us take the stress out of event planning and help you make your next event unforgettable.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
        <img src="images/WhatsApp Image 2023-01-11 at 00.14.18.jpg" class="img-responsive img-circle" alt="About">
      </div>

      <div class="clearfix"></div>

      <!-- team carousel 
      <div id="team-carousel" class="owl-carousel">

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img1.jpg" class="img-responsive img-circle" alt="Mary">
          </div>
          <h2 class="heading">Mary, CEO</h2>
          <p class="description">Aliquam ac justo est. Praesent feugiat cursus est.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img2.jpg" class="img-responsive img-circle" alt="Jack">
          </div>
          <h2 class="heading">Jack, Founder</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit non.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img3.jpg" class="img-responsive img-circle" alt="Linda">
          </div>
          <h2 class="heading">Linda, Manager</h2>
          <p class="description">Phasellus nec ante in nunc molestie tincidunt ut eu diam.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img4.jpg" class="img-responsive img-circle" alt="Sandy">
          </div>
          <h2 class="heading">Sandy, Director</h2>
          <p class="description">Curabitur vulputate euismod neque et tincidunt.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img5.jpg" class="img-responsive img-circle" alt="Lukia">
          </div>
          <h2 class="heading">Lukia, Fashion</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img6.jpg" class="img-responsive img-circle" alt="George">
          </div>
          <h2 class="heading">George, Admin</h2>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img7.jpg" class="img-responsive img-circle" alt="Day">
          </div>
          <h2 class="heading">Day, Accountant</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img8.jpg" class="img-responsive img-circle" alt="Lynn">
          </div>
          <h2 class="heading">Lynn, Marketing</h2>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        </div>
      </div>

      </div>
       end team carousel -->

    </div>
  </div>
</section>


<!-- Gallery section -->

<section id="gallery">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
          <h1>Services</h1>
          <p>We offer a wide variety of services including event planning and coordination, vendor management,event design and
            styling,and event measurement and evaluation, to ensure a successful and memorable event for our clients.</p>
        </div>
      </div>

      <ul class="grid cs-style-4">
        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/wedding.jpg" alt="image 1"></div>
            <figcaption>
              <h1>Wedding</h1>
              <small>Creating memories that will last a lifetime, our team of dedicated wedding planners are here to bring your vision
                to life. Let us help you make your dream wedding a reality.</small>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/birthday.jpg" alt="image 2"></div>
            <figcaption>
              <h1>Birthday</h1>
              <small>Whether you're planning a milestone birthday party or a surprise bash, we will work closely with you to create a
                truly memorable event.We'll bring your vision to life, and make sure your birthday is one for the books</small>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/corporate.jpg" alt="image 3"></div>
            <figcaption>
              <h1>Corporate</h1>
              <small>Host a successful corporate event with the help of our professional team. We understand the importance of making a lasting impression on your guests, and we'll work closely with you to create an event that exceeds expectations.</small>
            </figcaption>
          </figure>
        </li>

        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/parties.jpg" alt="image 4"></div>
            <figcaption>
              <h1>Parties</h1>
              <small>Making your party come alive with our expert event management!Bringing your vision to life with our customized party planning solutions.</small>
            </figcaption>
          </figure>
        </li>
      </ul>

    </div>
  </div>
</section>


<!-- Contact section -->

<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Send a message</h1>
          <p>Any query?</p>
        </div>

        <form action="mailto:mvyashwanthkumar@gmail.com" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
          <div class="col-md-6 col-sm-6">
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="col-md-6 col-sm-6">
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
          </div>
          <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
            <input type="submit" class="form-control" value="SEND MESSAGE">
          </div>
        </form>

      </div>

    </div>
  </div>
</section>


<!-- Footer section -->

<footer>
	<div class="container">
    
		<div class="row">

			<div class="col-md-12 col-sm-12">
            
               <!-- <ul class="social-icon"> 
                    <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                    <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.0s"></a></li>
                </ul>-->
                <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
  ><i class="fab fa-facebook-f"></i
></a>

<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
  ><i class="fab fa-twitter"></i
></a>

<!-- Google -->
<a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"
  ><i class="fab fa-google"></i
></a>

<!-- Instagram -->
<a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"
  ><i class="fab fa-instagram"></i
></a>

				
			</div>
			
		</div>
        
	</div>
</footer>



<!-- Javascript  -->
<script src="home_js/jquery.js"></script>
<script src="home_js/bootstrap.min.js"></script>
<script src="home_js/vegas.min.js"></script>
<script src="home_js/modernizr.custom.js"></script>
<script src="home_js/toucheffects.js"></script>
<script src="home_js/owl.carousel.min.js"></script>
<script src="home_js/smoothscroll.js"></script>
<script src="home_js/wow.min.js"></script>
<script src="home_js/custom.js"></script>

</body>
</html>