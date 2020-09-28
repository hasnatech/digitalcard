<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="section-title">Login</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-start justify-content-center">
            <div class="col-md-6">
                <div class="contact-form-wrap">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-form-group">
                                    <input type="text" class="form-control" name="email" id="contactEmail" placeholder="Your Email *">
                                    <i class="far fa-envelope"></i>
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-group">
                                    <input type="password" class="form-control" name="password" id="contactpassword" placeholder="Password *">
                                    <i class="fas fa-lock"></i>
                                    <div class="form-validate-icons">
                                        <span></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="contact-form-group">
                                    <div class="custom-control custom-checkbox d-flex align-items-center">
                                        <input type="checkbox" checked class="custom-control-input" id="termsCheckBox">
                                        <label class="custom-control-label" for="termsCheckBox"></label>
                                        <span>I accepted <a href="#" data-toggle="modal" data-target="#termsModal" id="termssToggle">Terms & Conditions</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-btn-left">
                                    <button type="submit" id="contactBtn" class="default-button">Login</button>

                                </div>
                                <br>
                                <div class="contact-btn-left">
                                    <a id="contactBtn" href="<?php echo base_url('a/register') ?>">Register</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>