
<!DOCTYPE html>
    <html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp">


    <!--meta-->
    <meta name="robots" content="index, follow">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!--favicon icon-->
    <link rel="icon" href="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>
            Checkout : Grostore Online Store
    </title>


            <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="" />
        <meta itemprop="description" content="" />
        <meta itemprop="image" content="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png" />

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product" />
        <meta name="twitter:site" content="@publisher_handle" />
        <meta name="twitter:title" content="" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:creator"
            content="@author_handle"/>
    <meta name="twitter:image" content="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png"/>

    <!-- Open Graph data -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://grostore.themetags.com" />
    <meta property="og:image" content="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="Grostore Online Store" />
    <meta property="fb:app_id" content="">

    <!-- head-scripts -->
    <script>
    'use strict'

    var TT = TT || {};
    TT.localize = {
        buyNow: 'Buy Now',
        addToCart: 'Add to Cart',
        outOfStock: 'Out of Stock',
        addingToCart: 'Adding..',
        optionsAlert: 'Please choose all the available options',
        applyCoupon: 'Apply Coupon',
        pleaseWait: 'Please Wait',
    }

    TT.ProductSliders = () => {
        let quickViewProductSlider = new Swiper(".quickview-product-slider", {
            slidesPerView: 1,
            centeredSlides: true,
            speed: 700,
            loop: true,
            loopedSlides: 6,
        });
        let productThumbnailSlider = new Swiper(".product-thumbnail-slider", {
            slidesPerView: 4,
            speed: 700,
            loop: true,
            spaceBetween: 20,
            slideToClickedSlide: true,
            loopedSlides: 6,
            centeredSlides: true,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                380: {
                    slidesPerView: 3,
                },
                576: {
                    slidesPerView: 4,
                },
            },
        });
        if (quickViewProductSlider && quickViewProductSlider.length > 0) {
            quickViewProductSlider.forEach(function(item, index) {
                item.controller.control = productThumbnailSlider[index];
                productThumbnailSlider[index].controller.control = item;
            });
        } else {
            quickViewProductSlider.controller.control = productThumbnailSlider;
            productThumbnailSlider.controller.control = quickViewProductSlider;
        }
    }
</script>
    <!-- head-scripts -->

    <!--build:css-->
    <!-- 3rd party -->
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/toastr.css?v=v4.4.0">
<!-- 3rd party -->
    <link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/default/assets/css/main.css?v=v4.4.0">

<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/select2.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/custom.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/summernote-lite.min.css?v=v4.4.0">
<link rel="stylesheet" href="https://grostore.themetags.com/public/frontend/common/css/summernote-custom.css?v=v4.4.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css">
<style>
    @media (min-width: 1200px) {
        .choose-us-section::after {
            background-image: url(https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png);
        }

        .on-sale-banner {
            background-image: url(https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png);
        }
    }
</style>
    <!-- endbuild -->
        <!-- PWA  -->
    <meta name="theme-color" content="#6eb356"/>
    <link rel="apple-touch-icon" href="https://grostore.themetags.com/public//pwa.png?v=v4.4.0"/>
    <link rel="manifest" href="https://grostore.themetags.com/public//manifest.json?v=v4.4.0"/>

    <!-- recaptcha -->
        <!-- recaptcha -->

</head>

<body>


    <!--preloader start-->
       {{--  <div id="preloader">
        <img src="https://grostore.themetags.com/public/uploads/media/ddyKe7WlmV3zgvnDrbwK4qMEUIQrosUkHS6V0wIi.gif" alt="preloader" class="img-fluid" max-width="180">
    </div> --}}
        <!--preloader end-->

    <!--main content wrapper start-->
        <div class="main-wrapper">
        <!--header section start-->
                    <header class="gheader position-relative z-2 header-sticky">
        <div class="ghead-topbar bg-primary d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-xl-3">
                    <div class="topbar-info d-none d-xl-block">
                        <p class="text-white fs-sm fw-medium mb-0">Bienvenue dans notre magasin Bio</p>
                    </div>

                </div>
                <div class="col-xxl-8 col-xl-9">

                    <ul
                        class="d-flex align-items-center justify-content-center justify-content-xl-end topbar-info-right">
                        <li class="nav-item">
                                                            <a href="mailto:groshop@support.com" class="text-light">
                                    <span class="me-1">
                                        <svg width="16" height="14" viewBox="0 0 20 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.2422 0H1.75781C0.790547 0 0 0.783572 0 1.75V12.25C0 13.2168 0.791055 14 1.75781 14H18.2422C19.2095 14 20 13.2164 20 12.25V1.75C20 0.783339 19.2091 0 18.2422 0ZM17.9723 1.16667C17.4039 1.73433 10.7283 8.40194 10.4541 8.67588C10.225 8.90462 9.77512 8.90478 9.54594 8.67588L2.02773 1.16667H17.9723ZM1.17188 12.0355V1.96447L6.21348 7L1.17188 12.0355ZM2.02773 12.8333L7.04078 7.82631L8.71598 9.49951C9.40246 10.1852 10.5978 10.1849 11.2841 9.49951L12.9593 7.82635L17.9723 12.8333H2.02773ZM18.8281 12.0355L13.7865 7L18.8281 1.96447V12.0355Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                    {{$Infos->email}}
                                </a>
                                                    </li>









                        <li class="nav-item">
                            <a href="javascript:void(0)" class="btn btn-link p-0 tt-theme-toggle fw-normal text-light">
                                <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Dark">Dark <i class="fas fa-moon fs-lg ms-1"></i>
                                </div>
                                <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Light">Light <i class="fas fa-sun fs-lg ms-1"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gshop-navbar bg-white rounded ps-lg-5 position-relative">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-3 col-md-3 col-5">
                    <a href="{{url('/')}}" class="logo"><img
                            src="{{asset('storage/images/logo.png')}}" alt="logo" class="img-fluid"></a>
                </div>
                <div class="col-xxl-10 col-xl-9 col-md-9 col-7">
                    <div class="gshop-navbar-right d-flex align-items-center justify-content-end position-relative">

                                                    <div class="category-dropdown position-relative d-none d-md-inline-block">
                                <a href="javascript:void(0)"
                                    class="category-dropdown-btn fw-bold d-none d-sm-inline-block">Categories<span
                                        class="ms-1"><i class="fa-solid fa-angle-down"></i></span></a>

                                <div class="category-dropdown-box scrollbar">
                                    <ul class="category-dropdown-menu">
                                        @foreach ($categories as $item)
                                            <li>
                                                <a href="{{url('products/Category/'.$item->id)}}"
                                                    class="d-flex align-items-center">
                                                    <div class="me-2 avatar-icon">
                                                        <img src="https://grostore.themetags.com/public/uploads/media/OfNXzapZlaGqPdd3IcLP4D4bp8BkwDEjlRGhGbfh.png" alt="" class="rounded-circle h-100 w-100">
                                                    </div>
                                                    <span>{{$item->category_name}}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>


                        <nav class="gshop-navmenu ms-3 d-none d-xl-block">
                            <ul class="d-flex align-itmes-center justify-content-end">

                                <li><a href="{{url('/')}}">Accueil</a></li>
                                <li><a href="{{url('List/Products')}}">Produits</a></li>
                                <li><a href="{{url('About')}}">À propos de nous</a></li>
                                <li><a href="{{url('Contact')}}">Contactez-nous</a></li>
                            </ul>
                        </nav>
                        <div class="gshop-header-icons d-none d-md-inline-flex align-items-center justify-content-end ms-3">

                            <div class="gshop-header-user position-relative">
                                <button type="button" class="header-icon">
                                    <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.092 11.9546C12.6656 11.9546 14.0281 11.3902 15.1416 10.2766C16.2547 9.16322 16.8193 7.80093 16.8193 6.2271C16.8193 4.65382 16.2549 3.29134 15.1414 2.1776C14.0279 1.0644 12.6654 0.5 11.092 0.5C9.51825 0.5 8.156 1.0644 7.04266 2.17778C5.92931 3.29116 5.36475 4.65363 5.36475 6.2271C5.36475 7.80093 5.92931 9.1634 7.04266 10.2768C8.15636 11.39 9.51879 11.9546 11.092 11.9546ZM8.0281 3.16308C8.88239 2.30877 9.88453 1.89349 11.092 1.89349C12.2993 1.89349 13.3017 2.30877 14.1561 3.16308C15.0104 4.01757 15.4259 5.01992 15.4259 6.2271C15.4259 7.43464 15.0104 8.43681 14.1561 9.2913C13.3017 10.1458 12.2993 10.5611 11.092 10.5611C9.88489 10.5611 8.88275 10.1456 8.0281 9.2913C7.17364 8.43699 6.7582 7.43464 6.7582 6.2271C6.7582 5.01992 7.17364 4.01757 8.0281 3.16308Z"
                                            fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                        <path
                                            d="M21.1339 18.893C21.1012 18.4201 21.0352 17.9043 20.9379 17.3596C20.8397 16.8108 20.7133 16.292 20.562 15.8178C20.4055 15.3277 20.1931 14.8438 19.9301 14.38C19.6575 13.8986 19.3371 13.4794 18.9776 13.1345C18.6016 12.7736 18.1414 12.4835 17.6091 12.2719C17.0787 12.0614 16.4909 11.9547 15.8621 11.9547C15.6152 11.9547 15.3763 12.0564 14.9151 12.3576C14.6313 12.5433 14.2993 12.7581 13.9287 12.9956C13.6118 13.1982 13.1825 13.3879 12.6523 13.5598C12.135 13.7277 11.6098 13.8129 11.0912 13.8129C10.5729 13.8129 10.0477 13.7277 9.53001 13.5598C9.00034 13.3881 8.57088 13.1984 8.25455 12.9958C7.88747 12.7605 7.55527 12.5457 7.26718 12.3574C6.80634 12.0562 6.56753 11.9545 6.32059 11.9545C5.69163 11.9545 5.10401 12.0614 4.57378 12.2721C4.04189 12.4833 3.58143 12.7734 3.20512 13.1347C2.84561 13.4798 2.52522 13.8988 2.25281 14.38C1.99019 14.8438 1.77758 15.3276 1.62108 15.818C1.46993 16.2922 1.34351 16.8108 1.24533 17.3596C1.14788 17.9035 1.082 18.4195 1.04933 18.8935C1.01722 19.3569 1.00098 19.8393 1.00098 20.3266C1.00098 21.5934 1.40238 22.6189 2.19394 23.3752C2.97572 24.1216 4.00996 24.5 5.26808 24.5H16.9157C18.1735 24.5 19.2077 24.1216 19.9897 23.3752C20.7814 22.6194 21.1828 21.5935 21.1828 20.3264C21.1826 19.8374 21.1662 19.3551 21.1339 18.893ZM19.0123 22.3449C18.4957 22.8381 17.8099 23.0779 16.9155 23.0779H5.26808C4.37354 23.0779 3.68773 22.8381 3.17135 22.3451C2.66474 21.8613 2.41854 21.2008 2.41854 20.3266C2.41854 19.8718 2.43349 19.4229 2.46339 18.9918C2.49255 18.569 2.55216 18.1044 2.64056 17.6108C2.72786 17.1233 2.83896 16.6658 2.9711 16.2516C3.09789 15.8545 3.27082 15.4612 3.48527 15.0824C3.68995 14.7214 3.92544 14.4116 4.18529 14.1621C4.42835 13.9286 4.73471 13.7375 5.0957 13.5942C5.42956 13.4616 5.80476 13.3891 6.21208 13.3781C6.26172 13.4046 6.35012 13.4552 6.49334 13.5488C6.78475 13.7394 7.12064 13.9567 7.49197 14.1946C7.91054 14.4624 8.44981 14.7042 9.09409 14.9128C9.75277 15.1265 10.4245 15.235 11.0913 15.235C11.7581 15.235 12.4301 15.1265 13.0884 14.913C13.7333 14.704 14.2723 14.4624 14.6915 14.1943C15.0715 13.9506 15.3979 13.7395 15.6894 13.5488C15.8326 13.4553 15.921 13.4046 15.9706 13.3781C16.3781 13.3891 16.7533 13.4616 17.0874 13.5942C17.4482 13.7375 17.7545 13.9288 17.9976 14.1621C18.2574 14.4114 18.4929 14.7212 18.6976 15.0826C18.9122 15.4612 19.0854 15.8547 19.212 16.2515C19.3443 16.6662 19.4556 17.1235 19.5427 17.6106C19.6309 18.1052 19.6907 18.5699 19.7199 18.992V18.9924C19.7499 19.4218 19.7651 19.8705 19.7653 20.3266C19.7651 21.201 19.5189 21.8613 19.0123 22.3449Z"
                                            fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                    </svg>
                                </button>
                                <div class="user-menu-wrapper">
                                    <ul class="user-menu">
                                        @guest
                                        <li>
                                            <a href="{{url('login')}}">
                                                <span class="me-2">
                                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                                </span>Se connecter
                                                </a>
                                        </li>
                                        @else
                                        <li>
                                            <a href="{{route('Dashboard')}}">
                                                <span class="me-2">
                                                    <i class="fa-solid fa-bars"></i>
                                                </span>Tableau de bord
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <span class="me-2">
                                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                                </span>{{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>


                                        @endguest

                                     </ul>
                                </div>
                            </div>
                            <div class="gshop-header-cart position-relative">


                                <button type="button" class="header-icon">
                                    <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.1704 23.9559L19.6264 7.01422C19.5843 6.55156 19.1908 6.19718 18.7194 6.19718H15.5355V4.78227C15.5355 2.14533 13.3583 0 10.6823 0C8.00628 0 5.82937 2.14533 5.82937 4.78227V6.19718H2.6433C2.17192 6.19718 1.77839 6.55156 1.73625 7.01422L0.186259 24.0225C0.163431 24.2735 0.248671 24.5223 0.421216 24.7082C0.593761 24.8941 0.837705 25 1.0933 25H20.2695C20.2702 25 20.2712 25 20.2719 25C20.775 25 21.1826 24.5982 21.1826 24.1027C21.1825 24.0528 21.1784 24.0036 21.1704 23.9559ZM7.65075 4.78227C7.65075 3.1349 9.01071 1.79465 10.6824 1.79465C12.3542 1.79465 13.7142 3.1349 13.7142 4.78227V6.19718H7.65075V4.78227ZM2.08948 23.2055L3.47591 7.99183H5.82937V9.59649C5.82937 10.0921 6.237 10.4938 6.74006 10.4938C7.24313 10.4938 7.65075 10.0921 7.65075 9.59649V7.99183H13.7142V9.59649C13.7142 10.0921 14.1219 10.4938 14.6249 10.4938C15.128 10.4938 15.5356 10.0921 15.5356 9.59649V7.99183H17.8869L19.2733 23.2055H2.08948Z"
                                            fill="#5D6374" />
                                    </svg>
                                    <span
                                        class="cart-counter badge bg-primary rounded-circle p-0 ">3</span>
                                </button>
                                <div class="cart-box-wrapper">
                                    <div class="apt_cart_box theme-scrollbar">
                                        <ul class="at_scrollbar scrollbar cart-navbar-wrapper hasListCart" data-simplebar="init" style="display: none;">
                                            <div class="simplebar-wrapper" style="margin: 0px;">
                                                <div class="simplebar-height-auto-observer-wrapper">
                                                    <div class="simplebar-height-auto-observer"></div>
                                                </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;" _mstaria-label="356018">
                                                                <div class="simplebar-content ContentListCart" style="padding: 0px;">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder" style="width: auto; height: 166px;">
                                                    </div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar simplebar-visible" style="height: 0px; display: none;"></div>
                                                </div>
                                            </ul>

                                         <ul class="at_scrollbar scrollbar cart-navbar-wrapper HasNotListCart" style="display: none;">
                                            <li class="ListImageNoListCart">
                                                <img src="https://grostore.themetags.com/public/frontend/default/assets/img/empty-cart.svg?v=v4.4.0" alt="" srcset=""
                                                    class="img-fluid">
                                            </li>
                                        </ul>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <h6 class="mb-0">Total:</h6>
                                            <span
                                                class="fw-semibold text-secondary sub-total-price"></span>
                                        </div>
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-6">
                                                <a href="{{url('Cart')}}"
                                                    class="btn btn-secondary btn-md mt-4 w-100"><span
                                                        class="me-2"><i
                                                            class="fa-solid fa-shopping-bag"></i></span>Voir le panier</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{url('checkout')}}"
                                                    class="btn btn-primary btn-md mt-4 w-100"><span class="me-2"><i
                                                            class="fa-solid fa-credit-card"></i></span>Caisses</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="gshop-header-contact align-items-center ms-7 position-relative d-none d-lg-flex d-xl-none d-xxl-flex">
                            <a href="tel:+88225467820"
                                class="d-flex align-items-center">
                                <span
                                    class="icon d-inline-flex rounded-circle justify-content-center align-items-center bg-secondary-light">
                                    <svg width="20" height="24" viewBox="0 0 23 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.98193 3.44444C1.98193 2.09441 2.97352 1 4.19672 1H7.82812C8.30477 1 8.72795 1.33664 8.87867 1.83572L10.5373 7.3277C10.7116 7.90472 10.475 8.53538 9.98206 8.8074L7.48236 10.1868C8.70297 13.1748 10.884 15.5821 13.5913 16.9292L14.8411 14.1703C15.0876 13.6263 15.659 13.3651 16.1818 13.5575L21.1577 15.3881C21.61 15.5545 21.915 16.0215 21.915 16.5476V20.5556C21.915 21.9056 20.9234 23 19.7002 23H18.5928C9.41887 23 1.98193 14.7919 1.98193 4.66667V3.44444Z"
                                            stroke="#FF7C08" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div class="ms-3">
                                    <span class="text-muted fs-xs">Phone &amp; Telephone</span>
                                    <h6 class="mb-0 mt-1 fs-sm">+88225467820</h6>
                                </div>
                            </a>
                        </div>
                        <button class="gshop-offcanvas-btn offcanvas-toggle ms-3">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.5892 0C1.66061 0 0.0917969 1.56893 0.0917969 3.4974C0.0917969 5.42588 1.65997 6.9947 3.5892 6.9947C5.51844 6.9947 7.08661 5.42588 7.08661 3.4974C7.08661 1.56893 5.51768 0 3.5892 0Z"
                                    fill="white" />
                                <path
                                    d="M14.909 0C12.9805 0 11.4116 1.56893 11.4116 3.4974C11.4116 5.42588 12.9805 6.9947 14.909 6.9947C16.8376 6.9947 18.4068 5.42588 18.4068 3.4974C18.4068 1.56893 16.8383 0 14.909 0Z"
                                    fill="white" />
                                <path
                                    d="M26.411 6.99481C28.3391 6.99481 29.9084 5.42599 29.9084 3.49751C29.9084 1.56903 28.3404 0 26.411 0C24.4815 0 22.9136 1.56893 22.9136 3.4974C22.9136 5.42588 24.4827 6.99481 26.411 6.99481Z"
                                    fill="white" />
                                <path
                                    d="M3.49805 18.2016C5.42653 18.2016 6.99578 16.6331 6.99578 14.7043C6.99578 12.7754 5.42653 11.2066 3.49805 11.2066C1.56958 11.2066 0 12.7755 0 14.7043C0 16.6331 1.56958 18.2016 3.49805 18.2016Z"
                                    fill="white" />
                                <path
                                    d="M14.8172 18.2016C16.7454 18.2016 18.3146 16.6331 18.3146 14.7043C18.3146 12.7754 16.7467 11.2066 14.8172 11.2066C12.8881 11.2066 11.3198 12.7754 11.3198 14.7043C11.3198 16.6331 12.8888 18.2016 14.8172 18.2016Z"
                                    fill="white" />
                                <path
                                    d="M26.3205 18.2016C28.2494 18.2016 29.8179 16.6331 29.8179 14.7043C29.8179 12.7754 28.2494 11.2066 26.3205 11.2066C24.3916 11.2066 22.8218 12.7754 22.8218 14.7043C22.8218 16.6331 24.391 18.2016 26.3205 18.2016Z"
                                    fill="white" />
                                <path
                                    d="M3.57813 22.3786C1.64965 22.3786 0.0800781 23.9471 0.0800781 25.876C0.0800781 27.8041 1.64965 29.3733 3.57813 29.3733C5.50661 29.3733 7.07543 27.8049 7.07543 25.876C7.07543 23.9471 5.50661 22.3786 3.57813 22.3786Z"
                                    fill="white" />
                                <path
                                    d="M14.898 22.3786C12.9694 22.3786 11.3999 23.9471 11.3999 25.876C11.3999 27.8041 12.9688 29.3733 14.898 29.3733C16.8261 29.3733 18.3953 27.8049 18.3953 25.876C18.3953 23.9471 16.8261 22.3786 14.898 22.3786Z"
                                    fill="white" />
                                <path
                                    d="M26.4002 22.3786C24.4721 22.3786 22.9028 23.9471 22.9028 25.876C22.9028 27.8041 24.4721 29.3733 26.4002 29.3733C28.3291 29.3733 29.8976 27.8049 29.8976 25.876C29.8976 23.9471 28.3284 22.3786 26.4002 22.3786Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
                <!--header section end-->

        <!--breadcrumb section start-->
                <!--breadcrumb section end-->

        <!--offcanvas menu start-->
        <div class="offcanvas_menu position-fixed">
            <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
                <a href="{{url('/')}}" class="logo-wrapper d-inline-block mb-5"><img
                        src="{{asset('storage/images/logo.png')}}" alt="logo"></a>
                <div class="offcanvas-content">
                    <h4 class="mb-4">À propos de nous</h4>
                    <p>Explain to you how all this mistaken denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actual teachings.

                  Mistaken denouncing pleasure and praising pain was born and we will give you complete account of the system expound.</p>
                    <a href="{{url('About')}}" class="btn btn-primary mt-4">À propos de nous</a>
                </div>
            </div>

            <div class="mobile-menu d-md-block d-lg-block d-xl-none mb-4">
                <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>

                <nav class="mobile-menu-wrapperoffcanvas-contact">
                    <ul>

                       <li>
                           <a href="{{url('/')}}">Accueil</a>
                       </li>
                       <li>
                           <a href="{{url('List/Products')}}">Produits</a>
                       </li>
                       <li><a href="{{url('About')}}">À propos de nous</a></li>

                       <li><a  href="{{url('Contact')}}">Contactez-nous</a></li>

                           <li>
                           <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               <span class="me-2">
                                   <i class="fa-solid fa-arrow-right-from-bracket"></i>
                               </span>{{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>

                           </li>
                                                    </ul>
                </nav>

            </div>

            <div class="offcanvas-contact mt-4">
                <h5 class="mb-4 mt-5">Informations de contact</h5>
                <address>
                   {{$Infos->address}} <br>
                    <a href="tel:{{$Infos->phone}}">{{$Infos->phone}}</a> <br>
                    <a href="mailto:{{$Infos->email}}">{{$Infos->email}}</a>
                </address>
            </div>
            <div class="offcanvas-contact social-contact mt-4">
                <a href="https://www.facebook.com/" target="_blank" class="social-btn"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/" target="_blank" class="social-btn"><i
                        class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/" target="_blank" class="social-btn"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/" target="_blank" class="social-btn"><i
                        class="fab fa-youtube"></i></a>
            </div>
           </div>
        <!--offcanvas menu end-->

            <!--breadcrumb-->
    <div class="gstore-breadcrumb position-relative z-1 overflow-hidden mt--50">
    <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/bg-shape-6.png?v=v4.4.0" alt="bg-shape"
    class="position-absolute start-0 z--1 w-100 bg-shape">
{{-- <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/pata-xs.svg?v=v4.4.0" alt="pata"
    class="position-absolute pata-xs z--1 vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/onion.png?v=v4.4.0" alt="onion"
    class="position-absolute z--1 onion start-0 top-0 vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/frame-circle.svg?v=v4.4.0" alt="frame circle"
    class="position-absolute z--1 frame-circle vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/leaf.svg?v=v4.4.0" alt="leaf"
    class="position-absolute z--1 leaf vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/garlic-white.png?v=v4.4.0" alt="garlic"
    class="position-absolute z--1 garlic vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/roll-1.png?v=v4.4.0" alt="roll"
    class="position-absolute z--1 roll vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/roll-2.png?v=v4.4.0" alt="roll"
    class="position-absolute z--1 roll-2 vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/pata-xs.svg?v=v4.4.0" alt="roll"
    class="position-absolute z--1 pata-xs-2 vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/tomato-half.svg?v=v4.4.0" alt="tomato"
    class="position-absolute z--1 tomato-half vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/tomato-slice.svg?v=v4.4.0" alt="tomato"
    class="position-absolute z--1 tomato-slice vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/cauliflower.png?v=v4.4.0" alt="tomato"
    class="position-absolute z--1 cauliflower vector-shape">
<img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/leaf-gray.png?v=v4.4.0" alt="tomato"
    class="position-absolute z--1 leaf-gray vector-shape"> --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <div class="breadcrumb-content">
        <h2 class="mb-2 text-center">Confirmation de commande</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{url('/')}}">Accueil</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page">Paiement</li>
            </ol>
        </nav>
    </div>
            </div>
        </div>
    </div>
</div>
    <!--breadcrumb-->
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <!--checkout form start-->
    <form  action="{{url("PostCheckout")}}" method="POST">
        @csrf
        <div class="checkout-section ptb-120">
            <div class="container">
                <div class="row g-4">
                    <!-- form data -->
                    <div class="col-xl-8">
                        <div class="checkout-steps">
                            <!-- personal information -->
                            <h4 class="mt-7">Informations personnelles</h4>
                            <div class=" mt-3 p-5 bg-white rounded-2">
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Nom Complet</label>
                                            <input type="text" name="Name"
                                                placeholder="Nom Complet" value=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>E-mail</label>
                                            <input type="email" name="email"
                                                placeholder="votre email" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Téléphone</label>
                                            <input type="text" name="phone"
                                                placeholder="Numéro de téléphone" value=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="label-input-field">
                                            <label>Ville</label>
                                            <input type="text" name="city"
                                                placeholder="Votre ville" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="label-input-field">
                                            <label>Adresse</label>
                                            <textarea rows="3" type="text" name="address"
                                                placeholder="Votre Adresse" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- personal information -->
                        </div>
                    </div>
                    <!-- form data -->

                    <!-- order summary -->
                    <div class="col-xl-4">
                        <div class="checkout-sidebar">
                            <div class="sidebar-widget py-6 px-4 bg-white rounded-2">
                                <div class="widget-title d-flex">
                                    <h5 class="mb-0 flex-shrink-0">Récapitulatif de la commande</h5>
                                    <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                </div>
                                <table class="sidebar-table w-100 mt-5">
                                    <tr>
                                        <td>(+) Articles({{$count}}):</td>
                                        <td class="text-end">{{$Total}} DH</td>
                                    </tr>
                                </table>

                                <span class="sidebar-spacer d-block my-4 opacity-50"></span>

                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-md">Total</h6>
                                    <h6 class="mb-0 fs-md">{{$Total}} DH</h6>
                                </div>

                                <span class="sidebar-spacer d-block my-4 opacity-50"></span>

                                <button type="submit" class="btn btn-primary  w-100">Paiement</button>
                            </div>
                        </div>
                    </div>
                    <!-- order summary -->
                </div>
            </div>
        </div>
    </form>
    <!--checkout form end-->


    <!--add address modal start-->
    <div class="modal fade addAddressModal" id="addAddressModal">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-body">
                 <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>

                 <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                     <h2 class="modal-title fs-5 mb-3">Add New Address</h2>
                     <div class="row align-items-center g-4 mt-3">
                         <form action="https://grostore.themetags.com/new-address" method="POST">
                             <input type="hidden" name="_token" value="Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp" autocomplete="off">                             <div class="row g-4">
                                 <div class="col-sm-6">
                                     <div class="w-100 label-input-field">
                                         <label>Country</label>
                                         <select class="select2Address" name="country_id" required>
                                             <option value="">Select Country</option>
                                                                                              <option value="18">Bangladesh</option>
                                                                                              <option value="101">India</option>
                                                                                              <option value="166">Pakistan</option>
                                                                                              <option value="231">United States</option>
                                                                                      </select>
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="w-100 label-input-field">
                                         <label>State</label>
                                         <select class="select2Address" required name="state_id">
                                             <option value="">Select State</option>

                                         </select>
                                     </div>
                                 </div>

                                 <div class="col-sm-6">
                                     <div class="w-100 label-input-field">
                                         <label>City</label>
                                         <select class="select2Address" required name="city_id">
                                             <option value="">Select City</option>

                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <div class="w-100 label-input-field">
                                         <label>Default Address?</label>
                                         <select class="select2Address" name="is_default">
                                             <option value="0">No</option>
                                             <option value="1">Set Default</option>
                                         </select>
                                     </div>
                                 </div>

                                 <div class="col-sm-12">
                                     <div class="label-input-field">
                                         <label>Address</label>
                                         <textarea rows="4" placeholder="2/5 Elephant Road, New Town" name="address" required></textarea>
                                     </div>
                                 </div>

                             </div>
                             <div class="mt-6 d-flex">
                                 <button type="submit"
                                     class="btn btn-secondary btn-md me-3">Save</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade editAddressModal" id="editAddressModal">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-body">
                 <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                 <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                     <h2 class="modal-title fs-5 mb-3">Update Address</h2>

                     <div class="spinner pt-6 pb-8 d-none">
                         <div class="row align-items-center g-4 mt-3">
                             <div class="d-flex justify-content-center">
                                 <div class="spinner-border" role="status">
                                     <span class="visually-hidden">Loading...</span>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="edit-address d-none">

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade deleteAddressModal" id="deleteAddressModal">
     <div class="modal-dialog address-delete-modal modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-body">
                 <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                 <div class="bg-white rounded-3 py-6 px-4">
                     <h2 class="modal-title fs-5 mb-3">Delete Address</h2>
                     <div class="pt-6 pb-8 text-center">
                         <h6>Want to delete this address?</h6>
                     </div>
                     <div class="text-center">
                         <a href="" class="btn btn-secondary delete-address-link">Delete</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


     <!--add address modal end-->

        <!-- modals -->
        <div class="modal fade" id="quickview_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content min-h-400">
            <div class="modal-body h-100 bg-white">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="data-preloader-wrapper d-flex align-items-center justify-content-center min-h-400">
                    <div class="" role="status">
                        <span class="sr-only"></span>
                    </div>
                </div>

                <div class="product-info">

                </div>
            </div>
        </div>
    </div>
</div>
        <!-- modals -->


        <!--footer section start-->
        <div class="footer-curve position-relative overflow-hidden">
            <span class="position-absolute section-curve-wrapper top-0 h-100"
                data-background="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/section-curve.png?v=v4.4.0"></span>
           </div>

           <footer class="gshop-footer position-relative pt-8 bg-dark z-1 overflow-hidden">

            <div class="container">
                <div class="row justify-content-center">
                   <div class="col-xl-5 col-lg-6">
                       <div class="gshop_subscribe_form text-center">
                           <h4 class="text-white gshop-title">Abonnez-vous à nous
                               <mark class="p-0 position-relative text-secondary bg-transparent"> Nouvelles Arrivées
                                    <img src="https://grostore.themetags.com/public/frontend/default/assets/img/shapes/border-line.svg?v=v4.4.0"
                                       alt="border line" class="position-absolute border-line">
                               </mark>
                               <br class="d-none d-sm-block">&amp; Les autres informations.
                           </h4>
                           <form class="mt-5 d-flex align-items-center bg-white rounded subscribe_form"  action="" method="POST">
                               <input type="email" class="form-control" placeholder="Enter Email Address" type="email" name="email" required>
                               <button type="submit" class="btn btn-primary flex-shrink-0">Abonnez-vous maintenant
                               </button>
                           </form>
                       </div>
                   </div>
                </div>
                <span class="gradient-spacer my-8 d-block"></span>
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4">Catégorie</h5>
                               <ul class="footer-nav">
                                   @foreach ($categories as $key => $item)
                                       @if ($key < 3)
                                           <li>
                                               <a href="{{ url('products/Category/'.$item->id) }}">{{ $item->category_name }}</a>
                                           </li>
                                       @endif
                                   @endforeach

                           </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4">Pages clients</h5>
                            <ul class="footer-nav">
                               <li><a href="{{url('/')}}">Accueil</a></li>
                                <li><a href="{{url('Contact')}}">Contactez-nous</a></li>
                                <li><a href="{{url('About')}}">à propos de nous</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-white mb-4">Contact Info</h5>
                            <ul class="footer-nav">
                                <li class="text-white pb-2 fs-xs">{{$Infos->address}}</li>
                                <li class="text-white pb-2 fs-xs">{{$Infos->phone}}</li>
                                <li class="text-white pb-2 fs-xs">{{$Infos->email}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

           </footer>
           <div class="mobile-toolbar d-block d-md-none d-lg-none">
           <div class="d-table table-layout-fixed w-100">
               <a class="d-table-cell mobile-toolbar-item  mobile-menu-toggle">
                   <span class="mobile-toolbar-icon"><i class="fas fa-bars"></i></span><span
                       class="mobile-toolbar-label">Category
                   </span>
               </a>

               <a class="d-table-cell mobile-toolbar-item" href="{{url('Account')}}">
                   <span class="mobile-toolbar-icon">
                       <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                               d="M11.092 11.9546C12.6656 11.9546 14.0281 11.3902 15.1416 10.2766C16.2547 9.16322 16.8193 7.80093 16.8193 6.2271C16.8193 4.65382 16.2549 3.29134 15.1414 2.1776C14.0279 1.0644 12.6654 0.5 11.092 0.5C9.51825 0.5 8.156 1.0644 7.04266 2.17778C5.92931 3.29116 5.36475 4.65363 5.36475 6.2271C5.36475 7.80093 5.92931 9.1634 7.04266 10.2768C8.15636 11.39 9.51879 11.9546 11.092 11.9546ZM8.0281 3.16308C8.88239 2.30877 9.88453 1.89349 11.092 1.89349C12.2993 1.89349 13.3017 2.30877 14.1561 3.16308C15.0104 4.01757 15.4259 5.01992 15.4259 6.2271C15.4259 7.43464 15.0104 8.43681 14.1561 9.2913C13.3017 10.1458 12.2993 10.5611 11.092 10.5611C9.88489 10.5611 8.88275 10.1456 8.0281 9.2913C7.17364 8.43699 6.7582 7.43464 6.7582 6.2271C6.7582 5.01992 7.17364 4.01757 8.0281 3.16308Z"
                               fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                           <path
                               d="M21.1339 18.893C21.1012 18.4201 21.0352 17.9043 20.9379 17.3596C20.8397 16.8108 20.7133 16.292 20.562 15.8178C20.4055 15.3277 20.1931 14.8438 19.9301 14.38C19.6575 13.8986 19.3371 13.4794 18.9776 13.1345C18.6016 12.7736 18.1414 12.4835 17.6091 12.2719C17.0787 12.0614 16.4909 11.9547 15.8621 11.9547C15.6152 11.9547 15.3763 12.0564 14.9151 12.3576C14.6313 12.5433 14.2993 12.7581 13.9287 12.9956C13.6118 13.1982 13.1825 13.3879 12.6523 13.5598C12.135 13.7277 11.6098 13.8129 11.0912 13.8129C10.5729 13.8129 10.0477 13.7277 9.53001 13.5598C9.00034 13.3881 8.57088 13.1984 8.25455 12.9958C7.88747 12.7605 7.55527 12.5457 7.26718 12.3574C6.80634 12.0562 6.56753 11.9545 6.32059 11.9545C5.69163 11.9545 5.10401 12.0614 4.57378 12.2721C4.04189 12.4833 3.58143 12.7734 3.20512 13.1347C2.84561 13.4798 2.52522 13.8988 2.25281 14.38C1.99019 14.8438 1.77758 15.3276 1.62108 15.818C1.46993 16.2922 1.34351 16.8108 1.24533 17.3596C1.14788 17.9035 1.082 18.4195 1.04933 18.8935C1.01722 19.3569 1.00098 19.8393 1.00098 20.3266C1.00098 21.5934 1.40238 22.6189 2.19394 23.3752C2.97572 24.1216 4.00996 24.5 5.26808 24.5H16.9157C18.1735 24.5 19.2077 24.1216 19.9897 23.3752C20.7814 22.6194 21.1828 21.5935 21.1828 20.3264C21.1826 19.8374 21.1662 19.3551 21.1339 18.893ZM19.0123 22.3449C18.4957 22.8381 17.8099 23.0779 16.9155 23.0779H5.26808C4.37354 23.0779 3.68773 22.8381 3.17135 22.3451C2.66474 21.8613 2.41854 21.2008 2.41854 20.3266C2.41854 19.8718 2.43349 19.4229 2.46339 18.9918C2.49255 18.569 2.55216 18.1044 2.64056 17.6108C2.72786 17.1233 2.83896 16.6658 2.9711 16.2516C3.09789 15.8545 3.27082 15.4612 3.48527 15.0824C3.68995 14.7214 3.92544 14.4116 4.18529 14.1621C4.42835 13.9286 4.73471 13.7375 5.0957 13.5942C5.42956 13.4616 5.80476 13.3891 6.21208 13.3781C6.26172 13.4046 6.35012 13.4552 6.49334 13.5488C6.78475 13.7394 7.12064 13.9567 7.49197 14.1946C7.91054 14.4624 8.44981 14.7042 9.09409 14.9128C9.75277 15.1265 10.4245 15.235 11.0913 15.235C11.7581 15.235 12.4301 15.1265 13.0884 14.913C13.7333 14.704 14.2723 14.4624 14.6915 14.1943C15.0715 13.9506 15.3979 13.7395 15.6894 13.5488C15.8326 13.4553 15.921 13.4046 15.9706 13.3781C16.3781 13.3891 16.7533 13.4616 17.0874 13.5942C17.4482 13.7375 17.7545 13.9288 17.9976 14.1621C18.2574 14.4114 18.4929 14.7212 18.6976 15.0826C18.9122 15.4612 19.0854 15.8547 19.212 16.2515C19.3443 16.6662 19.4556 17.1235 19.5427 17.6106C19.6309 18.1052 19.6907 18.5699 19.7199 18.992V18.9924C19.7499 19.4218 19.7651 19.8705 19.7653 20.3266C19.7651 21.201 19.5189 21.8613 19.0123 22.3449Z"
                               fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                       </svg>
                   </span>
                   <span class="mobile-toolbar-label">Compte</span>
               </a>
               <a class="d-table-cell mobile-toolbar-item" href="{{url('Cart')}}">


                   <span class="mobile-toolbar-icon mobile-cart-icon">
                       <svg width="18" height="25" viewBox="0 0 22 25" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                               d="M21.1704 23.9559L19.6264 7.01422C19.5843 6.55156 19.1908 6.19718 18.7194 6.19718H15.5355V4.78227C15.5355 2.14533 13.3583 0 10.6823 0C8.00628 0 5.82937 2.14533 5.82937 4.78227V6.19718H2.6433C2.17192 6.19718 1.77839 6.55156 1.73625 7.01422L0.186259 24.0225C0.163431 24.2735 0.248671 24.5223 0.421216 24.7082C0.593761 24.8941 0.837705 25 1.0933 25H20.2695C20.2702 25 20.2712 25 20.2719 25C20.775 25 21.1826 24.5982 21.1826 24.1027C21.1825 24.0528 21.1784 24.0036 21.1704 23.9559ZM7.65075 4.78227C7.65075 3.1349 9.01071 1.79465 10.6824 1.79465C12.3542 1.79465 13.7142 3.1349 13.7142 4.78227V6.19718H7.65075V4.78227ZM2.08948 23.2055L3.47591 7.99183H5.82937V9.59649C5.82937 10.0921 6.237 10.4938 6.74006 10.4938C7.24313 10.4938 7.65075 10.0921 7.65075 9.59649V7.99183H13.7142V9.59649C13.7142 10.0921 14.1219 10.4938 14.6249 10.4938C15.128 10.4938 15.5356 10.0921 15.5356 9.59649V7.99183H17.8869L19.2733 23.2055H2.08948Z"
                               fill="#5D6374" />
                       </svg>
                       <small class="badge bg-primary cart-counter">0</small>
                   </span>
                   <span class="mobile-toolbar-label sub-total-price">₹0.00</span>
               </a>
           </div>
          </div>
<div class="offcanvas-left-menu position-fixed">
    <div class="mobile-menu">
        <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
        <a href="{{url('/')}}" class="d-inline-block mb-5"><img
                src="{{asset('storage/images/logo.png')}}" alt="logo"></a>
        <nav class="mobile-menu-wrapper scrollbar">
            <ul>
                @foreach ($categories as $item)
                <li>
                    <a href="{{url('products/Category/'.$item->id)}}"
                        class="d-flex align-items-center">
                        <div class="me-2 avatar-icon">
                            <img src="https://grostore.themetags.com/public/uploads/media/OfNXzapZlaGqPdd3IcLP4D4bp8BkwDEjlRGhGbfh.png"
                            alt="" class="rounded-circle h-100 w-100">
                        </div>
                        <span>{{$item->category_name}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
         <!--footer section end-->

    </div>


    <!--scroll bottom to top button start-->
    <button class="scroll-top-btn">
        <i class="fa-regular fa-hand-pointer"></i></button>
        <!--scroll bottom to top button end-->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
<script>
    var AddCart              = "{{ url('AddCart')}}";
    var listCartByMacAddress = "{{ url('listCart') }}";
    var PathImage            = "{{ asset('storage/')}}";
    var DeleteCarte          = "{{ url('DeleteCart') }}";
    var DetailProduct        = "{{ url('DetailProduct')}}";
    var filterByPrice        = "{{ url('filterByPrice')}}";
</script>
<script src="{{asset('Js/welcome.js')}}"></script>
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
            _token: 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp',
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
            _token: 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp',
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
            _token: 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp',
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
            _token: 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp',
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
            _token: "Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp",
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
                'X-CSRF-TOKEN': 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp'
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
                'X-CSRF-TOKEN': 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp'
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


    // add to wishlist
    function addToWishlist(productId) {
                                    $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp'
                    },
                    type: "POST",
                    url: 'https://grostore.themetags.com/add-to-wishlist',
                    data: {
                        product_id: productId
                    },
                    success: function(data) {
                        notifyMe('success', data.message);
                    }
                });
                        }
</script>
        <!--endbuild-->

        <!--page's scripts-->
             <script>
         "use strict";

         var parent = '.addAddressModal';

         // runs when the document is ready --> for media files
         $(document).ready(function() {
             if ($("input[name='shipping_address_id']").is(':checked')) {
                 let city_id = $("input[name='shipping_address_id']:checked").data('city_id');
                 getLogistics(city_id);
             }
         });


         //  new address
         function addNewAddress() {
             $('#addAddressModal').modal('show');
             parent = '.addAddressModal';
             addressModalSelect2(parent);
         }

         //  edit address
         function editAddress(addressId) {
             $('#editAddressModal').modal('show');
             $('.spinner').removeClass('d-none');
             $('.edit-address').addClass('d-none');

             parent = '.editAddressModal';
             getAddress(addressId);
         }

         //  delete address
         function deleteAddress(thisAnchorTag) {
             $('#deleteAddressModal').modal('show');
             $('.delete-address-link').prop('href', $(thisAnchorTag).data('url'));
         }

         //  get states on country change
         $(document).on('change', '[name=country_id]', function() {
             var country_id = $(this).val();
             getStates(country_id);
         });

         //  get states
         function getStates(country_id) {
             $.ajax({
                 headers: {
                     'X-CSRF-TOKEN': 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp'
                 },
                 url: "https://grostore.themetags.com/get-states",
                 type: 'POST',
                 data: {
                     country_id: country_id
                 },
                 success: function(response) {
                     $('[name="state_id"]').html("");
                     $('[name="state_id"]').html(JSON.parse(response));
                     addressModalSelect2(parent);
                 }
             });
         }

         //  get cities on state change
         $(document).on('change', '[name=state_id]', function() {
             var state_id = $(this).val();
             getCities(state_id);
         });

         //  get cities
         function getCities(state_id) {
             $.ajax({
                 headers: {
                     'X-CSRF-TOKEN': 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp'
                 },
                 url: "https://grostore.themetags.com/get-cities",
                 type: 'POST',
                 data: {
                     state_id: state_id
                 },
                 success: function(response) {
                     $('[name="city_id"]').html("");
                     $('[name="city_id"]').html(JSON.parse(response));
                     addressModalSelect2(parent);
                 }
             });
         }

         //  get edit address
         function getAddress(addressId) {
             $.ajax({
                 headers: {
                     'X-CSRF-TOKEN': 'Pl29aXWZITq3SLMjOZbWXCCsEHv2yfqEzblaU1Rp'
                 },
                 url: "https://grostore.themetags.com/edit-address",
                 type: 'POST',
                 data: {
                     addressId: addressId
                 },
                 success: function(response) {
                     $('.spinner').addClass('d-none');
                     $('.edit-address').html(response);
                     $('.edit-address').removeClass('d-none');
                     addressModalSelect2(parent);
                 }
             });
         }
     </script>
         <!--page's script-->

        <!--for pwa-->
        <script src="https://grostore.themetags.com/public/sw.js"></script>
        <script>
            if (!navigator.serviceWorker?.controller) {
                navigator.serviceWorker?.register("./public/sw.js").then(function(reg) {
                    // console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>
        <!--for pwa-->

        </body>

        </html>
