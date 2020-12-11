<section class="section">
    <div class="container">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Free Register</h5>
                                            <p>Get your free account now.</p>
                                        </div>
                                    </div>
                                    <!-- <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <!-- <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div> -->
                                <div class="mb-3"></div>
                                <div class="p-2">
                                    <div class="error_msg">
                                        <?php echo $error; ?>
                                    </div>
                                    <form id="regForm" name="registration" class="form-horizontal" action="<?php echo base_url('a/register'); ?>" method="POST">

                                        <div class="form-group">
                                            <label for="companyname">Company Name</label>
                                            <input type="text" class="form-control" name="companyname" id="companyname" placeholder="Enter Company Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                        </div>



                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">


                            <div>
                                <p>Already have an account ? <a href="<?php echo base_url('a/login') ?>" class="font-weight-medium text-primary"> Login now </a> </p>
                                <p>© 2020 copyright. Crafted by Hasna technology</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $().ready(function() {

        $("#regForm[name='registration']").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                companyname: "required",
                mobile: "required",
                email: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            // Specify validation error messages
            messages: {
                companyname: "Please enter your Company Name",
                mobile: "Please enter your mobile Number",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address"
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        })
    });
</script>