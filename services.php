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
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .01em; /* Adjust as needed */
  font-family: 'Great Vibes', cursive;
  font-weight: bold;
  font-size: 50px;
  cursor: pointer;
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}
.typewriter1 h2 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  /*border-right: .15em solid blue; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .01em; /* Adjust as needed */
  font-family: 'Great Vibes', cursive;
  font-weight: bold;
  font-size: 50px;
  cursor: pointer;
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}
.typewriter2 h2 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  /*border-right: .15em solid mediumslateblue; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .01em; /* Adjust as needed */
  font-family: 'Great Vibes', cursive;
  font-weight: bold;
  font-size: 50px;
  cursor: pointer;
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}
.typewriter3 h2 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  /*border-right: .15em solid blueviolet; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .01em; /* Adjust as needed */
  font-family: 'Great Vibes', cursive;
  font-weight: bold;
  cursor: pointer;
  font-size: 50px;
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}
.content {
    display: none;
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

        @keyframes slideIn {
    0% {
      transform: translateY(-100%);
    }
    100% {
      transform: translateY(0);
    }
  }

  .animated-table {
    animation: slideIn 1s ease forwards;
  }

  /* Other CSS styles for your table */
  table {
    border-collapse: collapse;
    width: 300px; /* Adjust as needed */
    margin: 0 auto;
  }

  td, th {
    padding: 8px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }
  .animated-table:hover td {
  background-color: #E0115F; /* Change to desired color */
  transform: translateY(-5px);
}
  .services-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.service {
  flex: 1;
  margin: 20px;
  padding: 20px;
  background-color: #f8f8f8;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease;
}

.service:hover {
  transform: translateY(-5px);
}

.service h3 {
  background-color: #E0115F;
  border-radius: 5px;
  font-family: 'Great Vibes', cursive;
  font-size: 24px;
  color: #f8f8f8;
  margin-bottom: 10px;
}

.service p {
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
@keyframes slideRightToLeft {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
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
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php" style="font-family: 'Great Vibes', cursive;">Home <i class="fa fa-chevron-right"></i></a></span> <span style="font-family: 'Great Vibes', cursive;">Services <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread" style="font-family: 'Great Vibes', cursive;">Services</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
      <div class="typewriter" style="font-family: 'Great Vibes', cursive;"><h2>Choose Your Perfect Service</h2></br></div>
      <video src="videos/promo2.mp4" autoplay loop muted></video>
      </div>
    </div>
    <div class="services-section">
  <div class="service">
    <h3>Event Planning</h3>
    <p>We meticulously plan every detail, ensuring a seamless and unforgettable event experience.</p>
  </div>
  <div class="service">
    <h3>Venue Management</h3>
    <p>From lavish ballrooms to picturesque outdoor spaces, we find the perfect venue for your event.</p>
  </div>
  <div class="service">
    <h3>Transport</h3>
    <p>Reliable transportation services to ensure smooth arrivals and departures for you and your guests.</p>
  </div>
  <div class="service">
    <h3>Greeting Cards</h3>
    <p>Personalized greeting cards to add a special touch to your event invitations and thank you notes.</p>
  </div>
  <div class="service">
    <h3>Corporate Events</h3>
    <p>We specialize in organizing corporate events that leave a lasting impression on clients and employees.</p>
  </div>
</div>
    <ul type="none">
    <li>
    <div class="typewriter1">
      <table border="0" class="animated-table" style="width: 100%; text-align: justify;margin-bottom: 10px;">
        <tr>
          <td style="text-align: left; padding: 10px;border-radius: 10px;">
          <h2 class="heading1">Category 1</h2></br>
          </td>
    </tr>
      </table>
      <div id="content1" class="content">
    <div class="row">
      <?php
      $sql="SELECT * from tblservice where Category='Category 1'";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {  
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate" style="margin-bottom: 50px;">
          <img class="ftco-animate" src="admin/uploads/<?php  echo $row->ServiceImage;?>" height="128px" width="246px"/>
            <div class="block-7">
              <div class="text-center">
                <h4 class="heading-2"><?php  echo htmlentities($row->ServiceName);?></h4>
                <span class="price"><sup style="font-size:15px;">Tk</sup> <span class="number" style="font-size:30px;"><?php  echo htmlentities($row->ServicePrice);?></span></span>
                <p><?php  echo substr($row->SerDes,0,50);?></p>
                <a href="book_services.php?bookid=<?php echo $row->ID;?>" class="btn btn-primary px-4 py-3">Book</a>
              </div>
            </div>
          </div>
          <?php 
          $cnt=$cnt+1;
        }
      } ?>
    </div>
      </div>
    </div></li>
    </ul>
    <ul type="none">
    <li>
    <div class="typewriter2">
      <table border="0" class="animated-table" style="width: 100%; text-align: justify;margin-bottom: 10px;">
        <tr>
          <td style="text-align: left; padding: 10px;border-radius: 10px;">
          <h2 class="heading2">Category 2</h2></br>
          </td>
    </tr>
      </table>
      <div id="content2" class="content">
    <div class="row">
      <?php
      $sql="SELECT * from tblservice where Category='Category 2'";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {  
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate" style="margin-bottom: 50px;">
          <img class="ftco-animate" src="admin/uploads/<?php  echo $row->ServiceImage;?>" height="128px" width="246px"/>
            <div class="block-7">
              <div class="text-center">
                <h4 class="heading-2"><?php  echo htmlentities($row->ServiceName);?></h4>
                <span class="price"><sup style="font-size:15px;">Tk</sup> <span class="number" style="font-size:30px;"><?php  echo htmlentities($row->ServicePrice);?></span></span>
                <p><?php  echo substr($row->SerDes,0,50);?></p>
                <a href="book_services.php?bookid=<?php echo $row->ID;?>" class="btn btn-primary px-4 py-3">Book</a>
              </div>
            </div>
          </div>
          <?php 
          $cnt=$cnt+1;
        }
      } ?>
    </div>
      </div>
    </div></li>
    </ul>
    <ul type="none">
    <li>
    <div class="typewriter1">
      <table border="0" class="animated-table" style="width: 100%; text-align: justify;margin-bottom: 10px;">
        <tr>
          <td style="text-align: left; padding: 10px;border-radius: 10px;">
          <h2 class="heading3">Category 3</h2></br>
          </td>
    </tr>
      </table>
      <div id="content3" class="content">
    <div class="row">
      <?php
      $sql="SELECT * from tblservice where Category='Category 3'";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {  
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate" style="margin-bottom: 50px;">
          <img class="ftco-animate" src="admin/uploads/<?php  echo $row->ServiceImage;?>" height="128px" width="246px"/>
            <div class="block-7">
              <div class="text-center">
                <h4 class="heading-2"><?php  echo htmlentities($row->ServiceName);?></h4>
                <span class="price"><sup style="font-size:15px;">Tk</sup> <span class="number" style="font-size:30px;"><?php  echo htmlentities($row->ServicePrice);?></span></span>
                <p><?php  echo substr($row->SerDes,0,50);?></p>
                <a href="book_services.php?bookid=<?php echo $row->ID;?>" class="btn btn-primary px-4 py-3">Book</a>
              </div>
            </div>
          </div>
          <?php 
          $cnt=$cnt+1;
        }
      } ?>
    </div>
      </div>
    </div></li>
    </ul>
    <ul type="none">
    <li>
    <div class="typewriter2">
      <table border="0" class="animated-table" style="width: 100%; text-align: justify;margin-bottom: 10px;">
        <tr>
          <td style="text-align: left; padding: 10px;border-radius: 10px;">
          <h2 class="heading4">Category 4</h2></br>
          </td>
    </tr>
      </table>
      <div id="content4" class="content">
    <div class="row">
      <?php
      $sql="SELECT * from tblservice where Category='Category 4'";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {  
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate" style="margin-bottom: 50px;">
          <img class="ftco-animate" src="admin/uploads/<?php  echo $row->ServiceImage;?>" height="128px" width="246px"/>
            <div class="block-7">
              <div class="text-center">
                <h4 class="heading-2"><?php  echo htmlentities($row->ServiceName);?></h4>
                <span class="price"><sup style="font-size:15px;">Tk</sup> <span class="number" style="font-size:30px;"><?php  echo htmlentities($row->ServicePrice);?></span></span>
                <p><?php  echo substr($row->SerDes,0,50);?></p>
                <a href="book_services.php?bookid=<?php echo $row->ID;?>" class="btn btn-primary px-4 py-3">Book</a>
              </div>
            </div>
          </div>
          <?php 
          $cnt=$cnt+1;
        }
      } ?>
    </div>
      </div>
    </div></li>
    </ul>
    <ul type="none">
    <li>
    <div class="typewriter3">
      <table border="0" class="animated-table" style="width: 100%; text-align: justify;margin-bottom: 10px;">
        <tr>
          <td style="text-align: left; padding: 10px;border-radius: 10px;">
          <h2 class="heading5">Category 5</h2></br>
          </td>
    </tr>
      </table>
      <div id="content5" class="content">
    <div class="row">
      <?php
      $sql="SELECT * from tblservice where Category='Category 5'";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {  
          ?>
          <div class="col-md-6 col-lg-3 ftco-animate" style="margin-bottom: 50px;">
          <img class="ftco-animate" src="admin/uploads/<?php  echo $row->ServiceImage;?>" height="128px" width="246px"/>
            <div class="block-7">
              <div class="text-center">
                <h4 class="heading-2"><?php  echo htmlentities($row->ServiceName);?></h4>
                <span class="price"><sup style="font-size:15px;">Tk</sup> <span class="number" style="font-size:30px;"><?php  echo htmlentities($row->ServicePrice);?></span></span>
                <p><?php  echo substr($row->SerDes,0,50);?></p>
                <a href="book_services.php?bookid=<?php echo $row->ID;?>" class="btn btn-primary px-4 py-3">Book</a>
              </div>
            </div>
          </div>
          <?php 
          $cnt=$cnt+1;
        }
      } ?>
    </div>
      </div>
    </div></li>
    </ul>
  </div>
</section>

<?Php include('includes/footer.php'); ?>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/dropdown.js"></script>
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