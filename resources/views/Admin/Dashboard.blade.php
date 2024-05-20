
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--favicon icon-->
    <link rel="shortcut icon" href="https://grostore.themetags.com/public/backend/assets/img/favicon.png?v=v4.4.0">

    <!--title-->
    <title>
            Dashboard : Grostore Online Store
    </title>

    <!--build:css-->
    <link href="https://grostore.themetags.com/public/backend/assets/css/main.css?v=v4.4.0" rel="stylesheet" type="text/css" />
    <link href="https://grostore.themetags.com/public/backend/custom/custom.css?v=v4.4.0" rel="stylesheet" type="text/css" />
    <!-- end build -->
    </head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css">


    <link rel="stylesheet" href="{{asset('Dashboard.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">

<body>

    <!--preloader start-->
    {{-- <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="https://grostore.themetags.com/public/uploads/media/0vDgRJLm6biMs5zCaVAze5RFwEwcTF4kSuHsZ9OT.png"
                class="img-fluid" max-width="180">
            <div class="loading-bar"></div>
        </div>
    </div> --}}
        <!--preloader end-->

    <!--sidebar section start-->
    <aside class="tt-sidebar bg-light-subtle" id="sidebar">
        <div class="tt-brand">
            <a href="{{url('/')}}"
                class="tt-brand-link">
                <img src="{{asset('storage/images/logo.png')}}" class="tt-brand-favicon ms-1" alt="favicon" />
                {{-- <img src="{{asset('storage/images/logo.png')}}" class="tt-brand-logo ms-2" alt="logo" /> --}}
            </a>
            <a href="javascript:void(0);" class="tt-toggle-sidebar">
                <span><i data-feather="chevron-left"></i></span>
            </a>
        </div>

    <div class="tt-sidebar-nav pb-9 pt-4" data-simplebar>

        <ul class="tt-side-nav">
            <li class="side-nav-item nav-item tt-sidebar-user">
                <div class="side-nav-link bg-secondary-subtle mx-2 rounded-3 px-2">
                    <div class="tt-user-avatar lh-1">
                        <div class="avatar avatar-md status-online">
                            <img class="rounded-circle" src="https://grostore.themetags.com/public/uploads/media/dtkoInw3SD3IF3Q2I1jFtEDiE96mDD46RHB9RdxN.jpg"
                                alt="avatar">
                        </div>
                    </div>
                    <div class="tt-nav-link-text ms-2">
                        <h6 class="mb-0 lh-1 tt-line-clamp tt-clamp-1">{{Auth::user()->name}}</h6>
                        <span class="text-muted fs-sm"> Admin</span>
                    </div>
                </div>
            </li>
        </ul>
        <nav class="navbar navbar-vertical navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <div class="w-100" id="leftside-menu-container">
                    <ul class="tt-side-nav searchMenu">
                        <!-- dashboard -->
                        <li @if(Request::is('Dashboard')) class="side-nav-item nav-item tt-menu-item-active" @else class="side-nav-item nav-item tt-menu-item" @endif>
                            <a href="{{ url('Dashboard') }}" @if(Request::is('Dashboard')) class="side-nav-link active" @endif>

                                <span class="tt-nav-link-icon"><i data-feather="pie-chart"></i></span>
                                <span class="tt-nav-link-text">Tableau de bord</span>
                            </a>
                        </li>

                        <!-- products -->

                        <li class="side-nav-item nav-item ">
                            <a data-bs-toggle="collapse" href="#sidebarProducts"
                                aria-expanded="" aria-controls="sidebarProducts"
                                class="side-nav-link tt-menu-toggle">
                                <span class="tt-nav-link-icon"><i data-feather="shopping-bag"></i></span>
                                <span class="tt-nav-link-text">Produits</span>
                            </a>

                            <div class="collapse " id="sidebarProducts">
                                <ul class="side-nav-second-level">
                                    <li class="">
                                            <a href="{{url('Product/index')}}" class="">Produits</a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('Product/AddProduct')}}" class="">Ajouter Produit</a>
                                    </li>

                                    <li class="">
                                        <a href="{{url('Category/index')}}" class="">Categories</a>
                                </li>
                                </ul>
                            </div>
                        </li>

                        <!-- orders -->
                        <li class="side-nav-item nav-item ">
                            <a href="{{url('Order/index')}}"
                                class="side-nav-link ">
                                <span class="tt-nav-link-icon"><i data-feather="shopping-cart"></i></span>
                                <span class="tt-nav-link-text">
                                    <span>Commandes</span>
                                    <small class="badge bg-danger">Nouveau</small>
                                </span>
                            </a>
                        </li>
                        <!-- Users -->
                        <li class="side-nav-title side-nav-item nav-item mt-3">
                            <span class="tt-nav-title-text">UTILISATEURS</span>
                        </li>

                        <!-- customers -->
                        <li class="side-nav-item nav-item">
                            <a href="{{url('Customer')}}" class="side-nav-link">
                                <span class="tt-nav-link-icon"> <i data-feather="users"></i></span>
                                <span class="tt-nav-link-text">Clients</span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item nav-item mt-3">
                            <span class="tt-nav-title-text" _msttexthash="179062" _msthash="82">Paramètres</span>
                        </li>

                        <li  @if(Request::is('Setting')) class="side-nav-item nav-item tt-menu-item-active" @else class="side-nav-item nav-item tt-menu-item"  @endif>
                            <a data-bs-toggle="collapse" href="#systemSetting" aria-expanded="true" aria-controls="systemSetting" class="side-nav-link tt-menu-toggle">
                                <span class="tt-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span>
                                <span class="tt-nav-link-text" _msttexthash="416065" _msthash="84">Paramètres système</span>
                            </a>
                            <div class="collapse " id="systemSetting">
                                <ul class="side-nav-second-level">

                                    <li @if(Request::is('Setting')) class="tt-menu-item-active" @else class="tt-menu-item"  @endif >
                                        <a href="{{url('Setting')}}"  _msttexthash="475384" _msthash="85">Paramètres généraux</a>
                                    </li>










                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</aside>
        <!--sidebar section end-->

    <!--main content wrapper start-->
    <main class="tt-main-wrapper bg-secondary-subtle"
         id="content" >
        <!--header section start-->
        <header class="tt-top-fixed bg-light-subtle">
    <div class="container-fluid">
        <nav class="navbar navbar-top navbar-expand" id="navbarDefault">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="tt-mobile-toggle-brand d-lg-none d-md-none">
                    <a class="tt-toggle-sidebar pe-3" href="#offcanvasLeft" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasLeft">
                        <i data-feather="menu"></i>
                    </a>
                    <div class="tt-brand pe-3">
                        <a
                            href="{{url('/')}}">
                            <img src="https://grostore.themetags.com/public/uploads/media/yqqPV512Gk5DMpvCj2UllKrCl52bam3yD6QvfiPP.png" class="tt-brand-favicon"
                                alt="favicon" />
                        </a>
                    </div>
                </div>


                <div class="tt-search-box d-none d-md-block d-lg-block flex-grow-1 me-4">

                        <div class="input-group">
                            <span class="position-absolute top-50 start-0 translate-middle-y ms-2"> <i
                                    data-feather="search"></i></span>
                            <input class="form-control rounded-start w-100 border-0 bg-transparent searchNav" type="text" name="search">
                            <ul class="search-item">

                            </ul>
                        </div>

                </div>
                <ul class="navbar-nav flex-row align-items-center tt-top-navbar">





                    <li class="nav-item dropdown">

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link tt-theme-toggle">
                                <div class="tt-theme-light"><i data-feather="moon" class="fs-xm"></i></div>
                                <div class="tt-theme-dark"><i data-feather="sun" class="fs-xm"></i></div>
                            </a>
                        </li>

                    <li>
                        <a class="nav-link position-relative tt-notification" href="#" role="button" id="notificationDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                            <i data-feather="bell"></i>
                            <span class="tt-notification-dot bg-danger rounded-circle"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end py-0 shadow-sm border-0" aria-labelledby="notificationDropdown">
                            <div class="card position-relative border-0">
                                <div class="card-body p-0">
                                <div class="scrollbar-overlay">

                                    @foreach (auth()->user()->unreadNotifications as $notification)
                                        <div class="p-3 position-relative border-bottom" style="background-color: #daeff7;">
                                            <a href="#" class="d-flex align-items-center">
                                                <h4 class="fs-md mb-0 ">
                                                    <i data-feather="mail" width="18" class="me-1 text-success"></i>{{$notification->data['data']}}
                                                </h4>
                                            </a>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    </li>

                    <li class="nav-item dropdown tt-user-dropdown">
                        <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="true">
                            <div class="avatar avatar-sm status-online">
                                <img class="rounded-circle" src="https://grostore.themetags.com/public/uploads/media/dtkoInw3SD3IF3Q2I1jFtEDiE96mDD46RHB9RdxN.jpg"
                                    alt="avatar">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0 shadow-sm border-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="card position-relative border-0">
                                <div class="card-body py-2">
                                    <ul class="tt-user-nav list-unstyled d-flex flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link px-0" href="{{url('/')}}">
                                                <i class="fa-solid fa-door-open"></i>
                                                Accueil
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-0"
                                                href="{{url("Account")}}">
                                                <i data-feather="user" class="me-1 fs-sm"></i>
                                               Mon Compte
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-0" href="{{url('Setting')}}">
                                                <i data-feather="settings" class="me-1 fs-sm"></i>
                                                Paramètre
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-0" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                            <i class="me-1 fs-sm" data-feather="log-out"></i>
                                                {{ __('Se déconnecter') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--mobile offcanvas menu start-->
<div class="offcanvas offcanvas-start tt-aside-navbar" id="offcanvasLeft" tabindex="-1">
    <div class="offcanvas-header border-bottom">
        <div class="tt-brand">
            <a href="index.html" class="tt-brand-link">
                <img src="{{asset('storage/images/logo.png')}}" class="tt-brand-favicon ms-1"
                    alt="favicon" />
                {{-- <img src="{{asset('storage/images/logo.png')}}" class="tt-brand-logo ms-2"
                    alt="logo" /> --}}
            </a>
        </div>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-2 pb-9" data-simplebar>
        <div class="tt-sidebar-nav">
            <nav class="navbar navbar-vertical">
                <div class="w-100">
                    <ul class="tt-side-nav searchMenu">

    <!-- dashboard -->
    <li class="side-nav-item nav-item tt-menu-item-active">
        <a href="{{ url('Dashboard') }}" class="side-nav-link active">
            <span class="tt-nav-link-icon"><i data-feather="pie-chart"></i></span>
            <span class="tt-nav-link-text">Tableau de bord</span>
        </a>
    </li>

    <!-- products -->

            <li class="side-nav-item nav-item ">
            <a data-bs-toggle="collapse" href="#sidebarProducts"
                aria-expanded="" aria-controls="sidebarProducts"
                class="side-nav-link tt-menu-toggle">
                <span class="tt-nav-link-icon"><i data-feather="shopping-bag"></i></span>
                <span class="tt-nav-link-text">Produits</span>
            </a>

            <div class="collapse " id="sidebarProducts">
                <ul class="side-nav-second-level">

                    <li class="">
                        <a href="{{url('Product/index')}}"
                            class="">All Products</a>
                    </li>
                    <li class="">
                        <a href="{{url('Product/AddProduct')}}" class="">Ajouter Produit</a>
                    </li>

                    <li class="">
                        <a href="{{url('Category/index')}}" class="">Categories</a>
                    </li>
                </ul>
            </div>
        </li>



    <!-- orders -->
            <li
            class="side-nav-item nav-item ">
            <a href="{{url('Order/index')}}"
                class="side-nav-link ">
                <span class="tt-nav-link-icon"><i data-feather="shopping-cart"></i></span>
                <span class="tt-nav-link-text">
                    <span>Commandes</span>


                                            <small class="badge bg-danger">Nouveau</small>
                                    </span>
            </a>
        </li>












    <!-- Users -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">UTILISATEURS</span>
    </li>

    <!-- customers -->
    <li class="side-nav-item nav-item">
            <a href="{{url('Customer')}}" class="side-nav-link">
                <span class="tt-nav-link-icon"> <i data-feather="users"></i></span>
                <span class="tt-nav-link-text">Clients</span>
            </a>
    </li>



























    <!-- Settings -->
    <li class="side-nav-title side-nav-item nav-item mt-3">
        <span class="tt-nav-title-text">Paramètres</span>
    </li>





    <!-- system settings -->

            <li class="side-nav-item nav-item ">
                <a data-bs-toggle="collapse" href="#systemSetting"
                    aria-expanded="" aria-controls="systemSetting"
                    class="side-nav-link tt-menu-toggle">
                    <span class="tt-nav-link-icon"><i data-feather="settings"></i></span>
                    <span class="tt-nav-link-text">Paramètres système</span>
                </a>
                <div class="collapse " id="systemSetting">
                    <ul class="side-nav-second-level">
                        <li class="">
                            <a href="{{url('Setting')}}" class="">Paramètres généraux</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

        <script src="https://grostore.themetags.com/public/backend/assets/js/vendors/jquery-3.6.4.min.js?v=v4.4.0"></script>
        @yield('content')
        <div class="offcanvas offcanvas-bottom" id="offcanvasBottom" tabindex="-1">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">Media Files</h5>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body bg-secondary-subtle" data-simplebar>

        <!-- content -->
        <div class="card-body">
    <div class="row mb-4">

        <div class="col-12 col-lg-6">
            <h5>Recently uploaded files</h5>
            <div class="row g-2 recent-uploads  tt-media-wrap">

            </div>
        </div>


        <div class="col-12 col-lg-6 order-first order-md-last mb-2 mb-md-0 ps-md-3">
                                                <h5>Add files here</h5>
                    <div class="uppy-drag-drop-area">

                        <div class="uppy-Dashboard-inner" aria-modal="false" role="false" style="width: 100%; height: auto;">
                            <div class="uppy-Dashboard-innerWrap">
                                <div class="uppy-Dashboard-dropFilesHereHint">Drop your files here</div>
                                <div class="uppy-Dashboard-AddFiles">
                                    <input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" type="file" name="files[]" multiple="" accept=".png,.svg,.gif,.jpg,.jpeg,.webp">
                                    <input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" webkitdirectory="" type="file" name="files[]" multiple="" accept=".png,.svg,.gif,.jpg,.jpeg,.webp"><div class="uppy-Dashboard-AddFiles-title">Drop files here or <button type="button" class="uppy-u-reset uppy-c-btn uppy-Dashboard-browse" data-uppy-super-focusable="true">browse files</button></div><div class="uppy-Dashboard-AddFiles-list" role="tablist"><div class="uppy-DashboardTab" role="presentation" data-uppy-acquirer-id="MyDevice"><button type="button" class="uppy-u-reset uppy-c-btn uppy-DashboardTab-btn" role="tab" tabindex="0" data-uppy-super-focusable="true"><svg aria-hidden="true" focusable="false" width="32" height="32" viewBox="0 0 32 32"><g fill="none" fillRule="evenodd"><rect class="uppy-ProviderIconBg" width="32" height="32" rx="16" fill="#2275D7"></rect><path d="M21.973 21.152H9.863l-1.108-5.087h14.464l-1.246 5.087zM9.935 11.37h3.958l.886 1.444a.673.673 0 0 0 .585.316h6.506v1.37H9.935v-3.13zm14.898 3.44a.793.793 0 0 0-.616-.31h-.978v-2.126c0-.379-.275-.613-.653-.613H15.75l-.886-1.445a.673.673 0 0 0-.585-.316H9.232c-.378 0-.667.209-.667.587V14.5h-.782a.793.793 0 0 0-.61.303.795.795 0 0 0-.155.663l1.45 6.633c.078.36.396.618.764.618h13.354c.36 0 .674-.246.76-.595l1.631-6.636a.795.795 0 0 0-.144-.675z" fill="#FFF"></path></g></svg><div class="uppy-DashboardTab-name">My Device</div></button></div></div><div class="uppy-Dashboard-AddFiles-info"></div></div><div class="uppy-Dashboard-progressindicators"><div class="uppy-StatusBar is-waiting" aria-hidden="true"><div class="uppy-StatusBar-progress" role="progressbar" aria-label="0%" aria-valuetext="0%" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div><div class="uppy-StatusBar-actions"></div></div><div class="uppy uppy-Informer"><span></span></div></div></div></div>
                    </div>

        </div>
    </div>

    <div class="card bg-secondary-subtle">
        <div class="card-header border-bottom-0">


            <form action="" id="media-search-from">
                <div class="row justify-content-between align-items-center g-3">

                    <div class="col-auto flex-grow-1">
                        <h5 class="mb-0">Previously uploaded files</h5>
                    </div>
                    <div class="col-auto">

                        <div class="tt-search-box">
                            <div class="input-group">
                                <span class="position-absolute top-50 start-0 translate-middle-y ms-2"> <i
                                        data-feather="search"></i></span>
                                <input class="form-control rounded-start w-100" type="text" id="search"
                                    name="media-search" placeholder="Search by name">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-secondary">
                            <i data-feather="search" width="18"></i>
                            Search
                        </button>
                    </div>
                </div>
            </form>

        </div>


        <div class="card-body row g-2 previous-uploads tt-media-wrap">

        </div>
    </div>

    <div class="mt-3 load-more-media d-none">
        <button class="btn btn-primary" onclick="getNextMediaFiles()">
            <span> <i data-feather="refresh-cw" class="me-2" width="18"></i>Load More</span>
        </button>
    </div>

</div>
        <!-- content -->

        <div class="d-grid g-3 tt-media-select">
            <button class="btn btn-primary" onclick="showSelectedFilePreview()"
                data-bs-dismiss="offcanvas">Select</button>
        </div>

    </div>
</div>

    </main>
    <!--main content wrapper end-->

    <!-- delete modal -->
    <div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <div class="display-4 text-danger"> <i data-feather="x-octagon"></i></div>
                <h6 class="my-0">Are you sure to delete this?</h6>
                <p>All data related to this may get deleted.</p>
                <div class="justify-content-center pb-3">
                    <a href="" id="delete-link" class="btn btn-danger mt-2">Proceed</a>
                    <button type="button" class="btn btn-secondary mt-2"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div>

    <!-- delete all modal -->
    <div id="all-delete-modal" class="modal fade">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <div class="display-4 text-danger"> <i data-feather="x-octagon"></i></div>
                <h6 class="my-0">Are you sure to delete all data?</h6>
                <p>All data related to this may get deleted.</p>
                <div class="justify-content-center pb-3">
                    <a href="" id="all-delete-link" class="btn btn-danger mt-2">Proceed</a>
                    <button type="button" class="btn btn-secondary mt-2"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>

        </div>
    </div>
</div>

    <!--build:js-->
    <!-- bundle -->

<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/bootstrap.bundle.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/swiper-bundle.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/toastr.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/simplebar.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/footable.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/select2.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/feather.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/summernote-lite.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/flatpickr.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/apexcharts.min.js?v=v4.4.0"></script>
<script src="https://grostore.themetags.com/public/backend/assets/js/vendors/apex-scripts.js?v=v4.4.0"></script>



<script type="text/javascript" src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script src="https://grostore.themetags.com/public/backend/assets/js/app.js?v=v4.4.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<!-- media-manager scripts -->









</body>

</html>
