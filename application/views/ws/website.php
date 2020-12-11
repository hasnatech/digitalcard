<div id="business_view" ng-controller="businessCtrl">
	<div class="background" ng-style="{'background-image': 'url(/digitalcard/upload/' + business.background + ')', 'background-color' : business.color}"></div>
	{{ business.color}}
	<div class="wrapper">
		<div class="space"></div>
		<div class="panel">
			<div class="top flex">
				<div class="flex-1">
					<div class="logo">
						
						<img ng-if="!business.logo" ng-src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
						<img ng-if="business.logo" ng-src="<?php echo base_url('upload/'); ?>{{business.logo}}" alt="">
					</div>
				</div>
				<div class="social">
				
				</div>
			</div>
			<div>
				<div class="business_name">
					<h2>{{business.company}}</h2>
				</div>
				<div class="address">
					{{business.address1}}<br>
					<span ng-if="business.address2">{{business.address2}}<br></span>
					<span ng-if="business.city">{{business.city}},</span>
					<span ng-if="business.state">{{business.state}}<br></span>
					<span ng-if="business.pincode">Pincode: {{business.pincode}},</span>
					<span ng-if="business.country">{{business.country}}<br></span>
				</div>
			</div>

			<div class="about mt-5">
				<h2>About Us</h2>
				<div>
					<p><b>Company Name</b>: {{business.company}}</p>
					<p ng-if="business.est_year"><b>Comapny Estabilishment</b>: {{business.est_year}}</p>
					<!-- <p><b>Nature of Busines</b>: {{business.category}}</p> -->
				</div>
				<div ng-bind-html="business.about | unsafe">

				</div>
			</div>
		</div>

		<div class="panel" ng-if="business.facebook || business.twitter || business.instagram || business.linkedin || business.youtube || business.pinterest || business.others3 || business.others2 || business.others3">
			<div class="social">
				<h2>Social</h2>
				<div class="card">
					<div class="card-body">
						<div class="flex flex-wrap">
							<div class="m-1" ng-if="business.facebook">
								<a href="{{business.facebook}}">
									<img src="<?php echo base_url('assets/images/facebook.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.twitter">
								<a href="{{business.twitter}}">
									<img src="<?php echo base_url('assets/images/twitter.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.instagram">
								<a href="{{business.instagram}}">
									<img src="<?php echo base_url('assets/images/instagram.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.linkedin">
								<a href="{{business.linkedin}}">
									<img src="<?php echo base_url('assets/images/linkedin.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.youtube">
								<a href="{{business.youtube}}">
									<img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.pinterest">
								<a href="{{business.pinterest}}">
									<img src="<?php echo base_url('assets/images/pinterest.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.others1">
								<a href="{{business.other1}}">
									<img src="<?php echo base_url('assets/images/link.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.others2">
								<a href="{{business.other2}}">
									<img src="<?php echo base_url('assets/images/link.png'); ?>" alt="">
								</a>
							</div>
							<div class="m-1" ng-if="business.others3">
								<a href="{{business.other3}}">
									<img src="<?php echo base_url('assets/images/link.png'); ?>" alt="">
								</a>
							</div>
						</div>
						<div class="mt-3">
							<h4>Youtube Videos</h4>
							<div class="mb-3" ng-repeat="item in business.youtube_list">
								<iframe width="500" height="300" ng-src="{{ trustSrc(item.yt)}}" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel" ng-if="business.product.length>0">
			<div class="product">
				<h2>Product</h2>
				<div class="row">
					<div class="col-sm-6" ng-repeat="item in business.product">
						<div class="card card_border">
							<img class="card-img-top" ng-if="item.image" ng-src="<?php echo base_url('upload/'); ?>{{item.image}}">
							<div class="card-body">
								<h5 class="card-title"><b>Product Name</b>: {{item.product}}</h5>
								<p class="card-text"><b>MRP</b>: {{item.mrp}}</p>
								<p class="card-text"><b>Our Price </b>: {{item.our_price}}</p>
								<a href="#">
									<a href="https://api.whatsapp.com/send?phone=+91{{business.whatsapp_number}}" target="_blank" class="whatsapp-btn">{{business.whatsapp_number}}<i class="fab fa-whatsapp ml-2"></i></a>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel" ng-if="business.bankname">
			<div class="banK">
				<h2>BanK</h2>
				<div>
					<h2>Account Details</h2>
					<p ng-if="business.bankname"><b>Bank Name</b>: {{business.bankname}}</p>
					<p ng-if="business.account_no"><b>Account No</b>: {{business.account_no}}</p>
					<p ng-if="business.branchname"><b>Branch Name</b>: {{business.branchname}}</p>
					<p ng-if="business.ifsc_code"><b>IFSC code</b>: {{business.ifsc_code}}</p>
					<p ng-if="business.account_holder_name"><b>AC Holder Name</b>: {{business.account_holder_name}}</p>
					<p ng-if="business.account_type"><b>Account Type</b>: {{business.account_type}}</p>
				</div>
				<div>
					<h2>Account Details (International Usage)</h2>
					<p><b>IBAN Number</b>: {{business.iban}}</p>
					<p><b>SWIFT Code</b>: {{business.swift}}</p>
				</div>
				<div ng-if="business.googlepay || business.paytm || business.phonepe || business.upiid">
					<h2>Online Transfer</h2>
					<div class="row" ng-if="business.googlepay">
						<div class="col-sm-4">
							<div class="card card_border">
								<img class="card-img-top" ng-if="business.googlepay_qr && business.googlepay_qr != 'undefined'" ng-src="<?php echo base_url('upload/'); ?>{{business.googlepay_qr}}" alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>GooglePay</b>: {{business.googlepay}}</h5>
								</div>
							</div>
						</div>

						<div class="col-sm-4" ng-if="business.paytm">
							<div class="card card_border">
								<img class="card-img-top" ng-if="business.paytm_qr && business.paytm_qr != 'undefined'" ng-src="<?php echo base_url('upload/'); ?>{{business.paytm_qr}}" alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>Paytm</b>: {{business.paytm}}</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" ng-if="business.phonepe">
							<div class="card card_border">
								<img class="card-img-top" ng-if="business.phonepe_qr && business.phonepe_qr != 'undefined'" ng-src="<?php echo base_url('upload/'); ?>{{business.phonepe_qr}}" alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>Phonepe</b>: {{business.phonepe}}</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" ng-if="business.upiid">
							<div class="card card_border">
								<img class="card-img-top" ng-if="business.upiid_qr && business.upiid_qr != 'undefined'" ng-src="<?php echo base_url('upload/'); ?>{{business.upiid_qr}}" alt="Card image">
								<div class="card-body">
									<h5 class="card-title text-center"><b>UPI</b>: {{business.upiid}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel" ng-if="business.gallery.length>0">
			<div class="gallery">
				<h2>Gallery</h2>
				<!-- {{business.gallery}} -->
				<div class="row">
					<div class="col-sm-4" ng-repeat="item in business.gallery">
						<div class="card">
							<div class="panal_Gallery hover-shadow cursor" data-index="{{$index}}" onclick="openModal(this);" style="background-image: url('<?php echo base_url('upload/'); ?>{{item.image}}')">
							</div>
						</div>
					</div>
					<div id="myModal" class="model">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" onclick="closeModal()" aria-label="Close">
										<span aria-hidden="true" >&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="mySlides" ng-repeat="item in business.gallery">
										<img class="gallery_mr" ng-src="<?php echo base_url('upload/'); ?>{{item.image}}">
									</div>
									<a class="prev" onclick="plusSlides(-1)">&#10094; Previous</a>
									<a class="next" onclick="plusSlides(1)">Next &#10095;</a>
								</div>
							</div>
						</div>
					</div> 
					
				</div>
			</div>
		</div>

		<!-- <div class="panel">
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
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
		</div> -->
	</div>
	<script>
		function openModal(n) {
			//document.getElementById("myModal").style.display = "block";
			$("#myModal").show();
			slideIndex = $(n).attr('data-index');
			console.log('slideIndex', slideIndex);
			showSlides(slideIndex);
		}

		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}

		var slideIndex = 1;
		var slides = document.getElementsByClassName("mySlides");
		//showSlides(i);

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
			var captionText = document.getElementById("caption");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slides[slideIndex].style.display = "block";
		}
	</script>