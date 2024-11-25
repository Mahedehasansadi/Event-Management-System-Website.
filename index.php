<!DOCTYPE html>
<html lang="en">
<head>
	<style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

:root {
  --theme-color: #3867d6;
}

* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: 0.2s linear;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-padding-top: 7rem;
  scroll-behavior: smooth;
}

body {
  background: #fff;
}

section {
  padding: 2rem 9%;
}

.home .content {
  text-align: center;
  padding-top: 6rem;
  margin: 2rem auto;
  max-width: 70rem;
}

.home .content h3 {
  color: mediumorchid;
  font-size: 4.5rem;
  text-transform: uppercase;
}

.home .content h3 span {
  color: var(--theme-color);
  text-transform: uppercase;
  position: relative;
}

.home .content h3 span::before{
  content: "Wedding";
  color: var(--theme-color);
  animation: words 20s infinite;
}

.home .content h3 span::after{
  content: "";
  position: absolute;
  width: calc(100% + 8px);
  height: 100%;
  background-color: #fff;
  border-left: 2px solid #ff7f50;
  right: -8px;
  animation: cursor .8s infinite, typing 20s steps(14) infinite;
}

.btn {
  margin-top: 1rem;
  display: inline-block;
  padding: 0.8rem 3rem;
  font-size: 1.7rem;
  border-radius: 0.5rem;
  background: #666;
  color: #fff;
  cursor: pointer;
  font-weight: 600;
}

.btn:hover {
  background: var(--theme-color);
}

.home .home-slider .swiper-slide {
  overflow: hidden;
  border-radius: 0.5rem;
  height: 50rem;
  width: 35rem;
}

.home .home-slider .swiper-slide img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.heading {
  text-align: center;
  padding-bottom: 2rem;
  color: #fff;
  text-transform: uppercase;
  font-size: 4rem;
}

.heading span {
  color: var(--theme-color);
  text-transform: uppercase;
}

.service .box-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
  gap: 1.5rem;
}

.service .box-container .box {
  border-radius: 0.5rem;
  background: aquamarine;
  text-align: center;
  padding: 2.5rem;
}

.service .box-container .box i {
  height: 6rem;
  width: 6rem;
  line-height: 6rem;
  border-radius: 50%;
  font-size: 2.5rem;
  background: var(--theme-color);
  color: #fff;
}

.service .box-container .box h3 {
  font-size: 2rem;
  color: mediumvioletred;
  padding: 1rem 0;
}

.service .box-container .box p {
  font-size: 1.4rem;
  color: maroon;
  line-height: 1.8;
}


.reivew .box {
  border-radius: 0.5rem;
  background: lightseagreen;
  padding: 2rem;
  position: relative;
}

.reivew .box .fa-quote-right {
  position: absolute;
  top: 2rem;
  right: 2rem;
  color: var(--theme-color);
  font-size: 5rem;
}

.reivew .box .user {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  padding-bottom: 1rem;
}

.reivew .box .user img {
  height: 7rem;
  width: 7rem;
  border-radius: 50%;
  object-fit: cover;
}

.reivew .box .user h3 {
  font-size: 2rem;
  color: #fff;
}

.reivew .box .user span {
  font-size: 1.5rem;
  color: #eee;
}

.reivew .box p {
  line-height: 2;
  color: #eee;
  padding: 0.5rem 0;
  font-size: 1.6rem;
}

@keyframes cursor {
    to{
        border-left: 2px solid #ff7f5000;
    }
}

@keyframes words {
    0%,20%{
        content: "Wedding & Haldi";
    }
    21%,40%{
        content: "Brithday-Party";
    }
    41%,60%{
        content: "Get-Together";
    }
    61%,80%{
        content: "Commercial Event";
    }
    81%,100%{
        content: "You can count on us";
    }
}

@keyframes typing {
    10%,15%,30%,35%,50%,55%,70%,75%,90%,95%{
        width: 0;
    }
    5%,20%,25%,40%,45%,60%,65%,80%,85%{
        width: calc(100% + 8px);
    }
  }
@keyframes spin {
  0% {
    transform: rotate(360deg);
  }
}

@keyframes change{
    0%
    {
        background-image: url(images/bd13.jpg);
    }
    10%
    {
        background-image: url(images/bd15.jpg);
    }
    20%
    {
        background-image: url(images/bd14.jpg);
    }
    30%
    {
        background-image: url(images/bd16.jpg);
    }
    40%
    {
        background-image: url(images/bd2.jpg);
    }
    50%
    {
        background-image: url(images/bd1.jpg);
    }
    60%
    {
        background-image: url(images/bd3.jpg);
    }
    70%
    {
        background-image: url(images/bd5.jpg);
    }
    80%
    {
        background-image: url(images/bd4.jpg);
    }
    90%
    {
        background-image: url(images/bd6.jpg);
    }
    100%
    {
        background-image: url(images/bd1.jpg);
    }
}
/* media queries  */

@media (max-width: 991px) {
  html {
    font-size: 55%;
  }

  .header {
    padding: 1.5rem 2rem;
  }

  section {
    padding: 2rem;
  }
}

@media (max-width: 768px) {

  .home .content h3 {
    font-size: 4rem;
  }
}

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }

  .home .home-slider .swiper-slide {
    width: 27rem;
  }
}
	</style>
	<title>Evento!!!</title>
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
	<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
</head>
<body>
	<?Php include('includes/header.php'); ?>
	<!-- END nav -->
	<div class="hero-wrap js-fullheight" style="background-image: url('images/banner.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-6 ftco-animate">
					<h1 class="mb-4" style="color:#CCE5FF;font-size:40px;letter-spacing: .05em;font-weight:bold;font-family: 'Great Vibes', cursive;">Let us do the Event, that you have never seen before.</h1>
					<p><a href="services.php" class="btn btn-primary mr-md-4 py-2 px-4" style="font-family: 'Great Vibes', cursive;">Book Service <span class="ion-ios-arrow-forward"></span></a></p>
				</div>
			</div>
		</div>
	</div>

	<section class="home" id="home">
      <div class="content">
        <h3 style="font-family: 'Great Vibes', cursive;">
          where your ideas take off,<br>
          <span></span>
        </h3>
        <a href="#" class="btn" style="font-family: 'Great Vibes', cursive;">Welcome!</a>
      </div>
      <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/home1.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/home2.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/home3.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/home4.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/home5.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/home6.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd1.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd2.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd3.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd4.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd5.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd6.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd7.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd14.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd15.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="images/bd13.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container mt-4">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-items-center justify-content-center py-5 py-md-0" style="background-image:url(images/bd16.jpg);background-repeat: no-repeat;animation: change 55s infinite ease-in-out;">
						
					</div>
				</div>
				<div class="col-md-6 pl-md-5 pt-md-5">
					<div class="row justify-content-start py-5">
						<div class="col-md-12 heading-section ftco-animate">
							<span class="subheading" style="font-family: 'Great Vibes', cursive;">Welcome to Evento!!!</span>
							<h2 class="mb-4" style="font-family: 'Great Vibes', cursive;">Let's make your Events Beautiful than ever</h2>
							<p style="font-family: 'Great Vibes', cursive;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="row ftco-counter py-5" id="section-counter">
						<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="5">0</strong>
								</div>
								<div class="text">
									<span style="font-family: 'Great Vibes', cursive;">Years of <br>Experienced</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="300">0</strong>
								</div>
								<div class="text">
									<span style="font-family: 'Great Vibes', cursive;">Happy <br>Customers</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="30">0</strong>
								</div>
								<div class="text">
									<span style="font-family: 'Great Vibes', cursive;">Unique <br>Designs</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="service" id="service">
      <h1 class="heading" style="font-family: 'Great Vibes', cursive;">our <span style="font-family: 'Great Vibes', cursive;">services</span></h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-envelope"></i>
          <h3 style="font-family: 'Great Vibes', cursive;"><a href="services.php">invitation card design</a></h3>
          <p style="font-family: 'Great Vibes', cursive;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro,
            suscipit.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-photo-video"></i>
          <h3><a href="services.php" style="font-family: 'Great Vibes', cursive;">photos and videos</a></h3>
          <p style="font-family: 'Great Vibes', cursive;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro,
            suscipit.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-music"></i>
          <h3 style="font-family: 'Great Vibes', cursive;"><a href="services.php">entertainment</a></h3>
          <p style="font-family: 'Great Vibes', cursive;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro,
            suscipit.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-car"></i>
          <h3 style="font-family: 'Great Vibes', cursive;"><a href="services.php">enent vehicles</a></h3>
          <p style="font-family: 'Great Vibes', cursive;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro,
            suscipit.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-map-marker-alt"></i>
          <h3 style="font-family: 'Great Vibes', cursive;"><a href="services.php">venue selection</a></h3>
          <p style="font-family: 'Great Vibes', cursive;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro,
            suscipit.
          </p>
        </div>

        <div class="box">
          <i class="fas fa-birthday-cake"></i>
          <h3 style="font-family: 'Great Vibes', cursive;"><a href="services.php">food catering</a></h3>
          <p style="font-family: 'Great Vibes', cursive;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro,
            suscipit.
          </p>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-12 heading-section  text-center ftco-animate">
					<h2 style="font-family: 'Great Vibes', cursive;">Come and Explore Our Events!!!!</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/birthday1.jpg);">
						<a href="images/birthday1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/bussiness.jpg);">
						<a href="images/bussiness.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/article.jpg);">
						<a href="images/article.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/50th.jpg);">
						<a href="images/50th.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/get-together1.jpg);">
						<a href="images/get-together1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/scio.jpg);">
						<a href="images/scio.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/social.webp);">
						<a href="images/social.webp" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="work img d-flex align-items-center" style="background-image: url(images/socialized.jpg);">
						<a href="images/socialized.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<section class="reivew" id="review">
      <h1 class="heading" style="color:aquamarine">client's <span style="font-family: 'Great Vibes', cursive;">review</span></h1>

      <div class="review-slider swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img1.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">nayana</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>

          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img2.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">lisa</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>

          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img3.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">mary</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>

          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img2.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">lisa</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>

          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img4.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">rose</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>

          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img2.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">lisa</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>
          
          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img4.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">rose</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>


          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/img4.jpg" alt="" />
              <div class="user-info">
                <h3 style="font-family: 'Great Vibes', cursive;">rose</h3>
                <span style="font-family: 'Great Vibes', cursive;">happy customer</span>
              </div>
            </div>
            <p style="font-family: 'Great Vibes', cursive;">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut
              corrupti, ipsam iure nisi unde et assumenda perspiciatis
              voluptatibus nihil.
            </p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-intro" style="background-image: url('images/footer.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container" style="height: 100px;">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center pt-4">
					<h2 style="font-family: 'Great Vibes', cursive;">Together we will explore new Day</h2>
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
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src="js/app.js"></script>

</body>
</html>