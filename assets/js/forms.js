var app = angular.module('myApp', []);
app.controller('myCtrl', function ($scope) {
	$scope.products = [{
		id: "5",
		business_id: "1",
		image: "last_screen3.png",
		mrp: "500",
		our_price: "450",
		product: "iPhone"
	}];

	$scope.gallery = [{
		id: "5",
		business_id: "1",
		image: "last_screen3.png",
	}];
});

app.controller('businessCtrl', function ($scope, $sce) {
	$scope.business = [];
	$scope.trustSrc = function(src) {
		return $sce.trustAsResourceUrl(src);
	}
});


app.filter('unsafe', function($sce) { return $sce.trustAsHtml; });

$(document).ready(function () {
	var max = 500;
	$('#aboutus').summernote({
			height: 250,
			toolbar: [
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['superscript', 'subscript']],
				//['fontsize', ['fontsize']],
				//['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				//['height', ['height']]
			],
			callbacks: {
				onKeydown: function (e) {
					var t = e.currentTarget.innerText;
					if (t.length >= max) {
						//delete key
						if (e.keyCode != 8)
							e.preventDefault();
						// add other keys ...
					}
				},
				onKeyup: function (e) {
					var t = e.currentTarget.innerText;
					if (typeof maxCharacter == 'function') {
						maxCharacter(max - t.length);
					}
				},
				onPaste: function (e) {
					var t = e.currentTarget.innerText;
					var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
					e.preventDefault();
					var all = t + bufferText;
					//document.execCommand('insertText', false, all.trim().substring(0, 400));
					e.currentTarget.innerText = all.trim().substring(0, max);
					if (typeof maxCharacter == 'function') {
						maxCharacter(max - t.length);
					}
				}
			}
		}

	);

	function maxCharacter(length) {
		console.log(length);
	}
	var youtube_link =
		` <div class="col-lg-12"> 
                <div class="videolink_item">
                 <div class="row"> 
                 <div class="col-lg-8"> 
                 <div class="form-group"> 
                <label for="youtube1">Youtube Video 1</label> <div class="input-group"> <input type="text"class="form-control"id="youtube1"name="youtube1"> 
                <span class="input-group-btn input-group-append"> <button class="btn btn-danger"type="button">x</button> </span> </div> </div> </div> </div> </div> </div> `;

	var product =
		` <div id="{{id}}" class="col-lg-4">
		<div class="card card_border" style="width: 18rem;">
			<img src="{{image}}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{product}}</h5>
				<div class="underline">MRP: {{mrp}}</div>
				<h5 class="card-text">Price: {{our_price}}</h5>
				<div><a href="#" class="btn btn-primary">Edit</a><a href="#" class=" btn btn-danger ml-3">Delete</a></div>
			</div>
		</div>
	</div>`


	$("#plus_youtube").click(function (e) {
		e.preventDefault();
		$(".videolink").append(youtube_link);
		resetYoutubeLink();
	})

	function resetYoutubeLink() {
		var i = 0;

		$(".videolink_item").each(function () {
				i++;
				$(this).find('label').text("Youtube Video " + i);
				$(this).find('label').attr('for', 'youtube_video');
				$(this).find('input').attr('id', 'youtube' + i);
				$(this).find('input').attr('name', 'youtube_video[]');

				$(this).find('button').click(function (e) {

						e.preventDefault();
						$(this).parent().parent().parent().parent().parent().parent().parent()
							.remove();
						resetYoutubeLink();
					}

				)
			}

		)
	}

	$("#plus_youtube").click();

	$(".nav a").click(function (e) {
		e.preventDefault();
	})
	//goto(6);
	function goto(index) {
		if (index == 6) {
			$.ajax({
				type: "GET",
				url: 'http://localhost/digitalcard/ws/getData/1',
				success: function (d) {
					var result = JSON.parse(d);
					if (result.status === 'success') {
						//goto(1);
						console.log(result);
						angular.element("#business_view").scope().business = result.data;
						angular.element("#business_view").scope().$apply();

						$(".nav").find("a").removeClass("active");
						$(".nav").children().eq(index).find("a").addClass("active");
						$(".tab-pane").hide();
						var href = $(".nav").children().eq(index).find("a").attr("href")
						$(href).show();
					} else {
						$(".error").html(result.error);
						alert(result.error);
					}
				},
				error: function (e) {
					alert(e);
				}
			});
		} else {
			$(".nav").find("a").removeClass("active");
			$(".nav").children().eq(index).find("a").addClass("active");
			$(".tab-pane").hide();
			var href = $(".nav").children().eq(index).find("a").attr("href")
			$(href).show();
		}
		console.log('goto ', index, href);
	}

	// first form
	$("#name").val('Cader');
	$("#company").val('Hasna Technology');
	$("#url").val('hasna');
	$("#email").val('cadersoft@gmail.com');
	$("#contact_number").val('9840033126');
	$("#whatsapp_number").val('9840033126');
	var business_id = -1;
	
	$("form[name='company_save']").submit(function (e) {
		e.preventDefault();
		var form = $(this);
		var url = form.attr('action');
		$.ajax({
			type: "POST",
			url: url,
			data: form.serialize(), // serializes the form's elements.
			success: function (d) {
				var result = JSON.parse(d);
				if (result.status === 'success') {
					goto(1);
					//goto(6);
					business_id = result.data.id;
					console.log(business_id);
					$(".business_id").each(function (index) {
						$(this).val(result.data.id);
					})
				} else {
					$(".error").html(result.error);
					alert(result.error);
				}
			},
			error: function (e) {
				alert(e);
			}
		});
	});

	$("form[name='about_form']").submit(function (e) {
		e.preventDefault();
		var form = $(this);
		var url = form.attr('action');
		$.ajax({
			type: "POST",
			url: url,
			data: form.serialize(), // serializes the form's elements.
			success: function (d) {
				var result = JSON.parse(d);
				if (result.status === 'success') {
					goto(2);
					//console.log(result);
					//business_id = result.data.id;
				} else {
					$(".error").html(result.error);
					alert(result.error);
				}
			},
			error: function (e) {
				alert(e);
			}
		});
	});

	$("form[name='social_form']").submit(function (e) {
		e.preventDefault();
		var form = $(this);
		var url = form.attr('action');
		$.ajax({
			type: "POST",
			url: url,
			data: form.serialize(), // serializes the form's elements.
			success: function (d) {
				var result = JSON.parse(d);
				if (result.status === 'success') {
					goto(3);
					// console.log(result);
					//business_id = result.data.id;
				} else {
					$(".error").html(result.error);
					alert(result.error);
				}
			},
			error: function (e) {
				alert(e);
			}
		});
	});

	$("form[name='product_form']").submit(function (e) {
		e.preventDefault();
		var form = $(this);
		var url = form.attr('action');
		var form_validation = true;
		var inputFile = $('input[name=service_image]');
		var fileToUpload = inputFile[0].files[0];
		var other_data = $(this).serializeArray();
		var formdata = new FormData();
		//$("#business_id").val(business_id);
		formdata.append('id', business_id);
		formdata.append('image', fileToUpload);
		console.log(other_data)
		other_data.forEach(element => {
			if (element.name != 'product_id' && element.value != '') {
				formdata.append(element.name, element.value);

				//product = product.replace('{{' + element.name + '}}', element.value);
				console.log('{{' + element.name + '}}', element.value);
				if (element.value == '') {
					form_validation = false;
				}
			}
		});
		console.log(form_validation, fileToUpload);
		if (form_validation == false || fileToUpload == undefined) {
			return
		}

		$("form[name='product_form'] input").val('');
		setTimeout(function () {
			$("label.error").remove();
			$(".error").removeClass("error");
			$(".valid").removeClass("valid");
		}, 500);

		console.log(fileToUpload);
		$.ajax({
			type: "POST",
			url: url,
			data: formdata,
			processData: false,
			contentType: false,
			success: function (d) {
				var result = JSON.parse(d);
				if (result.status === 'success') {
					//goto(4);
					console.log(result.data);
					angular.element("#headline").scope().products.push(result.data);
					angular.element("#headline").scope().$apply();

				} else {
					$(".error").html(result.error);
					alert(result.error);
				}
			},
			error: function (e) {
				alert(e);
			}
		});

	});

	$("#product_next").click(function () {
		goto(4);
	});

	$("#next_gallery").click(function () {
		goto(6);
	});


	$("form[name='bank_form']").submit(function (e) {
		e.preventDefault();
		var form = $(this);
		var url = form.attr('action');

		var other_data = form.serializeArray();
		var formdata = new FormData();
		formdata.append('id', business_id);

		if (getImage('googlepay_qr') != undefined) {
			formdata.append('googlepay_qr', getImage('googlepay_qr'));
		}

		if (getImage('paytm_qr') != undefined) {
			formdata.append('paytm_qr', getImage('paytm_qr'));
		}

		if (getImage('phonepe_qr') != undefined) {
			formdata.append('phonepe_qr', getImage('phonepe_qr'));
		}

		if (getImage('upiid_qr') != undefined) {
			formdata.append('upiid_qr', getImage('upiid_qr'));
		}

		other_data.forEach(element => {
			formdata.append(element.name, element.value);
		});
		$.ajax({
			type: "POST",
			url: url,
			data: formdata,
			processData: false,
			contentType: false,
			success: function (d) {
				var result = JSON.parse(d);
				if (result.status === 'success') {
					goto(5);
					console.log(result);
					//business_id = result.data.id;
				} else {
					$(".error").html(result.error);
					alert(result.error);
				}
			},
			error: function (e) {
				alert(e);
			}
		});
	});

	$("form[name='gallery_form']").submit(function (e) {
		e.preventDefault();
		var form = $(this);
		var url = form.attr('action');

		var formdata = new FormData();
		formdata.append('id', business_id);
		var inputFile = $('input[name="gallery[]"]');
		for (var i = 0; i < inputFile[0].files.length; ++i) {
			formdata.append('gallery[]', inputFile[0].files[i]);
		}

		$.ajax({
			type: "POST",
			url: url,
			data: formdata,
			processData: false,
			contentType: false,
			success: function (d) {
				var result = JSON.parse(d);
				if (result.status === 'success') {
					//goto(5);
					angular.element("#headline").scope().gallery = result.data;
					angular.element("#headline").scope().$apply()
					console.log(result.data);
					//business_id = result.data.id;
				} else {
					$(".error").html(result.error);
					alert(result.error);
				}
			},
			error: function (e) {
				alert(e);
			}
		});
	});

	function getImage(name) {
		var image = $('input[name=' + name + ']');
		return image[0].files[0];
	}
	// Validation
	$("form[name='company_save']").validate({
		rules: {
			name: "required",
			company: "required",
			email: {
				required: true,
				email: true
			},
			contact_number: {
				required: true,
				minlength: 10
			},
			whatsapp_number: {
				required: true,
				minlength: 10
			},
			address1: "required",
		},
		messages: {
			name: "Please enter your Name",
			company: "Please enter your Company Name",
			contact_number: {
				required: "Please provide a contact number",
				minlength: "Your contact number must be at least 10 characters long"
			},
			whatsapp_number: {
				required: "Please provide a whatsapp number",
				minlength: "Your whatsapp number must be at least 10 characters long"
			},
			email: "Please enter a valid email address",
			address1: "Please enter your address1"
		},
	});

	$("form[name='about_form']").validate({
		rules: {
			est_year: {
				minlength: 4,
				digits: true
			},
			gst: {
				minlength: 10
			},
		},
		messages: {
			est_year: {
				minlength: "Incorrect year."
			},
			gst: {
				minlength: "Incorrect GST Number"
			},
		},
	});

	$("form[name='social_form']").validate({
		rules: {
			facebook: {
				url: true
			},
			twitter: {
				url: true
			},
			instagram: {
				url: true
			},
			linkedin: {
				url: true
			},
			other1: {
				url: true
			},
			other2: {
				url: true
			},
			other3: {
				url: true
			},
			pinterest: {
				url: true
			},
			twitter: {
				url: true
			},
			youtube: {
				url: true
			}
		},
	});

	var product_validation = $("form[name='product_form']").validate({
		rules: {
			product: {
				required: true
			},
			our_price: {
				required: true
			},
			service_image: {
				required: true
			},
		},
	});


	$(".colors .box").click(function(){
		var color = $(this).css('background-color');
		$(".background").css('background-color', color);
	})

	$(".patterns .box").click(function(){
		var image = $(this).css('background-image');
		$(".background").css('background-image', image);
	});
	goto(6);
});
