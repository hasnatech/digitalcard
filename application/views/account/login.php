<section class="section">
    <div class="container">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue.</p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
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
                                <div class="p-2">
                                    <form id="loginform" class="form-horizontal" method="POST" action="<?php echo base_url('a/login') ?>">
                                    <div class="error_msg">
                                                <?php echo $error; ?>
                                            </div>
                                        <div class="form-group">
                                            <label for="mobile">Email</label>
                                            <input type="tel" class="form-control" name="email" placeholder="Enter email Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="<?php echo base_url('a/forget') ?>" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                                <p>Don't have an account ? <a href="<?php echo base_url('a/register') ?>" class="font-weight-medium text-primary"> Signup now </a> </p>
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

        $("#loginform").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                mobile: {
                    required: true,
                    minlength: 10
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    // email: true
                },
                password: {
                    required: true
                }
            },
            // Specify validation error messages
            messages: {
                password: {
                    required: "Please provide a password"
                },
                mobile: {
                    required: "Please enter a valid Mobile Number",
                    minlength: "Please enter a valid Mobile Number",
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        })
    });
</script>