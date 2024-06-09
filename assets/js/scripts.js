// Example starter JavaScript for disabling form submissions if there are invalid fields
var ship_id = 0;
var order_id = 0;
var first_name = '';
var last_name = '';
var address = '';
var zip_code = '';
var city = '';
var state = '';
var mobile = '';
var email = '';
var total = 0;
$(document).ready(function() {
    $("#mobileMenuItem").click(function() {
        $(".main-menu-block").slideToggle();
    });
});
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

// document.querySelector("input[type=number]").oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1));
    // document.getElementById('exp-year').addEventListener('input', function() {
    //     // Ensure that the input doesn't exceed four digits
    //     if (this.value.length > 4) {
    //         this.value = this.value.slice(0, 4); // Trim input to first four digits
    //     }
    // });

$(document).ready(function () {
    $("#mobileMenuItem").click(function() {
        $(".main-menu-block").slideToggle();
    });

    $("#continue-shipping-btn").on('click', function () {
        if (ValidateBookConsultationForm()) {
            $("#continue-shipping-btn").attr("disabled", "true");
            $("#paymentBtn").removeAttr("disabled");
            $("#shippingBtn").removeAttr("disabled");
            setTimeout(function () {
                first_name = $('#firstname').val();
                last_name = $('#lastname').val();
                address = $('#address').val();
                zip_code = $('#zip-code').val();
                city = $('#city').val();
                state = $('#state').val();
                mobile = $('#mobile-number').val();
                email = $('#email-address').val();
                total = $('#total').val();
                
                $.post("api/saveshipping.php", {first_name: first_name, last_name: last_name, address: address,zip_code: zip_code,city: city,state: state,mobile: mobile, email: email, order_id: order_id,total: total}, function(result){
                    $("#continue-shipping-btn").attr("disabled", "false")
                    $("#panelsStayOpen-collapseOne").removeClass("show");
                    setTimeout(function () {
                        $("#panelsStayOpen-collapseTwo").addClass("show");
                    }, 200)
                    $('.email-blk').html(email+" / "+mobile);
                    $('#mobile').val(mobile);
                    $('#email').val(email);
                    $('#ship_add').val(address);
                    $('#zip').val(zip_code);
                    $('#ship_city').val(city);
                    $('#ship_state').val(state);
                    const selectEl = $('#ship_state');
                    selectEl.val(state).change();
                    $('.ship-blk').html(address+", "+city+", "+state+", "+zip_code);
                    var resultArr = result.split('|');
                    ship_id = resultArr[0];
                    order_id = resultArr[1];
                    $('#ord_id').val(order_id); 
                    
                  });
            }, 800)
            $("#firstname").addClass("valid");
            $("#lastname").addClass("valid");
            $("#address").addClass("valid");
            $("#zip-code").addClass("valid");
            $("#city").addClass("valid");
            $("#state").addClass("valid");
            $("#mobile-number").addClass("valid");
            $("#email-address").addClass("valid");
        }
    });
    $('#contact_change').click(function(){
        // $('#contact_details').toggle();
        $("#continue-shipping-btn").attr("disabled", "false");
        $("#continue-shipping-btn").removeAttr("disabled");
        $("#panelsStayOpen-collapseTwo").removeClass("show");
        setTimeout(function () {
            $("#panelsStayOpen-collapseOne").addClass("show");
        }, 200)
        // $('.email-blk').toggle();
    });
    $('#add_change').click(function(){
        // $('#add_details').toggle();
        // $('.ship-blk').toggle();
        $("#continue-shipping-btn").attr("disabled", "false");
        $("#continue-shipping-btn").removeAttr("disabled");
        $("#panelsStayOpen-collapseTwo").removeClass("show");
        setTimeout(function () {
            $("#panelsStayOpen-collapseOne").addClass("show");
        }, 200)
    });
    
    $('#contact_save').click(function(){
        mobile =$('#mobile').val();
        email = $('#email').val();
        $.post('api/updateshipping.php?id='+ship_id,{mobile: mobile, email: email},function(data){
            $('.email-blk').html(email+"/"+mobile);
            $('#contact_details').toggle();
            $('.email-blk').toggle();
        });
        
    });
    $('#add_save').click(function(){
        address =$('#ship_add').val();
        zip_code = $('#zip').val();
        city = $('#ship_city').val();
        state = $('#ship_state').val();
        $.post('api/updateshipping.php?id='+ship_id,{address: address, zip_code: zip_code, city: city,state: state},function(data){
            $('.ship-blk').html(address+", "+city+", "+state+", "+zip_code);
            $('#add_details').toggle();
            $('.ship-blk').toggle();
        });
        
    });
});
function placeOrder() {
    if($('#flexCheckDefault').not(":checked").length) {
        alert('Please accept the terms');
    }
    else{

        $('.loader').show();
        setTimeout(function(){
            $('.loader').hide();
            $('#exampleModal').modal('show');
            var mob = $('#mobile-number').val();
            $('#ship_mobile').html(mob);
        },7000);
    }
    return false;
}
function ValidateBookConsultationForm() {
    let isValid = true;

    var first_name = $('#firstname');

    if (first_name.val().trim() === '') { // Use val() instead of value
        isValid = false;
        first_name.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        first_name.removeClass('invalid');
    }

    var last_name = $('#lastname');

    if (last_name.val().trim() === '') { // Use val() instead of value
        isValid = false;
        last_name.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        last_name.removeClass('invalid');
    }

    var address = $('#address');

    if (address.val().trim() === '') { // Use val() instead of value
        isValid = false;
        address.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        address.removeClass('invalid');
    }

    var zip = $('#zip-code');

    if (zip.val().trim() === '') { // Use val() instead of value
        isValid = false;
        zip.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        zip.removeClass('invalid');
    }

    var city = $('#city');

    if (city.val().trim() === '') { // Use val() instead of value
        isValid = false;
        city.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        city.removeClass('invalid');
    }

    var state = $('#state');

    if (state.val().trim() === '') { // Use val() instead of value
        isValid = false;
        state.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        state.removeClass('invalid');
    }

    var phone = $('#mobile-number');

    if (phone.val().trim() === '') { // Use val() instead of value
        isValid = false;
        phone.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        phone.removeClass('invalid');
    }

    // Email
    var email = $('#email-address');
    var emailPattern_1 = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (email.val().trim() === '' || !emailPattern_1.test(email.val())) { // Use val() instead of value
        isValid = false;
        email.addClass('invalid'); // No need to wrap first_name in $() again
    } else {
        email.removeClass('invalid');
    }

    return isValid;
}

// Slider 1
var swiper1 = new Swiper(".realOrganicSlider", {
    slidesPerView: 3,
    loop: true,
    autoplay: true,
    spaceBetween: 30,
    speed: 1500,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 1,
        },
        600: {
            slidesPerView: 1,
            spaceBetween: 5,
        },
        1000: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

// Slider 2
var swiper2 = new Swiper(".liquidEggsSlider", {
    slidesPerView: 3,
    loop: true,
    autoplay: true,
    spaceBetween: 30,
    speed: 1500,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 1,
        },
        600: {
            slidesPerView: 1,
            spaceBetween: 5,
        },
        1000: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

// Slider 3
var swiper3 = new Swiper(".pastureSlider", {
    slidesPerView: 3,
    loop: true,
    autoplay: true,
    spaceBetween: 30,
    speed: 1500,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 1,
        },
        600: {
            slidesPerView: 1,
            spaceBetween: 5,
        },
        1000: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
