<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="section-title">Register Form</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-start justify-content-center">
            <div class="col-md-10">
                <div class="contact-form-wrap">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-form-group">
                                    <input type="text" class="form-control" name="name" id="contactName" placeholder="Your Name *">
                                    <i class="far fa-user"></i>
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-group">
                                    <input type="password" class="form-control" name="password" id="contactpassword" placeholder="Password *">
                                    <i class="fas fa-lock"></i>
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-group">
                                    <input type="text" class="form-control" name="email" id="contactEmail" placeholder="Your Email *">
                                    <i class="far fa-envelope"></i>
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form-group">
                                    <input type="text" class="form-control" name="phone" id="contactPhone" placeholder="Phone Exp. +91 XXXXXXXXXX *">
                                    <i class="fas fa-phone-volume"></i>
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-lg-6">
                                <div class="contact-form-group custom-select-wrapper">
                                    <select name="subject" class="form-control" id="contactSubject">
                                        <option value="Please Select">Please Select</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Services">Services</option>
                                        <option value="Accounting">Accounting</option>
                                    </select>
                                    <i class="far fa-bookmark"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-group">
                                    <textarea name="message" id="contactMessage" class="form-control" placeholder="Your Message *" cols="20" rows="7"></textarea>
                                    <i class="far fa-envelope-open"></i>
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-6">
                                <div class="contact-form-group">
                                    <input type="text" class="form-control" name="question" id="txtInput" placeholder="Please Enter Code *">
                                    <span id="txtCaptchaSpan"></span>
                                    <input type="hidden" id="txtCaptcha">
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div class="contact-form-group">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" class="custom-control-input" id="termsCheckBox">
                                        <label class="custom-control-label" for="termsCheckBox"></label>
                                        <span>I accepted <a href="#" data-toggle="modal" data-target="#termsModal" id="termssToggle">Terms & Conditions</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-btn-left">
                                    <button type="submit" id="contactBtn" class="default-button">Register</button>
                                </div>
                                <br>
                                <div class="contact-btn-left">
                                    <a id="contactBtn" href="<?php echo base_url('a/login') ?>">Login</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>