
String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
    // encodeURI()
};


$(".add-to-cart-btn").on("click", function () {
    var pid = $(this).data("pid");
    let pcolor = $("#colors").val();
    let psize = $("#size").val();
    console.log(psize);
    $.ajax({
        url: BASE_URL + "shop/add-to-cart",
        type: "GET",
        dataType: "html",
        data: {
            product_id: pid,
            product_color: pcolor,
            product_size: psize
        },
        success: function (res) {
            window.location.reload();
        }
    })
})

$('.clear-cart-btn').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        url: BASE_URL + "shop/clear-cart",
        type: "GET",
        dataType: "html",
        success: function (res) {
            window.location.reload();
        }
    })
})

$('.update-cart-btn').on('click', function () {
    var pid = $(this).data("pid");
    var op = $(this).data("op");

    $.ajax({
        url: BASE_URL + "shop/update-cart",
        type: "GET",
        dataType: "html",
        data: {pid: $(this).data("pid"), op: $(this).data("op")},
        success: function (res) {
            window.location.reload();
        }
    })
})


$('.origin-filed').on('focusout '/*input*/, function () {
    $('.target-filed').val($(this).val().permalink());
})

if (document.getElementById("article")) {
    $('#article').summernote({
        height: 350,
    });
};



$('.image-file-upload').change(function (e) {
    let fileName = e.target.files[0].name;
    $(".custom-file-label").html(fileName);
});





$(document).ready(function() {
	
	$('.card').delay(1800).queue(function(next) {
		$(this).removeClass('hover');
		$('a.hover').removeClass('hover');
		next();
	});
});




$(document).ready(function(){
    $('#framework').multiselect({
     nonSelectedText: 'Select Framework',
     enableFiltering: true,
     enableCaseInsensitiveFiltering: true,
     buttonWidth:'400px'
    });
    
    $('#framework_form').on('submit', function(event){
     event.preventDefault();
     var form_data = $(this).serialize();
     $.ajax({
      url:"insert.php",
      method:"POST",
      data:form_data,
      success:function(data)
      {
       $('#framework option:selected').each(function(){
        $(this).prop('selected', false);
       });
       $('#framework').multiselect('refresh');
       alert(data);
      }
     });
    });
    
    
});






$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
  


$('.wishlist').on('click', function () {
    var pid = $(this).data("pid");
    var uid = $(this).data("uid");

    $.ajax({
        url: BASE_URL + "shop/wishlist",
        type: "GET",
        dataType: "html",
        data: {pid: $(this).data("pid"), uid: $(this).data("uid")},
        success: function (res) {
            window.location.reload();
        }
    })
})

$(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
});