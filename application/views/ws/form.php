<div class="container-custom mt-5" id="headline" ng-app="myApp" ng-controller="myCtrl">
	<!-- <?php print_r($this->data->youtube_list); ?> -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab1" href="#company-panel" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">01.
									Company</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab1" href="#about" role="tab" aria-selected="false"><span class="d-block d-sm-none"><i class="far fa-user"></i></span><span class="d-none d-sm-block">02.
									About</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab1" href="#social" role="tab" aria-selected="false"><span class="d-block d-sm-none"><i class="far fa-envelope"></i></span><span class="d-none d-sm-block">03.
									Social</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab1" href="#services" role="tab" aria-selected="false"><span class="d-block d-sm-none"><i class="fas fa-cog"></i></span><span class="d-none d-sm-block">04.
									Services</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab1" href="#bank" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">05. Bank
									Details</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab1" href="#gallery" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">06.
									Gallery</span></a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab1" href="#settings" role="tab" aria-selected="true"><span class="d-block d-sm-none"><i class="fas fa-home"></i></span><span class="d-none d-sm-block">07.
									Settings</span></a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content p-3 text-muted">
						<div class="tab-pane active" id="company-panel" role="tabpanel">
							<form name='company_save' action="<?php echo base_url('WS/company_save'); ?>" method="POST">
								<input type="hidden" name="id" class="business_id" value="<?= $this->data->id ?>">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label for="name">Name<span class="red">*</span></label>
											<input type="text" class="form-control" id="name" name="name" value="<?= $this->data->name ?>"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="company">Company Name<span class="red">*</span></label>
											<input type="text" class="form-control" id="company" name="company" value="<?= $this->data->company ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="url">URL<span class="red">*</span></label>
											<div class="input-group mb-2 mr-sm-3">
												<div class="input-group-prepend">
													<div class="input-group-text">http://imitationjewelryindia.com/a/</div>
												</div>
												<?php
												if ($this->data->id != "") {
												?>
													<input type="text" class="form-control disable " disabled value="<?= $this->data->url ?>">
													<input type="hidden" id="url" name="url" value="<?= $this->data->url ?>">
												<?php
												} else {
												?>
													<input type="text" class="form-control" id="url" name="url" value="<?= $this->data->url ?>">
												<?php } ?>
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
										<div class="form-group"><label for="email">Email<span class="red">*</span></label>
											<?php
											if ($this->data->id != "") {
											?>
												<input type="email" class="form-control disable" disabled value="<?= $this->data->email ?>">
												<input type="hidden" id="email" name="email" value="<?= $this->data->email ?>">
											<?php
											} else {
											?>
												<input type="email" class="form-control" id="email" name="email" value="<?= $this->data->email ?>">
											<?php } ?>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="contact_number">Contact Number<span class="red">*</span></label>
											<input type="tel" class="form-control" id="contact_number" name="contact_number" value="<?= $this->data->contact_number ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="whatsapp_number">Whatsapp Number<span class="red">*</span></label>
											<input type="tel" class="form-control" id="whatsapp_number" name="whatsapp_number" value="<?= $this->data->whatsapp_number ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="landline_number">Landline
												Number</label><input type="tel" class="form-control" id="landline_number" name="landline_number" value="<?= $this->data->landline_number ?>"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="website">Website Url</label>
											<input type="url" class="form-control" id="website" name="website" value="<?= $this->data->website ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="g_map">Google Map
												link</label>
											<input type="url" class="form-control" id="g_map" name="g_map" value="<?= $this->data->g_map ?>"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label for="address1">Address: Line 1<span class="red">*</span></label>
											<input type="text" class="form-control" id="address1" name="address1" value="<?= $this->data->address1 ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="address2">Address: Line
												2</label>
											<input type="text" class="form-control" id="address2" name="address2" value="<?= $this->data->address2 ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="pincode">Pincode</label>
											<input type="text" class="form-control" name="pincode" value="<?= $this->data->pincode ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="city">City</label><input type="text" class="form-control" id="city" name="city" value="<?= $this->data->city ?>"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="state">State</label>
											<input type="text" class="form-control" name="state" value="<?= $this->data->state ?>">
										</div>
										<!--<div class="form-group"><label for="state">State</label>
										<select name="state" id="state" class="form-control">
												<option selected="">Choose...</option>
												<option>...</option>
											</select>
										</div>-->
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="country">Country</label>
											<input type="text" class="form-control" name="country" value="<?= $this->data->country ?>">
										</div>
										<!--<div class="form-group"><label for="country">Country</label><select name="country" id="country" class="form-control">
												<option selected="">Choose...</option>
												<option>...</option>
											</select></div>-->
									</div>
								</div>
								<div>
									<input type="submit" class="btn btn-primary w-md" value="Next">
									<div id="error_msg1" class="error_msg">

									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="about" role="tabpanel">
							<form name='about_form' action="<?php echo base_url('WS/about'); ?>" method="POST">
								<input type="hidden" name="id" class="business_id">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="est_year">Estabilshment
												Year</label><input type="text" class="form-control" id="est_year" name="est_year" value="<?= $this->data->est_year ?>"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="gst">GSTIN No</label>
											<input type="text" class="form-control" id="gst" name="gst" value="<?= $this->data->gst ?>"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<textarea id="aboutus" class="form-control" id="about" name="about"><?= $this->data->about ?></textarea>
										</div>
									</div>
								</div>
								<div>
									<a href="#" class="back_btn btn btn-warning" data-value="0">Back</a>
									<input type="submit" name='' class="btn btn-primary w-md" value="Next">
								</div>
							</form>
						</div>

						<div class="tab-pane" id="social" role="tabpanel">
							<form name='social_form' action="<?php echo base_url('WS/social'); ?>" method="POST">
								<input type="hidden" name="id" value="<?= $this->data->id ?>" class="business_id">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="facebook">Facebook</label>
											<input type="url" class="form-control" id="facebook" name="facebook" value="<?= $this->data->facebook ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="twitter">Twitter</label>
											<input type="url" class="form-control" id="twitter" name="twitter" value="<?= $this->data->twitter ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="instagram">Instagram</label><input type="text" class="form-control" id="instagram" name="instagram" value="<?= $this->data->instagram ?>"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="linkedin">LinkedIn </label><input type="text" class="form-control" id="linkedin" name="linkedin" value="<?= $this->data->linkedin ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="youtube">Youtube
												Channel</label><input type="text" class="form-control" id="youtube" name="youtube" value="<?= $this->data->youtube ?>"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="pinterest">Pinterest</label><input type="text" class="form-control" id="pinterest" name="pinterest" value="<?= $this->data->pinterest ?>"></div>
									</div>
								</div>
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group"><label for="other1">Other 1</label><input type="text" class="form-control" id="other1" name="other1" value="<?= $this->data->other1 ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="other2">Other 2</label><input type="text" class="form-control" id="other2" name="other2" value="<?= $this->data->other2 ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="other2">Other 3</label><input type="text" class="form-control" id="other3" name="other3" value="<?= $this->data->other3 ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<h4>Youtube Videos
											<span id="plus_youtube" ng-click="add_youtube()" class="btn btn-success btn-sm">Add
											</span></h4>
										<hr>
									</div>
								</div>
								<div class="row videolink">
									<div class="col-lg-12">
										<!-- Youtube Video Link will be added from jquery -->

										<div class="col-lg-12">
											<div class="videolink_item">
												<div class="row">
													<div class="col-lg-8" ng-repeat="item in business.youtube_list">
														<div class="form-group">
															<label for="youtube1">Youtube Video {{$index + 1}}</label>
															<div class="input-group">
																<!-- <input type="hidden" name="youtube_id" value="{{item.id}}"> -->
																<input type="text" class="form-control" name="youtube_video[]" value="{{item.yt}}">
																<span class="input-group-btn input-group-append">
																	<button class="btn btn-danger" type="button" ng-click="delete_youtube(item.id, $index)">x</button>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-lg-12">
										<a href="#" class="back_btn btn btn-warning" data-value="1">Back</a>
										<button type="submit" class="btn btn-primary w-md">Next</button>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="services" role="tabpanel">
							<form name='product_form' action="<?php echo base_url('WS/product'); ?>" method="POST" enctype="multipart/form-data">
								<input type="hidden" id="product_id" name="product_id">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="product">Product Name</label>
											<input type="text" class="form-control" id="product" name="product" ng-model="selectedProduct.product">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="mrp">MRP</label>
											<input type="text" class="form-control" id="mrp" name="mrp" ng-model="selectedProduct.mrp"></div>
									</div>
									<div class="col-lg-4">
										<div class="form-group"><label for="our_price">Our Price</label>
											<input type="text" class="form-control" id="our_price" name="our_price" ng-model="selectedProduct.our_price"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group"><label for="our_price">Category</label>
											<select class="form-control" name="category" id="category">
												<?php for ($i = 0; $i < count($this->data->category); $i++) { ?>
													<option value="<?= $this->data->category[$i]->id ?>"><?= $this->data->category[$i]->name ?></option>
												<?php } ?>
											</select>

										</div>
									</div>
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
									<div class="col-lg-12">
										<button id="product_services" class="btn btn-success btn-md mt-2 mb-3">Add</button>
									</div>
								</div>
							</form>

							<div class="row">
								<div class="col-lg-12">
									<h4>Your Products / Services</h4>
									<hr>
								</div>
							</div>
							<div id="product_list" class="row">
								<div class="flex flex-wrap" ng-repeat="product in business.product" id="prod_{{product.id}}">
									<div class="card card_border m-3" style="width: 18rem;">
										<img ng-src="<?php echo base_url('upload/'); ?>{{product.image}}" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title">{{product.product}}</h5>
											<div class="underline">MRP: {{product.mrp}}</div>
											<h5 class="card-text">Price: {{product.our_price}}</h5>
											<div>
												<!-- <a href="#" class="btn btn-primary mr-3" ng-click="product_edit($index)">Edit</a> -->
												<a href="#" class=" btn btn-danger" ng-click="product_delete($index)">Delete</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<a href="#" class="back_btn btn btn-warning" data-value="2">Back</a>
							<button id="product_next" type="submit" class="btn btn-primary w-md">Next</button>
						</div>

						<div class="tab-pane" id="bank" role="tabpanel">
							<form name='bank_form' action="<?php echo base_url('WS/bank'); ?>" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" class="business_id">
								<div class="card card_border">
									<h3 class="card-header account_border">Account Details</h3>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="bankname">Bank Name</label>
													<input type="text" class="form-control" id="bankname" name="bankname" value="<?= $this->data->bankname ?>" placeholder="Enter Your Bank Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="account_no">Account No</label>
													<input type="text" class="form-control" id="account_no" name="account_no" value="<?= $this->data->account_no ?>" placeholder="Enter Your Account Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="branchname">Branch Name</label>
													<input type="text" class="form-control" id="branchname" name="branchname" value="<?= $this->data->branchname ?>" placeholder="Enter Your Branch Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="ifsc_code">IFSC code </label>
													<input type="text" class="form-control" id="ifsc_code" name="ifsc_code" value="<?= $this->data->ifsc_code ?>" placeholder="Enter Your IFSC code">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="account_holder_name">AC Holder Name </label>
													<input type="text" class="form-control" id="account_holder_name" name="account_holder_name" value="<?= $this->data->account_holder_name ?>" placeholder="Enter Your Account Holder Name">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="account_type">Account Type </label>
													<input type="text" class="form-control" id="account_type" name="account_type" value="<?= $this->data->account_type ?>" placeholder="Enter Your Account Type">
												</div>
											</div>
										</div>
										<h3 class="card-header account_border">Account Details (International Usage)</h3>
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="iban">IBAN Number</label>
													<input type="text" class="form-control" id="iban" name="iban" value="<?= $this->data->iban ?>" placeholder="Enter Your IBAN Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="swift">SWIFT Code</label>
													<input type="text" class="form-control" id="swift" name="swift" value="<?= $this->data->swift ?>" placeholder="Enter Your SWIFT Code ">
												</div>
											</div>
										</div>
										<h3 class="card-header account_border">Online Transfer</h3>
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="googlepay">GooglePay</label>
													<input type="text" class="form-control" id="googlepay" name="googlepay" value="<?= $this->data->googlepay ?>" placeholder="Enter Your GooglePay Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="paytm">Paytm</label>
													<input type="text" class="form-control" id="paytm" name="paytm" value="<?= $this->data->paytm ?>" placeholder="Enter Your Paytm Number">
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
													<input type="text" class="form-control" id="phonepe" name="phonepe" value="<?= $this->data->phonepe ?>" placeholder="Enter Your Phonepe Number">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group mt-3">
													<label for="upiid">UPI ID</label>
													<input type="text" class="form-control" id="upiid" name="upiid" value="<?= $this->data->upiid ?>" placeholder="Enter Your UPI ID Number">
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
								<a href="#" class="back_btn btn btn-warning" data-value="3">Back</a>
								<button type="submit" class="btn btn-primary w-md">Next</button>
							</form>
						</div>

						<div class="tab-pane" id="gallery" role="tabpanel">
							<form name='gallery_form' action="<?php echo base_url('WS/gallery'); ?>" method="POST" enctype="multipart/form-data">
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
							<div class="flex flex-wrap mt-5">
								<div class="m-3" ng-repeat="item in business.gallery">
									<div class="card card_border" style="width: 300px;">
										<img ng-src="<?php echo base_url('upload/'); ?>{{item.image}}" class="card-img-top img-thumbnail" alt="...">
										<div class="card-block">
											<a href="#" class="btn btn-danger" ng-click="delete_gallery($index, item.id)">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<a href="#" class="back_btn btn btn-warning" data-value="4">Back</a>
							<button type="button" id="next_gallery" class="btn btn-primary w-md">Next</button>
						</div>

						<div class="tab-pane" id="settings" role="tabpanel">
							<div class="flex">

								<div class="settings">
									<div class="section">
										<h2>Logo</h2>
										<form name='logo_form' action="<?php echo base_url('WS/logo'); ?>" method="POST" enctype="multipart/form-data">
											<label for="logo">Upload Logo</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="logo" name="logo" aria-describedby="logo">
													<label class="custom-file-label" for="logo">Choose file</label>
												</div>
											</div>
											<div>
												<button id="upload_logo" class="btn btn-success btn-md mt-2 mb-3">Upload</button>
											</div>
										</form>
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
										<!-- <div class="patterns">
											<div class="pattern1 box" data-background="patern1.png"></div>
											<div class="pattern2 box" data-background="patern2.png"></div>
											<div class="pattern3 box" data-background="patern3.png"></div>
											<div class="pattern4 box" data-background="patern4.png"></div>
											<div class="pattern5 box" data-background="patern5.png"></div>
											<div class="pattern6 box" data-background="patern6.png"></div>
										</div>
										<br><br> -->

										<form name='background_form' action="<?php echo base_url('WS/background'); ?>" method="POST" enctype="multipart/form-data">
											<label for="background">Upload background</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="background" name="background" aria-describedby="background">
													<label class="custom-file-label" for="background">Choose file</label>
												</div>
											</div>
											<div>
												<a href="#" id="remove_bg" class="btn btn-danger btn-md mt-2 mb-3">Remove</a>
												<button class="btn btn-success btn-md mt-2 mb-3">Upload</button>
											</div>
										</form>

									</div>
									<a href="#" class="back_btn btn btn-warning" data-value="5">Back</a>
									<a href="<?php echo base_url('WS') ?>" class="btn btn-primary">Save</a>
								</div>

								<div class="page flex-1 ">
									<div class="container-custom mt-5">
										<?php
										$this->load->view("WS/website");
										?>
									</div>
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