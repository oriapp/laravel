
String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
    // encodeURI()
};


$(".add-to-cart-btn").on("click", function () {
    var pid = $(this).data("pid");
    $.ajax({
        url: BASE_URL + "shop/add-to-cart",
        type: "GET",
        dataType: "html",
        data: { product_id: pid },
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

$('#article').summernote({
    height: 350,
});


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
  


$(document).on({
    "contextmenu": function(e) {
        console.log("ctx menu button:", e.which); 

        // Stop the context menu
        e.preventDefault();
    },
    "mousedown": function(e) { 
        console.log("normal mouse down:", e.which); 
    },
    "mouseup": function(e) { 
        console.log("normal mouse up:", e.which); 
    }
});



$(document).ready(function() {

    var select = $('select[multiple]');
    var options = select.find('option');

    var div = $('<div />').addClass('selectMultiple');
    var active = $('<div />');
    var list = $('<ul />');
    var placeholder = select.data('placeholder');

    var span = $('<span />').text(placeholder).appendTo(active);

    options.each(function() {
        var text = $(this).text();
        if($(this).is(':selected')) {
            active.append($('<a />').html('<em>' + text + '</em><i></i>'));
            span.addClass('hide');
        } else {
            list.append($('<li />').html(text));
        }
    });

    active.append($('<div />').addClass('arrow'));
    div.append(active).append(list);

    select.wrap(div);

    $(document).on('click', '.selectMultiple ul li', function(e) {
        var select = $(this).parent().parent();
        var li = $(this);
        if(!select.hasClass('clicked')) {
            select.addClass('clicked');
            li.prev().addClass('beforeRemove');
            li.next().addClass('afterRemove');
            li.addClass('remove');
            var a = $('<a />').addClass('notShown').html('<em>' + li.text() + '</em><i></i>').hide().appendTo(select.children('div'));
            a.slideDown(400, function() {
                setTimeout(function() {
                    a.addClass('shown');
                    select.children('div').children('span').addClass('hide');
                    select.find('option:contains(' + li.text() + ')').prop('selected', true);
                }, 500);
            });
            setTimeout(function() {
                if(li.prev().is(':last-child')) {
                    li.prev().removeClass('beforeRemove');
                }
                if(li.next().is(':first-child')) {
                    li.next().removeClass('afterRemove');
                }
                setTimeout(function() {
                    li.prev().removeClass('beforeRemove');
                    li.next().removeClass('afterRemove');
                }, 200);

                li.slideUp(400, function() {
                    li.remove();
                    select.removeClass('clicked');
                });
            }, 600);
        }
    });

    $(document).on('click', '.selectMultiple > div a', function(e) {
        var select = $(this).parent().parent();
        var self = $(this);
        self.removeClass().addClass('remove');
        select.addClass('open');
        setTimeout(function() {
            self.addClass('disappear');
            setTimeout(function() {
                self.animate({
                    width: 0,
                    height: 0,
                    padding: 0,
                    margin: 0
                }, 300, function() {
                    var li = $('<li />').text(self.children('em').text()).addClass('notShown').appendTo(select.find('ul'));
                    li.slideDown(400, function() {
                        li.addClass('show');
                        setTimeout(function() {
                            select.find('option:contains(' + self.children('em').text() + ')').prop('selected', false);
                            if(!select.find('option:selected').length) {
                                select.children('div').children('span').removeClass('hide');
                            }
                            li.removeClass();
                        }, 400);
                    });
                    self.remove();
                })
            }, 300);
        }, 400);
    });

    $(document).on('click', '.selectMultiple > div .arrow, .selectMultiple > div span', function(e) {
        $(this).parent().parent().toggleClass('open');
    });

});
