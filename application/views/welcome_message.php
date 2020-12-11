<!--<h1>Home Page</h1>
<ul>
	<li><a href="<?php echo base_url('a/login'); ?>">Login</a></li>
	<li><a href="<?php echo base_url('a/register'); ?>">Register</a></li>
</ul>-->
<nav class="navbar fixed-top navbar-expand-lg home-nav">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img class="img-bg" src="assets/images/users/logo.png">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
			aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link a-text mr-3" href="#">Home</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link a-text mr-3" href="#">Sitemap</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link a-text mr-3" href="#">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link a-text mr-3" href="#">Contact Us</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link a-text mr-3" href="#">Latest Blogs</a>
				</li> -->
				<!-- <li class="nav-item"><a class="nav-link a-text mr-3" href="<?php echo base_url('a/login'); ?>">Login</a></li>
				<li class="nav-item"><a class="nav-link a-text mr-3" href="<?php echo base_url('a/register'); ?>">Register</a></li> -->
			</ul>
		</div>

		<div>
		<a class="rounded-button btn-primary" href="<?php echo base_url('a/login'); ?>">Login</a>
			<a class="rounded-button btn-primary" href="<?php echo base_url('a/register'); ?>">Register</a>
		</div>

</nav>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="assets/images/users/main-banner.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="assets/images/users/main-banner-03.png" class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>


<div class="container">
	<div class="row mt-5 ">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="overflow-img">
				<a href="">
					<img src="assets/images/users/banner_img1.jpg" class="d-block img-boder" alt="..."></a>
				<div class="bannertext">
					<div class="bannertext1">NEW STYLE DESIGN</div>
					<div class="bannertext2">Trendy Fashion</div>
					<div class="bannertext3">30% off</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="overflow-img">
						<a href="">
							<img src="assets/images/users/image1.jpeg" class="d-block img-boder"></a>
						<div class="banner">
							<div class="bannertext4">Popular Items</div>
							<div class="bannertext5">Gold Bracelet & Ring</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="overflow-img">
						<a href="">
							<img src="assets/images/users/banner_img3.jpg" class="d-block img-boder"></a>
						<div class="banner">
							<div class="bannertext4">Popular Items</div>
							<div class="bannertext5">Gold Bracelet & Ring</div>
						</div>
					</div>
				</div>
			</div>
			<div class="margin-top">
				<div class="overflow-img">
					<a href="">
						<img src="assets/images/users/banner_img4.jpg" class="d-block img-boder"></a>
					<div class="panel-banner">
						<div class="bannertext1">Big Discounts</div>
						<div class="bannertext2">Latest Ring Collection 2020</div>
						<p class="">You’ll Love What You Wear, And What You Want</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container">
	<h2 class="text-center mt-5">Trending Products</h2>
	<div class="br mt-5 horizonal"></div>
	<!-- <ul class="nav justify-content-center topalign">
		<li class="nav-item nav-border back">
			<a class="nav-link nav_border" href="#">New Products</a>
		</li>
		<li class="nav-item nav-border back">
			<a class="nav-link nav_border" href="#">Top Selling</a>
		</li>
		<li class="nav-item nav-border back">
			<a class="nav-link nav_border" href="#">Special Products</a>
		</li>
	</ul> -->

	<div class="card-group">
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/1.jpg" class="card-img-top ">
					<img src="assets/images/users/2.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">
				<p>Samsung Galaxy Tab 10.1, ...</p>
				<a href="">
				<h5 class="card-title font-title text-color">Ullamco Laboris</h5></a>
				<p class="card-text color font">$361.99</p>
			</div>
		</div>
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/15.jpg" class="card-img-top ">
					<img src="assets/images/users/16.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">
				<p>Samsung Galaxy Tab 10.1, ...</p>
				<a class="text-color" href="">
					<h5 class="card-title font-title text-color">High Waist Pants</h5>
				</a>
				<span class="card-text color font text-color">$782.00</span>
				<span class="text-decoration font"> $903.19</span>
				<span class="color font">13%.</span>
			</div>
		</div>
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/3.jpg" class="card-img-top ">
					<img src="assets/images/users/4.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">
				<p>More room to move. ...</p>
				<h5 class="card-title font-title text-color">Striped Muffler Breakthro</h5>
				<span class="card-text color font">$122.00</span>
			</div>
		</div>
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/5.jpg" class="card-img-top">
					<img src="assets/images/users/6.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">
				<p>Stop your co-workers in t...</p>
				<h5 class="card-title font-title text-color">Caprese Satchel Combine</h5></a>
				<span class="card-text color font">$14.00</span>
				<span class="text-decoration font"> $122.00</span>
				<span class="color font">90%</span>
			</div>
		</div>
	</div>

	<div class="card-group">
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/7.jpg" class="card-img-top ">
					<img src="assets/images/users/8.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">
				<p>Unprecedented power. The ...</p>
				<h5 class="card-title font-title text-color">Exercitation Ullamco</h5>
				<span class="card-text color font">$1,202.00</span>
			</div>
		</div>
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/9.jpg" class="card-img-top ">
					<img src="assets/images/users/10.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">Latest Intel mobile archi...</p>
				<h5 class="card-title font-title text-color">Deserunt Ipsum Laboris</h5>
				<span class="card-text color font">$1,500.00</span>
				<span class="text-decoration font"> $2,500.00</span>
				<span class="color font">40%</span>
			</div>
		</div>
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/12.jpg" class="card-img-top ">
					<img src="assets/images/users/11.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">
				<p>MacBook Air is ultrathin,...</p>
				<h5 class="card-title font-title text-color">Nulla Pariatur Deserunt</span>
				<span class="text-decoration font">$62.00</h5>
				<span class="card-text color font">$62.00</span>
				<span class="text-decoration font"> $1,262.00</span>
				<span class="color font">95%</span>
			</div>
		</div>
		<div class="card">
			<div class="images">
				<a href="">
					<img src="assets/images/users/13.jpg" class="card-img-top ">
					<img src="assets/images/users/14.jpg" class="card-img-top imges-hover">
				</a>
			</div>
			<div class="card-body">Intel Core 2 Duo processo...</p>
				<h5 class="card-title font-title text-color">Riding Pants</h5>
				<span class="card-text color font">$602.00</span>
			</div>
		</div>
	</div>
</div>

		
<div class="container">
			<h3 class="text-center mt-5">Gallery</h3>
			<div class="card-columns">
    <div class="card-group">
      <div class="card-body">
	  <img src="assets/images/users/img-1.jpg" class="card-img-top">
      </div>
    </div>
    <div class="card">
      <div class="card-body">
	  <img src="assets/images/users/img-2.jpg" class="card-img-top">
      </div>
    </div>
    <div class="card">
      <div class="card-body">
	  <img src="assets/images/users/img-3.jpg" class="card-img-top">
      </div>
    </div>
    <div class="card">
      <div class="card-body">
	  <img src="assets/images/users/img-4.jpg" class="card-img-top">
      </div>
    </div>  
    <div class="card">
      <div class="card-body">
	  <img src="assets/images/users/img-5.jpg" class="card-img-top">
      </div>
    </div>
    <div class="card">
      <div class="card-body">
	  <img src="assets/images/users/img-6.jpg" class="card-img-top">
      </div>
    </div>
  </div>
		</div>

<div class="footer_bg mt-5">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<a href="#">
					<img class="mt-5" src="assets/images/users/logo1.png">
				</a>
				<p class="footer_panal mt-5">Lorem ipsum dolor si, consectetur, sed do eiusmod tempor incididunt ut
					labore veniam, quis nostrud exercitation</p>
				<p class="footer_panal">Lorem ipsum dolor si, consectetur adipiscing eiusmod tempor incididunt ut</p>
			</div>

			<div class="col-3 footer_heading">
				<p>Information</p>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">About Us</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Delivery Information</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Privacy Policy</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Terms & Conditions</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Contact Us</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Affiliate</span></a>
				</div>
			</div>

			<div class="col-3 footer_heading">
				<p>Our Policy</p>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Gallery</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Brands</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Gift Certificates</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Specials</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">My Account</span></a>
				</div>
				<div>
					<span class="font-weight"> ></span>
					<a href="">
						<span class="footer_text footer-transition">Site Map</span></a>
				</div>
			</div>
		</div>
		<div class="footer-contact mt-5">
			<div class="row">
				<div class="col-4 padding-panal">
				<i class="fas fa-phone-square-alt danger"></i>
						<span class="">Phone: +123-456-7890</span> 
					
				</div>
				<div class="col-4 padding-panal">
					<i class="fas fa-envelope color"></i>
						<span> Email:</span>
						<a href="">
						<span class="footer_email">info@example.com</span></a>
				</div>
				<div class="col-4 padding-panal">
					<i class="fas fa-phone-alt danger">						
					</i><span> Address: 121 Park Drive, Varick, Usa</span>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<!-- <div class="col-6">
				<p class="footer-openchat">Powered By <span > <a class="footer_open" href="http://www.hasnatech.com"> Hasna Technology</a></span> © 2020</p>
			</div> -->
			<div class="col-6">
				<div class="row">
					<div class="col-1">
					<img class="" src="assets/images/users/card-1.png">
					</div>
					<div class="col-1">
					<img class="" src="assets/images/users/card-2.png">
					</div>
					<div class="col-1">
					<img class="" src="assets/images/users/card-3.png">
					</div>
					<div class="col-1">
					<img class="" src="assets/images/users/card-4.png">
					</div>
					<div class="col-1">
					<img class="" src="assets/images/users/card-5.png">
					</div>
					<div class="col-1">
					<img class="" src="assets/images/users/card-6.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
