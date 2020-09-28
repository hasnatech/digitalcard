<div class="container-custom">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#company" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">01. Company</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#about" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">02. About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#social" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">03. Social</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings1" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Home</span>
                            </a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="company" role="tabpanel">
                            <form>
                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name<span class="red">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="companyName">Company Name<span class="red">*</span></label>
                                            <input type="text" class="form-control" id="companyName" name="companyName">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="url">URL<span class="red">*</span></label>

                                            <div class="input-group mb-2 mr-sm-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">https://dcard.com/a/</div>
                                                </div>
                                                <input type="text" class="form-control" id="url" name="url">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-check-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email<span class="red">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="contactNumber">Contact Number<span class="red">*</span></label>
                                            <input type="tel" class="form-control" id="contactNumber" name="contactNumber">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="whatsappNumber">Whatsapp Number<span class="red">*</span></label>
                                            <input type="tel" class="form-control" id="whatsappNumber" name="whatsappNumber">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="landlineNumber">Landline Number</label>
                                            <input type="tel" class="form-control" id="landlineNumber" name="landlineNumber">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="website">Website Url</label>
                                            <input type="url" class="form-control" id="website" name="website">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="googleMap">Google Map link</label>
                                            <input type="url" class="form-control" id="googleMap" name="googleMap">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="address1">Address: Line 1<span class="red">*</span></label>
                                            <input type="text" class="form-control" id="address1" name="address1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="address2">Address: Line 2</label>
                                            <input type="text" class="form-control" id="address2" name="address2"></textarea>
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
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <select name="state" id="state" class="form-control">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select name="country" id="country" class="form-control">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Next</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="about" role="tabpanel">
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="year">Estabilshment Year</label>
                                            <input type="text" class="form-control" id="year" name="year">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="gst">GSTIN No</label>
                                            <input type="text" class="form-control" id="gst" name="gst">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Next</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="social" role="tabpanel">
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" class="form-control" id="facebook" name="facebook">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" class="form-control" id="twitter" name="twitter">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" class="form-control" id="instagram" name="instagram">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="linkedin">LinkedIn </label>
                                            <input type="text" class="form-control" id="linkedin" name="linkedin">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" class="form-control" id="instagram" name="instagram">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="youtube">Youtube Channel</label>
                                            <input type="text" class="form-control" id="youtube" name="youtube">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="pinterest">Pinterest</label>
                                            <input type="text" class="form-control" id="pinterest" name="pinterest">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="other1">Other 1</label>
                                            <input type="text" class="form-control" id="other1" name="other1">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="other2">Other 2</label>
                                            <input type="text" class="form-control" id="other2" name="other2">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Youtube Videos <button id="plus_youtube" class="btn btn-success btn-sm"> Add </button></h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row videolink">
                                    <div class="col-lg-12">
                                        <!-- Youtube Video Link will be added from jquery -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary w-md">Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="settings1" role="tabpanel">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                art party before they sold out master cleanse gluten-free squid
                                scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                art party locavore wolf cliche high life echo park Austin. Cred
                                vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                mustache readymade keffiyeh craft.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#editor').summernote({
            height: 250,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
        var youtube_link = `
        <div class="col-lg-12">
            <div class="videolink_item">
                <div class="row">
                    <div class="col-lg-8">
                         <div class="form-group">
                            <label for="youtube1">Youtube Video 1</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="youtube1" name="youtube1">
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-danger" type="button">x</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        $("#plus_youtube").click(function(e) {
            e.preventDefault();
            $(".videolink").append(youtube_link);
            resetYoutubeLink();
        })

        function resetYoutubeLink() {
            var i = 0;
            $(".videolink_item").each(function() {
                i++;
                console.log(i)
                $(this).find('label').text("Youtube Video " + i);
                $(this).find('label').attr('for', 'youtube' + i);
                $(this).find('input').attr('id', 'youtube' + i);
                $(this).find('input').attr('name', 'youtube' + i);
                $(this).find('button').click(function(e) {
                    
                    e.preventDefault();
                    $(this).parent().parent().parent().parent().parent().parent().parent().remove();
                    resetYoutubeLink();
                })
            })
        }
        $("#plus_youtube").click();
    });
</script>