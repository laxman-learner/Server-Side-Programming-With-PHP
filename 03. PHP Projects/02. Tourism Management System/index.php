<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Saha Yatri</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/x-icon" href="./fav.jpg">
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!--  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
  <!-- Owl Carousel Assets -->
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Font Awesome -->
  <!--animate-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="font/css/font-awesome.min.css" rel="stylesheet">
  <style>

    body{
      font-size: 20px;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      
    }

    p{
      color: black;
      line-height: 30px;
      letter-spacing: 2px;
    }
    .wrap{
  position: relative;
}

video {
  display: inline;
  top: 0;
  left: 0;
  width: 100%;
  height: 600px;
  object-fit: cover;
  z-index: -1; /* Set the video to the background */
}

.txt{
  position: absolute; 
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1; /* Set the text to the foreground */
  font-size: 40px;
  color:#fff;
}

.book {
  display: flex;
  justify-content: center;
  align-items: center;
  
}
.book button a{
  font-size: 25px;
  color: #000;
}
.book button a:active{
  text-decoration: none;
}


  </style>
</head>

<body>
 <?php include('includes/header.php'); ?>
 <!--/.header-->
  <div class="wrap">
     <video src="bgvid.mp4" type="video/mp4" autoplay muted loop></video>
 <div class="txt">
    <h1>Your Gateway to Far Western Adventures</h1><br>
 <div class="book"><button class="btn btn-primary"><a href="#" data-toggle="modal" data-target="#myModal4" >&nbsp; Let's Travel</a></button></div>
  </div>
</div>
  
<section id="aboutUs" class="secPad">
  <div class="container">

    <div class="heading text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <!-- Heading -->
      <h1 style="color: green; font-weight:bold;">About Us</h1>
      <p>We are passionate about providing exceptional travel experiences and creating unforgettable memories for our clients</p>
    </div>
    <div class="row adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <div class="col-md-4">
        <img src="./aboutUs.jpg" alt="" class="img-responsive img-thumbnail">
      </div>
      <div class="col-md-8">
        <p>Our mission is to be your trusted partner in exploring the world. We aim to deliver outstanding travel management services that encompass a seamless blend of comfort, adventure, and cultural immersion. We are dedicated to ensuring your journey is not just a vacation but an enriching experience that broadens your horizons and leaves you with lifelong memories. </p> 
      </div>
    </div>
  </div>   
</section>


<!--Package-->
<section id="packages" class="secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h1>Most Popular Packages</h1>
    </div>
    <div class="">
      <h1>Package List</h1>
      <?php $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $result)
        { 
          ?>
          <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
              <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
              <h4> <?php echo htmlentities($result->PackageName);?></h4>
              <h6> <?php echo htmlentities($result->PackageType);?></h6>
              <p><b></b> <?php echo htmlentities($result->PackageLocation);?></p>
              <p><b>Features: </b> <?php echo htmlentities($result->PackageFetures);?></p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
              <h5>Rs. <?php echo htmlentities($result->PackagePrice);?></h5>
              <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php 
        }
      } ?>
    </div>
    <div class="clearfix"></div>   
  </div>
</section>

<section id="portfolio" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Gallery</h2>
      <p>Explore the Wonders of Far-Western, Nepal</p>
    </div>
    <div class="row">            
      <div class="col-md-12">
        <div class="row">
          <div class="portfolio-items clearfix papper " id="3" >
            <article class="col-sm-4  isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="img/Apinampa.jpg" alt="" height="250px" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/Apinampa.jpg" class="fancybox">                                                
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="img/badimalika.jpg" alt="" height="250px" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/badimalika.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>


            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="img/bridge.jpg" alt="" height="250px" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/bridge.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="img/chhadlek.jpg" alt="" height="250px"  />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/chhadlek.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="img/lake.jpg" alt="" height="250px" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/lake.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="img/ramaroshan.jpg" alt="" height="250px"/>
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/ramaroshan.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="img/Shuklaphanta.jpg" alt="" height="250px"/>
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/Shuklaphanta.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="img/temple.jpg" alt="" height="250px"/>
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/temple.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="img/unknown.jpg" alt="" height="250px"/>
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="img/unknown.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Contact -->
<section id="contactUs" class="page-section secPad">
  <div class="container">
    <div class="row">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Let's Keep In Touch!</h2>
        <p>Thank you for visiting our site, please fill out the form below.</p>
      </div>
    </div>
    <div class="row mrgn30">
      <div class="col-sm-12 col-md-8">
        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form name="sentMessage" id="contactForm"  validate>
          <h3>Contact Form</h3>
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" 
              placeholder="Full Name" id="name" required
              data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>
            </div>
          </div> 	
          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email" 
              id="email" required
              data-validation-required-message="Please enter your email" />
            </div>
          </div> 	

          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <textarea rows="10" cols="100" class="form-control" 
              placeholder="Message" id="message" required
              data-validation-required-message="Please enter your message" minlength="5" 
              data-validation-minlength-message="Min 5 characters" 
              maxlength="999" style="resize:none"></textarea>
            </div>
          </div> 		 
          <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right">Send</button><br />
        </form>
      </div> 

      <!-- signup -->
      <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>     
      <!-- //signin -->
      <div class="col-sm-12 col-md-4">
        <br> <hr>
        <h2>Address:</h2>
        <address>
          <p>Farwest Tour and Travels<br>
         Mahendranagar, Kanchanpur<br></p>
        </address>
        <hr>
        <p>Phone : 099-520199</p>
        <hr>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<?php include('includes/footer.php'); ?>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
