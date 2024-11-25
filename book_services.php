<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
{
	$bid=$_GET['bookid'];
	$name=$_POST['name'];
	$mobnum=$_POST['contact'];
	$email=$_POST['email'];
	$edate=$_POST['eventdate'];
	$est=$_POST['est'];
	$eetime=$_POST['eetime'];
	$vaddress=$_POST['address'];
	$eventtype=$_POST['eventtype'];
	$addinfo=$_POST['info'];
	$bookingid=mt_rand(100000000, 999999999);
	$sql="insert into tblbooking(BookingID,ServiceID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:bookingid,:bid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
	$query=$dbh->prepare($sql);
	$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);
	$query->bindParam(':bid',$bid,PDO::PARAM_STR);
	$query->bindParam(':name',$name,PDO::PARAM_STR);
	$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':edate',$edate,PDO::PARAM_STR);
	$query->bindParam(':est',$est,PDO::PARAM_STR);
	$query->bindParam(':eetime',$eetime,PDO::PARAM_STR);
	$query->bindParam(':vaddress',$vaddress,PDO::PARAM_STR);
	$query->bindParam(':eventtype',$eventtype,PDO::PARAM_STR);
	$query->bindParam(':addinfo',$addinfo,PDO::PARAM_STR);

	$query->execute();
	$LastInsertId=$dbh->lastInsertId();
	if ($LastInsertId>0) {
		echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
		echo "<script>window.location.href ='services.php'</script>";
	}
	else
	{
		echo '<script>alert("Something Went Wrong. Please try again")</script>';
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Decoration Management System - Service booking</title>
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
					<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Booking <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Book Service</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container mt-4 mb-4">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Book Service</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Contact No</label>
													<input type="text" class="form-control" name="contact" id="contact" placeholder="contact">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Event Date</label>
													<input type="date" class="form-control" name="eventdate" id="eventdate" placeholder="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Event Starting Time</label>
													<select type="text" class="form-control" name="est" required="true">
														<option value="">Select Starting Time</option>
														<option value="1 a.m">1 a.m</option>
														<option value="2 a.m">2 a.m</option>
														<option value="3 a.m">3 a.m</option>
														<option value="4 a.m">4 a.m</option>
														<option value="5 a.m">5 a.m</option>
														<option value="6 a.m">6 a.m</option>
														<option value="7 a.m">7 a.m</option>
														<option value="8 a.m">8 a.m</option>
														<option value="9 a.m">9 a.m</option>
														<option value="10 a.m">10 a.m</option>
														<option value="11 a.m">11 a.m</option>
														<option value="12 p.m">12 p.m</option>
														<option value="1 p.m">1 p.m</option>
														<option value="2 p.m">2 p.m</option>
														<option value="3 p.m">3 p.m</option>
														<option value="4 p.m">4 p.m</option>
														<option value="5 p.m">5 p.m</option>
														<option value="6 p.m">6 p.m</option>
														<option value="7 p.m">7 p.m</option>
														<option value="8 p.m">8 p.m</option>
														<option value="9 p.m">9 p.m</option>
														<option value="10 p.m">10 p.m</option>
														<option value="10 p.m">10 p.m</option>
														<option value="12 a.m">12 a.m</option>
													</select>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Event Finish Time</label>
													<select type="text" class="form-control" name="eetime" required="true">
														<option value="">Select Finish Time</option>
														<option value="1 a.m">1 a.m</option>
														<option value="2 a.m">2 a.m</option>
														<option value="3 a.m">3 a.m</option>
														<option value="4 a.m">4 a.m</option>
														<option value="5 a.m">5 a.m</option>
														<option value="6 a.m">6 a.m</option>
														<option value="7 a.m">7 a.m</option>
														<option value="8 a.m">8 a.m</option>
														<option value="9 a.m">9 a.m</option>
														<option value="10 a.m">10 a.m</option>
														<option value="11 a.m">11 a.m</option>
														<option value="12 p.m">12 p.m</option>
														<option value="1 p.m">1 p.m</option>
														<option value="2 p.m">2 p.m</option>
														<option value="3 p.m">3 p.m</option>
														<option value="4 p.m">4 p.m</option>
														<option value="5 p.m">5 p.m</option>
														<option value="6 p.m">6 p.m</option>
														<option value="7 p.m">7 p.m</option>
														<option value="8 p.m">8 p.m</option>
														<option value="9 p.m">9 p.m</option>
														<option value="10 p.m">10 p.m</option>
														<option value="10 p.m">10 p.m</option>
														<option value="12 a.m">12 a.m</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Venue Address</label>
													<textarea name="address" class="form-control" id="address" cols="30" rows="4" placeholder=""></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Type of Event:</label>
													<select type="text" class="form-control" name="eventtype" required="true" >
														<option value="">Choose Event Type</option>
														<?php 

														$sql2 = "SELECT * from   tbleventtype ";
														$query2 = $dbh -> prepare($sql2);
														$query2->execute();
														$result2=$query2->fetchAll(PDO::FETCH_OBJ);

														foreach($result2 as $row)
														{          
															?>  
															<option value="<?php echo htmlentities($row->EventType);?>"><?php echo htmlentities($row->EventType);?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Additional Information</label>
													<textarea name="info" class="form-control" id="info" cols="30" rows="4" placeholder=""></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Book" name="submit" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/eventpromotion.webp);">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 py-4">
					<div class="row">
						<div class="col-md-6 ftco-animate d-flex align-items-center">
							<h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
						</div>
						<div class="col-md-6 d-flex align-items-center">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex">
									<input type="text" class="form-control" placeholder="Enter email address">
									<input type="submit" value="Subscribe" class="submit px-3">
								</div>
							</form>
						</div>
					</div>
				</div>
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