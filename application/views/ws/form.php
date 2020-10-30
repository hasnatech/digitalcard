<div class="container-custom" id="headline" ng-app="myApp" ng-controller="myCtrl">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#company-panel" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">01.
									Company</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about" role="tab" aria-selected="false"><span class="d-block d-sm-none"><i class="far fa-user"></i></span><span class="d-none d-sm-block">02.
									About</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social" role="tab" aria-selected="false"><span class="d-block d-sm-none"><i class="far fa-envelope"></i></span><span class="d-none d-sm-block">03.
									Social</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#services" role="tab" aria-selected="false"><span class="d-block d-sm-none"><i class="fas fa-cog"></i></span><span class="d-none d-sm-block">04.
									Services</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bank" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">05. Bank
									Details</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gallery" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">06.
									Gallery</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">07.
									Settings</span></a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content p-3 text-muted">
						<div class="tab-pane active" id="company-panel" role="tabpanel">
							<form name='company_save' action="<?php echo base_url('ws/company_save'); ?>" method="POST">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label for="name">Name<span class="red">*</span></label>
											<input type="text" class="form-control" id="name" name="name"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="company">Company Name<span class="red">*</span></label>
											<input type="text" class="form-control" id="company" name="company">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="url">URL<span class="red">*</span></label>
											<div class="input-group mb-2 mr-sm-3">
												<div class="input-group-prepend">
													<div class="input-group-text">https: //dcard.com/a/</div>
												</div>
												<input type="text" class="form-control" id="url" name="url">
												<!-- <div class="input-group-prepend">
													<span class="input-group-text">
													<i class="far fa-check-circle"></i></span>
												</div> -->
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="email">Email<span class="red">*</span></label><input type="email" class="form-control" id="email" name="email"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="contact_number">Contact Number<span class="red">*</span></label><input type="tel" class="form-control" id="contact_number" name="contact_number">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="whatsapp_number">Whatsapp Number<span class="red">*</span></label><input type="tel" class="form-control" id="whatsapp_number" name="whatsapp_number">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="landline_number">Landline
												Number</label><input type="tel" class="form-control" id="landline_number" name="landline_number"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="website">Website Url</label>
											<input type="url" class="form-control" id="website" name="website">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="g_map">Google Map
												link</label>
											<input type="url" class="form-control" id="g_map" name="g_map"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label for="address1">Address: Line 1<span class="red">*</span></label>
											<input type="text" class="form-control" id="address1" name="address1">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="address2">Address: Line
												2</label>
											<input type="text" class="form-control" id="address2" name="address2">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="pincode">Pincode</label>
											<input type="text" class="form-control" name="pincode">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="city">City</label><input type="text" class="form-control" id="city"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="state">State</label><select name="state" id="state" class="form-control">
												<option selected="">Choose...</option>
												<option>...</option>
											</select></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="country">Country</label><select name="country" id="country" class="form-control">
												<option selected="">Choose...</option>
												<option>...</option>
											</select></div>
									</div>
								</div>
								<div>
									<input type="submit" class="btn btn-primary w-md" value="Next">
								</div>
							</form>
						</div>

						<div class="tab-pane" id="about" role="tabpanel">
							<form name='about_form' action="<?php echo base_url('ws/about'); ?>" method="POST">
								<input type="hidden" name="id" class="business_id">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="est_year">Estabilshment
												Year</label><input type="text" class="form-control" id="est_year" name="est_year"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="gst">GSTIN No</label>
											<input type="text" class="form-control" id="gst" name="gst"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<textarea id="aboutus" class="form-control" id="about" name="about"></textarea>
										</div>
									</div>
								</div>
								<div>
									<input type="submit" name='' class="btn btn-primary w-md" value="Next"></button>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="social" role="tabpanel">
							<form name='social_form' action="<?php echo base_url('ws/social'); ?>" method="POST">
								<input type="hidden" name="id" class="business_id">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="facebook">Facebook</label>
											<input type="url" class="form-control" id="facebook" name="facebook">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="twitter">Twitter</label>
											<input type="url" class="form-control" id="twitter" name="twitter">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="instagram">Instagram</label><input type="text" class="form-control" id="instagram" name="instagram"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="linkedin">LinkedIn </label><input type="text" class="form-control" id="linkedin" name="linkedin">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="youtube">Youtube
												Channel</label><input type="text" class="form-control" id="youtube" name="youtube"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="pinterest">Pinterest</label><input type="text" class="form-control" id="pinterest" name="pinterest"></div>
									</div>
								</div>
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group"><label for="other1">Other 1</label><input type="text" class="form-control" id="other1" name="other1">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="other2">Other 2</label><input type="text" class="form-control" id="other2" name="other2">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="other2">Other 3</label><input type="text" class="form-control" id="other3" name="other3">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<h4>Youtube Videos <button id="plus_youtube" class="btn btn-success btn-sm">Add
											</button></h4>
										<hr>
									</div>
								</div>
								<div class="row videolink">
									<div class="col-lg-12">
										<!-- Youtube Video Link will be added from jquery -->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12"><button type="submit" class="btn btn-primary w-md">Next</button></div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="services" role="tabpanel">
							<form name='product_form' action="<?php echo base_url('ws/product'); ?>" method="POST" enctype="multipart/form-data">
								<input type="hidden" id="product_id" name="product_id">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="product">Product Name</label>
											<input type="text" class="form-control" id="product" name="product">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="mrp">MRP</label>
											<input type="text" class="form-control" id="mrp" name="mrp"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="our_price">Our Price</label>
											<input type="text" class="form-control" id="our_price" name="our_price"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<label for="service_image">Select Product/Service Image</label>

										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="service_image" name="service_image" aria-describedby="service_image">
												<label class="custom-file-label" for="service_image">Choose
													file</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12"><button id="product_services" class="btn btn-success btn-md mt-2 mb-3">Add </button></div>
								</div>
							</form>

							<div class="row">
								<div class="col-lg-12">
									<h4>Your Products / Services</h4>
									<hr>
								</div>
							</div>
							<div id="product_list" class="row">
								<div class="col-lg-4" ng-repeat="product in products" id="prod_{{product.id}}">
									<div class="card card_border" style="width: 18rem;">
										<img src="<?php echo base_url('assets/images/users/2.png'); ?>" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title">{{product.product}}</h5>
											<div class="underline">MRP: {{product.mrp}}</div>
											<h5 class="card-text">Price: {{product.our_price}}</h5>
											<div><a href="#" class="btn btn-primary">Edit</a><a href="#" class=" btn btn-danger ml-3">Delete</a></div>
										</div>
									</div>
								</div>
							</div>
							<button id="product_next" type="submit" class="btn btn-primary w-md">Next</button>

						</div>

						<div class="tab-pane" id="bank" role="tabpanel">
							<form name='bank_form' action="<?php echo base_url('ws/bank'); ?>" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" class="business_id">
								<div class="card card_border">
									<h3 class="card-header account_border">Account Details</h3>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="bankname">Bank Name</label>
													<input type="text" class="form-control" id="bankname" name="bankname" placeholder="Enter Your Bank Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="account_no">Account No</label>
													<input type="text" class="form-control" id="account_no" name="account_no" placeholder="Enter Your Account Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="branchname">branchname Name</label>
													<input type="text" class="form-control" id="branchname" name="branchname" placeholder="Enter Your Branch Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="ifsc_code">IFSC code </label>
													<input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="Enter Your IFSC code">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="account_holder_name">AC Holder Name </label>
													<input type="text" class="form-control" id="account_holder_name" name="account_holder_name" placeholder="Enter Your Account Holder Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="account_type">Account Type </label>
													<input type="text" class="form-control" id="account_type" name="account_type" placeholder="Enter Your Account Type">
												</div>
											</div>
										</div>
										<h3 class="card-header account_border">Account Details (International Usage)</h3>
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="iban">IBAN Number</label>
													<input type="text" class="form-control" id="iban" name="iban" placeholder="Enter Your IBAN Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="swift">SWIFT Code</label>
													<input type="text" class="form-control" id="swift" name="swift" placeholder="Enter Your SWIFT Code ">
												</div>
											</div>
										</div>
										<h3 class="card-header account_border">Online Transfer</h3>
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="googlepay">GooglePay</label>
													<input type="text" class="form-control" id="googlepay" name="googlepay" placeholder="Enter Your GooglePay Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="paytm">Paytm</label>
													<input type="text" class="form-control" id="paytm" name="paytm" placeholder="Enter Your Paytm Number">
												</div>
											</div>
											<div class="col-lg-6">
												<label for="googlepay_qr">Upload GooglePay QR Images
													(Optional)</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="googlepay_qr" name="googlepay_qr" aria-describedby="google_payimage">
														<label class="custom-file-label" for="googlepay_qr">Choose
															file</label>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<label for="paytm_qr">Upload Paytm QR Images
													(Optional)</label>

												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="paytm_qr" name="paytm_qr" aria-describedby="paytm_image">
														<label class="custom-file-label" for="paytm_qr">Choose
															file</label>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mt-3">
													<label for="phonepe">Phonepe</label>
													<input type="text" class="form-control" id="phonepe" name="phonepe" placeholder="Enter Your Phonepe Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mt-3">
													<label for="upiid">UPI ID</label>
													<input type="text" class="form-control" id="upiid" name="upiid" placeholder="Enter Your UPI ID Number">
												</div>
											</div>
											<div class="col-lg-6">
												<label for="phonepe_qr">Upload Phonepe QR Images
													(Optional)</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="phonepe_qr" name="phonepe_qr" aria-describedby="phonepe_image">
														<label class="custom-file-label" for="phonepe_qr">Choose
															file</label>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<label for="upiid_qr">Upload UPI Images (Optional)</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="upiid_qr" name="upiid_qr" aria-describedby="upi_image">
														<label class="custom-file-label" for="upiid_qr">Choose
															file</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary w-md">Next</button>
							</form>
						</div>

						<div class="tab-pane" id="gallery" role="tabpanel">
							<form name='gallery_form' action="<?php echo base_url('ws/gallery'); ?>" method="POST" enctype="multipart/form-data">
								<div class="row mt-3">
									<div class="col-lg-6">
										<label for="gallery_image">Choose Gallery images ( Upload Upto 10 Images)</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="gallery_image" name="gallery[]" accept="image/x-png,image/gif,image/jpeg" multiple aria-describedby="gallery_image">
												<label class="custom-file-label" for="gallery_image">Choose file</label>
											</div>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary w-md mt-2">Upload</button>
							</form>

							<div class="row mt-5">
								<div class="col-md-3" ng-repeat="item in gallery">
									<div class="card card_border" style="width: 100%;">
										<img src="<?php echo base_url('upload/'); ?>{{item.image}}" class="card-img-top img-thumbnail" alt="...">
										<div class="card-block">
											<a href="#" class="btn btn-danger ">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<button type="button" id="next_gallery" class="btn btn-primary w-md mt-2">Next</button>
						</div>

						<div class="tab-pane" id="settings" role="tabpanel">
							<div class="flex">

								<div class="settings">
									<div class="section">
										<h2>Logo</h2>
										<label for="logo">Upload Logo</label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="logo" name="logo" aria-describedby="upi_image">
												<label class="custom-file-label" for="logo">Choose
													file</label>
											</div>
										</div>
									</div>
									<div class="section"> 
										<h2>Background Color</h2>
										<div class="colors">
											<div class="color1 box"></div>
											<div class="color2 box"></div>
											<div class="color3 box"></div>
											<div class="color4 box"></div>
											<div class="color5 box"></div>
											<div class="color6 box"></div>
										</div>
									</div>
									<div class="section">
										<h2>Background Patters</h2>
										<div class="patterns">
											<div class="pattern1 box"></div>
											<div class="pattern2 box"></div>
											<div class="pattern3 box"></div>
											<div class="pattern4 box"></div>
											<div class="pattern5 box"></div>
											<div class="pattern6 box"></div>
										</div>
									</div>
								</div>

								<div class="page flex-1">
									<?php
									$this->load->view("ws/website");
									?>
								</div>

							</div>
						</div>

						<div class="error_msg">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('assets/js/forms.js'); ?>"></script>