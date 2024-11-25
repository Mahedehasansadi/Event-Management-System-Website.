<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Evento!!!</title>
  <style>
.typewriter h2 {
  color: goldenrod;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .01em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

        /* Style for the container */
        video {
            align-items: center;
            text-align: center;
        }

        /* Style for the video */
        video {
            width: 600px; /* Adjust width as needed */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 15px; /* Add space between video and description */
        }
        .list-group-item:first-child {
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .list-group-item.active{
            border-color: #00125100;
        }
.event-package-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.event-package {
  flex: 1;
  margin: 20px;
  padding: 20px;
  background-color: #f8f8f8;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease;
}

.event-package:hover{
  transform: translateY(-5px);
}

.event-package h3 {
  background-color: #E0115F;
  border-radius: 5px;
  font-family: 'Great Vibes', cursive;
  font-size: 24px;
  color: #f8f8f8;
  margin-bottom: 10px;
}

.event-package p {
  font-family: 'Arial', sans-serif;
  font-size: 16px;
  color: #666;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}
/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange }
}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <?Php include('includes/header.php'); ?>
 <!-- END nav -->
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2" style="font-family: 'Great Vibes', cursive;"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Package <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread" style="font-family: 'Great Vibes', cursive;">Package</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <div class="typewriter"><h2 style="font-family: 'Great Vibes', cursive;">Choose Your Perfect Package</h2></br></div>
        <video src="videos/event_promo.mp4" autoplay loop muted></video>
      </div>
    </div>
    <div class="event-package-section">
  <div class="event-package">
    <h3>Elite</h3>
    <p>The Elite Package offers a premium experience, providing top-notch services and amenities tailored to clients who seek luxury and exclusivity. 
    </p>
  </div>
  <div class="event-package">
    <h3>Concert Package</h3>
    <p>The Concert Package is designed for clients hosting large-scale events such as concerts, music festivals, or entertainment shows.
    </p>
  </div>
  <div class="event-package">
    <h3>Corporate Package</h3>
    <p>The Corporate Package specializes in organizing professional corporate events, 
      conferences, seminars, product launches, and networking gatherings. 
    </p>
  </div>
  <div class="event-package">
    <h3>Gold Package</h3>
    <p>The Gold Package is a comprehensive event solution suitable for various occasions, including weddings, anniversaries, birthdays, and social gatherings. 
    </p>
  </div>
  <div class="event-package">
    <h3>Elegant Package</h3>
    <p>The Elegant Package is ideal for clients seeking a refined and tasteful event experience without compromising on style and sophistication.
    </p>
  </div>
</div>

    <div class="row">
      <?php
      $sql="SELECT * from tblpackage";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {  
          ?>
          <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container mt-4">
              <div class="row d-flex no-gutters">
              <div class="col-md-6 d-flex"> 
          <div class="cimg d-flex align-items-center justify-content-center py-5 py-md-0" style="margin-bottom: 50px;">
           <img src="admin/uploads/<?php  echo $row->PackageImage;?>" height="400px" width="700px"/>
          </div>
              </div>
              <div class="col-md-6 pl-md-5 pt-md-5">
					<div class="row justify-content-start py-5"> 
           <div class="block-7">
              <div class="text-center">
                <h4 class="heading-2" style="font-size:32px;color:#4169E1;font-family: 'Great Vibes', cursive;"><?php  echo htmlentities($row->PackageName);?></h4>
                <p class="list-group-item bg-danger active"style="color:#4169E1;padding-top: 12px;font-family: 'Great Vibes', cursive;"><span class="price"><sup style="font-size:15px;color:white;">Tk</sup> <span class="number" style="font-size:30px;color:white;"><?php  echo htmlentities($row->PackagePrice);?></span></span><p>
                <p style="font-family: 'Great Vibes', cursive;">This Package includes:</p>  
              </div>
            </div>              
            <ul class="list-group" type="none">
                <?php
                $packageItems = explode(',',$row->PacDes);
                foreach($packageItems as $item){
                  echo '<div class="block-11"><li class="list-group-item  list-group-item-light" style="font-family: Great Vibes, cursive;">'.trim($item).'</li></div>';
                }
                ?>
                <a href="book_package.php?bookid=<?php echo $row->ID;?>" class="btn btn-primary2 px-4 py-3" style="font-family: 'Great Vibes', cursive;">Book</a>
              </ul>
          </div>
              </div>
              </div>
            </div>
          </section>
          <?php 
          $cnt=$cnt+1;
        }
      } ?>
    </div>
  </div>
</section>

<?Php include('includes/footer.php'); ?>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>