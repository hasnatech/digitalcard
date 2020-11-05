<div id="business_view" ng-controller="businessCtrl">


	<div class="background"></div>
	<div class="wrapper">
		<div class="space"></div>
		<div class="panel">
			{{business | json}}
			<div class="top flex">
				<div class="flex-1">
					<div class="logo">
						<img src="<?php echo base_url('assets/images/logo.png');?>" alt="">
					</div>
				</div>
				<div class="social">

				</div>
			</div>
			<div>
				<div class="business_name">
					{{business.company}}
				</div>
				<div class="address">
					{{business.address1}}<br>
					{{business.address2}}<br>
					{{business.city}}<br>
					{{business.state}}<br>
					Pincode: {{business.pincode}}<br>
					{{business.country}}<br>
				</div>
			</div>

			<div class="about">
				<h2>About Us</h2>
				<div>
					<p><b>Company Name</b>: {{business.company}}</p>
					<p><b>Comapny Estabilishment</b>: {{business.est_year}}</p>
					<p><b>Nature of Busines</b>: {{business.category}}</p>
				</div>
				<div ng-bind-html="business.about | unsafe">

				</div>
			</div>
		</div>

		<div class="panel">
			<div class="social">
				<h2>Social</h2>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-1">
								<a href="{{business.facebook}}">
									<img src="<?php echo base_url('assets/images/facebook.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.twitter}}">
									<img src="<?php echo base_url('assets/images/twitter.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.instagram}}">
									<img src="<?php echo base_url('assets/images/instagram.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.linkedin}}">
									<img src="<?php echo base_url('assets/images/linkedin.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.youtube}}">
									<img src="<?php echo base_url('assets/images/youtube.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.pinterest}}">
									<img src="<?php echo base_url('assets/images/pinterest.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.other1}}">
									<img src="<?php echo base_url('assets/images/link.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.other2}}">
									<img src="<?php echo base_url('assets/images/link.png');?>" alt="">
								</a>
							</div>
							<div class="col-1">
								<a href="{{business.other3}}">
									<img src="<?php echo base_url('assets/images/link.png');?>" alt="">
								</a>
							</div>
						</div>
						<div class="mt-3">
							<h4>Youtube Videos</h4>
							<div ng-repeat="item in business.youtube_list">
								<iframe width="500" height="300" ng-src="{{trustSrc(item.yt)}}" frameborder="0"
									allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="product">
				<h2>Product</h2>
				<div class="row">
					<div class="col-sm-6" ng-repeat="item in business.product">
						<div class="card card_border">
							<img class="card-img-top" ng-src="<?php echo base_url('upload/');?>{{item.image}}">
							<div class="card-body">
								<h5 class="card-title"><b>Product Name</b>: {{item.product}}</h5>
								<p class="card-text"><b>MRP</b>: {{item.mrp}}</p>
								<p class="card-text"><b>Our Price </b>: {{item.our_price}}</p>
								<a href="#">
									<div class="font-weight-bold btn btn-panal color_path">Contact<i
											class="fab fa-whatsapp ml-2" style="font-size:20px;color:#ffffff;"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="banK">
				<h2>BanK</h2>
				<div>
					<h2>Account Details</h2>
					<p><b>Bank Name</b>: {{business.bankname}}</p>
					<p><b>Account No</b>: {{business.account_no}}</p>
					<p><b>Branch Name</b>: {{business.branchname}}</p>
					<p><b>IFSC code</b>: {{business.ifsc_code}}</p>
					<p><b>AC Holder Name</b>: {{business.account_holder_name}}</p>
					<p><b>Account Type</b>: {{business.account_type}}</p>
				</div>
				<div>
					<h2>Account Details (International Usage)</h2>
					<p><b>IBAN Number</b>: {{business.iban}}</p>
					<p><b>SWIFT Code</b>: {{business.swift}}</p>
				</div>
				<div>
					<h2>Online Transfer</h2>
					<div class="row">
						<div class="col-sm-4">
							<div class="card card_border">
								<img class="card-img-top"
									ng-src="<?php echo base_url('upload/');?>{{business.googlepay_qr}}"
									alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>GooglePay</b>: {{business.googlepay}}</h5>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="card card_border">
								<img class="card-img-top"
									ng-src="<?php echo base_url('upload/');?>{{business.paytm_qr}}" alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>Paytm</b>: {{business.paytm}}</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card card_border">
								<img class="card-img-top"
									ng-src="<?php echo base_url('upload/');?>{{business.paytm_qr}}" alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>Phonepe</b>: {{business.phonepe}}</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card card_border">
								<img class="card-img-top"
									ng-src="<?php echo base_url('upload/');?>{{business.upiid_qr}}" alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>UPI</b>: {{business.upiid}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="gallery">
				<h2>Gallery</h2>
				<div class="row">
					<div class="col-sm-4" ng-repeat="item in business.gallery">
						<div class="card">
							<div class="panal_Gallery hover-shadow cursor" data-index="{{$index}}" onclick="openModal();currentSlide(this)" 
							style="background-image: url('<?php echo base_url('upload/');?>{{item.image}}')">
							</div>
						</div>
					</div>
					<div id="myModal" class="modal">
						<span class="close cursor" onclick="closeModal()">&times;</span>
						<div class="modal-content">
							<div class="mySlides" ng-repeat="item in business.gallery">
								<img class="gallery_mr" ng-src="<?php echo base_url('upload/');?>{{item.image}}">
							</div>
							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							<a class="next" onclick="plusSlides(1)">&#10095;</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="contact">
				<h2>Contact</h2>
				<div class="row">
					<div class="col-sm-12">
						<form>
							<div class="form-group">
								<label for="exampleInputName">Name</label>
								<input type="text" class="form-control" id="exampleInputName">
							</div>
							<div class="form-group">
								<label for="exampleInputCompanyName">Company Name</label>
								<input type="text" class="form-control" id="exampleInputCompanyName">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp">
							</div>
							<div class="form-group">
								<label for="exampleFormControlMessage">Message</label>
								<textarea class="form-control" id="exampleFormControlMessage" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
	<script>
		function openModal() {
			document.getElementById("myModal").style.display = "block";
		}

		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}

		var slideIndex = 1;
		var slides = document.getElementsByClassName("mySlides");
		showSlides(i);

		function plusSlides(n) {
			slideIndex += n
			slideIndex = slideIndex % slides.length;
			console.log(slideIndex);
			if (slideIndex < 0) {
				slideIndex = slides.length - 1;
			}
			console.log(slideIndex);
			showSlides(slideIndex);
		}

		function currentSlide(n) {
			slideIndex = $(n).attr('data-index');
			console.log('slideIndex', slideIndex);
			showSlides(slideIndex);
		}

		function showSlides(n) {
			slideIndex = Number(n);
			var i;

			//var dots = document.getElementsByClassName("demo");
			var captionText = document.getElementById("caption");

			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			/*for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}*/
			slides[slideIndex].style.display = "block";
			//dots[slideIndex ].className += " active";
			//captionText.innerHTML = dots[slideIndex - 1].alt;
		}

	</script>
