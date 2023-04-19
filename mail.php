<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "knandugoud1234@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo"

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO Meta Tags -->
    <meta name="description" content="" />
    <meta name="author" content="Your name" />

    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->

    <title>Abhedya</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <!-- Favicon  -->
    <link rel="icon" href="images/Logo1.png" />

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/abhedya-style.css">
  </head>

  <body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">ABHEDYA</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link"><span data-hover="Inauguration">Inauguration</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link"><span data-hover="About Us">About Us</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="team.html" class="nav-link"><span data-hover="Team">Team</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="events.html" class="nav-link"><span data-hover="Events">Events</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="Registration.html" class="nav-link"><span data-hover="Register">Register</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <p> Submitted Sucessfully go to home page</p>
    
    <!-- FOOTER -->
  
    <section class="foter">
        <div class="footer py-5">
            <div class="container">
                 <div class="row">
  
                    <div class="text-center col-lg-12 col-12">
                        <div class="footer-social">
                        <a href="#"><i class=" uil uil-facebook"></i></a>
                        <a href="#"><i class=" uil uil-instagram"></i></a>
                        <a href="#"><i class=" uil uil-github"></i></a>
                        <a href="#"><i class=" uil uil-linkedin"></i></a>
                        </div>
                     </div>
                    <div class="col-lg-12 col-12">
                        <p class="copyright-text text-center">Copyright &copy; 2023<a rel="nofollow" href="#"> Abhedya </a>Vignana Bharathi Institue of Technology. All rights reserved</p>
                        <p class="copyright-text text-center">Designed by K.Nandu</a></p>
                    </div>
                 </div>
            </div>
        </div>
    </section>
  
  
     <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/Headroom.js"></script>
     <script src="js/jQuery.headroom.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/theme.js"></script>
  
  
    </body>
    </html>


";

?>
