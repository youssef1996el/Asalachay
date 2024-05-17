{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}


 <!DOCTYPE html>


 <html lang="en" data-bs-theme="light">


<head>
 <!--required meta tags-->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W">

 <!--favicon icon-->
 <link rel="icon" href="https://grostore.themetags.com/public/frontend/default/assets/img/favicon.png?v=v4.4.0" type="image/png"
     sizes="16x16">

 <!--title-->
 <title>
         Login
 </title>

 <!--build:css-->
 <!-- 3rd party -->
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/toastr.css?v=v4.4.0">
<!-- 3rd party -->
 <link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/default/assets/css/main.css?v=v4.4.0">

<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/select2.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/custom.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/summernote-lite.min.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/summernote-custom.css?v=v4.4.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
<style>
 @media (min-width: 1200px)
 {
     .choose-us-section::after
     {
         background-image: url(https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png);
     }

     .on-sale-banner
     {
         background-image: url(https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png);
     }
}
</style>

     <!-- recaptcha -->

</head>

<body>

 <!--preloader start-->
 <div id="preloader">
     <div id="status"></div>
 </div>
 <!--preloader end-->

 <!--main content wrapper start-->
 <div class="main-wrapper">

         <section class="login-section py-5">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-5 col-12 tt-login-img" data-background="https://grostore.themetags.com/public/frontend/default/assets/img/banner/login-banner.jpg?v=v4.4.0"></div>
             <div class="col-lg-5 col-12 bg-white d-flex p-0 tt-login-col shadow">
                <form class="tt-login-form-wrap p-3 p-md-6 p-lg-6 py-7 w-100" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-7">
                        <a href="https://grostore.themetags.com">
                            <img src="https://grostore.themetags.com/public/uploads/media/0vDgRJLm6biMs5zCaVAze5RFwEwcTF4kSuHsZ9OT.png" alt="logo">
                        </a>
                    </div>
                    <h2 class="mb-4 h3">Salut!
                        <br>Bienvenue à Grostore.
                    </h2>

                    <div class="row g-3">
                    <div class="col-sm-12">
                        <div class="input-field">
                            <input type="hidden" name="login_with" class="login_with" value="email">
                                <span class="login-email ">
                                <label class="fw-bold text-dark fs-sm mb-1">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="Entrer votre Email" class="theme-input mb-1" value="" required>
                                </span>
                            </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-field check-password">
                            <label class="fw-bold text-dark fs-sm mb-1">Mot de passe</label>
                            <div class="check-password">
                                <input type="password" name="password" id="password" placeholder="Mot de passe" class="theme-input" required>
                                <span class="eye eye-icon">
                                    <i class="fa-solid fa-eye"></i>
                                </span>
                                <span class="eye eye-slash">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row g-4 mt-3">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary w-100 sign-in-btn">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </section>

 </div>


 <!-- scripts -->
     <script>
     "use strict";

     // copyAdmin
     function copyAdmin() {
         $('#email').val('admin@themetags.com');
         $('#password').val('123456');
     }

     // copyCustomer
     function copyCustomer() {
         $('#email').val('customer@themetags.com');
         $('#password').val('123456');
     }
     // copyCustomer
     function copyDeliveryMan() {
         $('#email').val('delivery-man@themetags.com');
         $('#password').val('123456');
     }

     // change input to phone
     function handleLoginWithPhone() {
         $('.login_with').val('phone');

         $('.login-email').addClass('d-none');
         $('.login-email input').prop('required', false);

         $('.login-phone').removeClass('d-none');
         $('.login-phone input').prop('required', true);
     }

     // change input to email
     function handleLoginWithEmail() {
         $('.login_with').val('email');
         $('.login-email').removeClass('d-none');
         $('.login-email input').prop('required', true);

         $('.login-phone').addClass('d-none');
         $('.login-phone input').prop('required', false);
     }


     // disable login button
     function handleSubmit() {
         $('#login-form').on('submit', function(e) {
             $('.sign-in-btn').prop('disabled', true);
         });
     }
 </script>

 <!--build:js-->
 <script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/jquery-3.6.4.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/jquery-ui.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/bootstrap.bundle.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/swiper-bundle.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/jquery.magnific-popup.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/simplebar.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/parallax-scroll.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/isotop.pkgd.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/countdown.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/range-slider.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/waypoints.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/counterup.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/vendors/clipboard.min.js?v=v4.4.0"></script>

<script src="https://grostore.themetags.com/public/frontend/common/js/toastr.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/common/js/select2.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/frontend/default/assets/js/app.js?v=v4.4.0"></script>

<script>
 "use strict"

 // runs when the document is ready
 $(document).ready(function() {
     initIsotop();
 });

 // tooltip
 $(function() {
     $('[data-bs-toggle="tooltip"]').tooltip();
 });


 //isotop filter grid
 function initIsotop() {
     var $filter_grid = $(".filter_group").isotope({});
     $(".filter-btns").on("click", "button", function() {
         var filterValue = $(this).attr("data-filter");
         $filter_grid.isotope({
             filter: filterValue,
         });
         $(this).parent().find("button.active").removeClass("active");
         $(this).addClass("active");
     });
 }

 // copy coupon code
 $(function() {
     new ClipboardJS('.copy-text');
 });
 $(".copyBtn").each(function() {
     $(this).on("click", function() {
         $(this).html('Copied');
     });
 });

 // change language
 function changeLocaleLanguage(e) {
     var locale = e.dataset.flag;
     $.post("https://grostore.themetags.com/backend/change-language", {
         _token: 'oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W',
         locale: locale
     }, function(data) {
         setTimeout(() => {
             location.reload();
         }, 300);
     });
 }

 // change currency
 function changeLocaleCurrency(e) {
     var currency_code = e.dataset.currency;
     $.post("https://grostore.themetags.com/backend/change-currency", {
         _token: 'oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W',
         currency_code: currency_code
     }, function(data) {
         setTimeout(() => {
             location.reload();
         }, 300);
     });
 }

 // change location
 function changeLocation(e) {
     var location_id = e.dataset.location;
     $.post("https://grostore.themetags.com/backend/change-location", {
         _token: 'oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W',
         location_id: location_id
     }, function(data) {
         setTimeout(() => {
             location.reload();
         }, 300);
     });
 }


 // showRejectionReason
 function showRejectionReason(reason) {
     $('.reason').empty();
     $('#refundRejectionModal').modal('show');
     $('.reason').html(reason);
 }

 // show product details in modal
 function showProductDetailsModal(productId) {
     $('#quickview_modal .product-info').html(null);
     $('.data-preloader-wrapper>div').addClass('spinner-border');
     $('.data-preloader-wrapper').addClass('min-h-400');
     $('#quickview_modal').modal('show');

     $.post('https://grostore.themetags.com/products/show-product-info', {
         _token: 'oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W',
         id: productId
     }, function(data) {
         setTimeout(() => {
             $('.data-preloader-wrapper>div').removeClass('spinner-border');
             $('.data-preloader-wrapper').removeClass('min-h-400');
             $('#quickview_modal .product-info').html(data);
             TT.ProductSliders();
             cartFunc();
         }, 200);
     });
 }

 $('#quickview_modal').on('hide.bs.modal', function(e) {
     $('#quickview_modal .product-info').html(null);
 });

 // address modal select2
 function addressModalSelect2(parent = '.addAddressModal') {
     $('.select2Address').select2({
         dropdownParent: $(parent)
     });
 }
 addressModalSelect2();

 // ajax toast
 function notifyMe(level, message) {
     if (level == 'danger') {
         level = 'error';
     }
     toastr.options = {
         "timeOut": "5000",
         "closeButton": true,
         "positionClass": "toast-top-center",
     };
     toastr[level](message);
 }

 // laravel flash as toast messages




 // get selected variation information
 function getVariationInfo() {
     if ($('.add-to-cart-form input[name=quantity]').val() > 0 && isValidForAddingToCart()) {
         let data = $('.add-to-cart-form').serializeArray();
         $.ajax({
             type: "POST",
             url: 'https://grostore.themetags.com/products/get-variation-info',
             data: data,
             success: function(response) {

                 $('.all-pricing').addClass('d-none');
                 $('.variation-pricing').removeClass('d-none');
                 $('.variation-pricing').html(response.data.price);

                 $('.add-to-cart-form input[name=product_variation_id]').val(response.data
                     .id);
                 $('.add-to-cart-form input[name=quantity]').prop('max', response.data.stock);

                 if (response.data.stock < 1) {
                     $('.add-to-cart-btn').prop('disabled', true);
                     $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.outOfStock);
                 } else {
                     $('.add-to-cart-btn').prop('disabled', false);
                     $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.addToCart);
                     $('.qty-increase-decrease input[name=quantity]').val(1);
                 }
             }
         });
     }
 }

 // check if it can be added to cart
 function isValidForAddingToCart() {

     var count = 0;
     $('.variation-for-cart').each(function() {
         // how many variations
         count++;
     });

     if ($('.product-radio-btn input:radio:checked').length == count) {
         return true;
     }

     return false;
 }

 // cart func
 function cartFunc() {
     // on selection of variation
     $('.product-radio-btn input').on('change', function() {
         getVariationInfo();
     });

     // increase qty
     $('.qty-increase-decrease .increase').on('click', function() {
         var prevValue = $('.product-qty input[name=quantity]').val();
         var maxValue = $('.product-qty input[name=quantity]').attr('max');
         if (maxValue == undefined || parseInt(prevValue) < parseInt(maxValue)) {
             $('.qty-increase-decrease input[name=quantity]').val(parseInt(prevValue) + 1)
         }
     });

     // decrease qty
     $('.qty-increase-decrease .decrease').on('click', function() {
         var prevValue = $('.product-qty input[name=quantity]').val();
         if (prevValue > 1) {
             $('.qty-increase-decrease input[name=quantity]').val(parseInt(prevValue) - 1)
         }
     });

     // add to cart form submit
     $('.add-to-cart-form').on('submit', function(e) {
         e.preventDefault();
         if (isValidForAddingToCart()) {
             $('.add-to-cart-btn').prop('disabled', true);
             $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.addingToCart);

             // add to cart here
             let data = $('.add-to-cart-form').serializeArray();
             $.ajax({
                 type: "POST",
                 url: 'https://grostore.themetags.com/add-to-cart',
                 data: data,
                 success: function(data) {
                     $('.add-to-cart-btn').prop('disabled', false);
                     $('.add-to-cart-btn .add-to-cart-text').html(TT.localize.addToCart);
                     updateCarts(data);
                     notifyMe(data.alert, data.message);
                 }
             });

         } else {
             optionsAlert();
         }
     })
 }
 cartFunc();

 // without variation form submit
 function directAddToCartFormSubmit($this) {
     // add to cart here
     let parent = $($this).closest('.direct-add-to-cart-form');

     parent.find('.direct-add-to-cart-btn').prop('disabled', true);

     let text = parent.find('.add-to-cart-text').html();
     parent.find('.add-to-cart-text').html(TT.localize.pleaseWait);


     let data = parent.serializeArray();
     $.ajax({
         type: "POST",
         url: 'https://grostore.themetags.com/add-to-cart',
         data: data,
         success: function(data) {
             parent.find('.direct-add-to-cart-btn').prop('disabled', false);

             if (text.includes("Buy Now")) {
                 parent.find('.add-to-cart-text').html(TT.localize.buyNow);
             } else {
                 parent.find('.add-to-cart-text').html(TT.localize.addToCart);
             }
             updateCarts(data);
             notifyMe(data.alert, data.message);
         }
     });
 }

 // please choose all the available options
 function optionsAlert() {
     notifyMe('warning', TT.localize.optionsAlert);
 }

 // handleCartItem
 function handleCartItem(action, id) {
     let data = {
         _token: "oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W",
         action: action,
         id: id,
     };

     $.ajax({
         type: "POST",
         url: 'https://grostore.themetags.com/update-cart',
         data: data,
         success: function(data) {
             if (data.success == true) {

                 $('.apply-coupon-btn').removeClass('d-none');
                 $('.clear-coupon-btn').addClass('d-none');
                 $('.apply-coupon-btn').prop('disabled', false);
                 $('.apply-coupon-btn').html(TT.localize.applyCoupon);
                 updateCarts(data);
                 if (action == 'increase' && data.message) {
                     notifyMe(data.alert, data.message);
                 }
             }
         }
     });
 }

 // coupon-form form submit
 $('.coupon-form').on('submit', function(e) {
     e.preventDefault();
     $('.apply-coupon-btn').prop('disabled', true);
     $('.apply-coupon-btn').html(TT.localize.pleaseWait);

     // apply coupon here
     let data = $('.coupon-form').serializeArray();
     $.ajax({
         type: "POST",
         url: 'https://grostore.themetags.com/apply-coupon',
         data: data,
         success: function(data) {
             if (data.success == false) {
                 notifyMe('error', data.message);
                 $('.apply-coupon-btn').prop('disabled', false);
                 $('.apply-coupon-btn').html(TT.localize.applyCoupon);
             } else {
                 // append clear button
                 $('.coupon-input').prop('disabled', false);
                 $('.apply-coupon-btn').addClass('d-none');
                 $('.clear-coupon-btn').removeClass('d-none');

                 $('.apply-coupon-btn').prop('disabled', false);
                 $('.apply-coupon-btn').html(TT.localize.applyCoupon);

                 updateCouponPrice(data);

             }
         }
     });
 })

 // clear-coupon-btn clicked
 $('.clear-coupon-btn').on('click', function(e) {
     e.preventDefault();
     // append clear button
     $('.coupon-input').prop('disabled', false);
     $('.apply-coupon-btn').removeClass('d-none');
     $('.clear-coupon-btn').addClass('d-none');

     $.ajax({
         type: "GET",
         url: 'https://grostore.themetags.com/clear-coupon',
         success: function(data) {
             updateCouponPrice(data);
         }
     });
 })

 function updateCouponPrice(data) {
     $('.coupon-discount-wrapper').toggleClass('d-none');
     $('.coupon-discount-price').html(data.couponDiscount);
 }

 // update carts markup
 function updateCarts(data) {
     $('.cart-counter').empty();
     $('.sub-total-price').empty();

     $('.cart-navbar-wrapper .simplebar-content').empty();
     $('.cart-listing').empty();

     if (data.cartCount > 0) {
         $('.cart-counter').removeClass('d-none');
     } else {
         $('.cart-counter').addClass('d-none');
     }

     $('.cart-counter').html(data.cartCount);
     $('.sub-total-price').html(data.subTotal);
     $('.cart-navbar-wrapper .simplebar-content').html(data.navCarts);
     $('.cart-listing').html(data.carts);
     $('.coupon-discount-wrapper').addClass('d-none');
     $('.checkout-sidebar').empty();

 }

 // get logistics to check out
 function getLogistics(city_id) {
     $.ajax({
         headers: {
             'X-CSRF-TOKEN': 'oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W'
         },
         url: "https://grostore.themetags.com/get-checkout-logistics",
         type: 'POST',
         data: {
             city_id: city_id
         },
         success: function(data) {
             $('.checkout-sidebar').empty();
             $('.checkout-logistics').empty();
             $('.checkout-logistics').html(data.logistics);
             $('.checkout-sidebar').html(data.summary);
         }
     });
 }

 //  get logistics to check out -- onchange
 $(document).on('change', '[name=chosen_logistic_zone_id]', function() {
     var chosen_logistic_zone_id = $(this).val();
     getShippingAmount(chosen_logistic_zone_id);
 });

 // get logistics to check out
 function getShippingAmount(logistic_zone_id) {
     $.ajax({
         headers: {
             'X-CSRF-TOKEN': 'oGsHO5V8PSPVc5aIwJNJRse7DoNsaPf8Fiy7jB8W'
         },
         url: "https://grostore.themetags.com/shipping-amount",
         type: 'POST',
         data: {
             logistic_zone_id: logistic_zone_id
         },
         success: function(data) {
             $('.checkout-sidebar').empty();
             $('.checkout-sidebar').html(data);
         }
     });
 }

 //  submit checkout form
 $(document).on('submit', '.checkout-form', function(e) {
     // shipping address not selected
     if ($('.checkout-form input[name=shipping_address_id]:checked').length == 0) {
         notifyMe('error', 'Please select shipping address');
         e.preventDefault();;
         return false;
     }

     // logistic not selected
     if ($('.checkout-form input[name=chosen_logistic_zone_id]:checked').length == 0) {
         notifyMe('error', 'Please select logistic');
         e.preventDefault();;
         return false;
     }

     // billing address not selected
     if ($('.checkout-form input[name=billing_address_id]:checked').length == 0) {
         notifyMe('error', 'Please select billing address');
         e.preventDefault();;
         return false;
     }
 });

 // add to wishlist
 function addToWishlist(productId) {
                 notifyMe('warning', 'Please login first');
         }
</script>
 <!--endbuild-->
</body>

</html>

