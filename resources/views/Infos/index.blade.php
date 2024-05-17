@extends('Admin.Dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('Css/AddProduct.css')}}">
<script src="{{asset('Js/AddProduct.js')}}"></script>
<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0" _msttexthash="475384" _msthash="251">Paramètres généraux</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif

        <div class="row g-4">
            <!--left sidebar-->
            <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                <form action="{{url('UpdateSetting')}}" method="POST" enctype="multipart/form-data" class="pb-650">
                    @csrf

                    <!--general settings-->
                    <div class="card mb-4" id="section-1">
                        <div class="card-body">
                            <h5 class="mb-4" _msttexthash="566683" _msthash="252">Informations générales</h5>

                            <div class="mb-3">
                                <label for="system_title" class="form-label" _msttexthash="298324" _msthash="253">Adresse</label>

                                <input type="text" id="system_title" name="Adresse" class="form-control" value="" placeholder="Cecilia Chapman, 711-2880 Nulla St, Mankato Mississippi 96522" required>
                            </div>

                            <div class="mb-3">
                                <label for="title_separator" class="form-label" _msttexthash="3943901" _msthash="254">Téléphone</label>

                                <input type="text" id="title_separator" name="phone" class="form-control" value="" placeholder="+2126 00-00-00-00" required>
                            </div>

                            <div class="mb-3">
                                <label for="site_address" class="form-label" _msttexthash="94237" _msthash="255">E-mail</label>

                                <input type="email" id="site_address" name="email" class="form-control" value="" placeholder="example@gmail.com" required>
                            </div>
                        </div>
                    </div>
                    <!--general settings-->



                    <!--logo settings-->
                    <div class="card mb-4" id="section-3">
                        <div class="card-body">
                            <h5 class="mb-4" _msttexthash="787410" _msthash="256">Logo du tableau de bord et favicon</h5>
                            <div class="mb-3">
                                <label for="admin_panel_logo" class="form-label" _msttexthash="413101" _msthash="257">Logo du tableau de bord</label>

                                <div class="tt-image-drop rounded">
                                    <span class="fw-semibold" _msttexthash="938574" _msthash="258">Choisissez le logo du tableau de bord</span>
                                    <!-- choose media -->
                                    <div class="tt-product-thumb show-selected-files mt-3">


                                        <div class="avatar avatar-xl cursor-pointer choose-media" >
                                            <label for="fileInput" class="input-div">
                                                <input id="fileInput" class="input" name="file" type="file" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon">
                                                    <polyline points="16 16 12 12 8 16"></polyline>
                                                    <line y2="21" x2="12" y1="12" x1="12"></line>
                                                    <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                                    <polyline points="16 16 12 12 8 16"></polyline>
                                                </svg>
                                            </label>

                                        </div>
                                    </div>
                                    <!-- choose media -->
                                </div>
                                <div style="display: flex">
                                    <div class="row">
                                        <div class="col-12" id="previewContainer" class="preview-container mt-3">
                                            <!-- Preview images will be displayed here -->
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('fileInput').addEventListener('change', function() {
                                        var previewContainer = document.getElementById('previewContainer');
                                        previewContainer.innerHTML = ''; // Clear previous previews

                                        var files = this.files;
                                        for (var i = 0; i < files.length; i++) {
                                            var file = files[i];
                                            if (file.type.startsWith('image/')) {
                                                var reader = new FileReader();
                                                reader.onload = function(e) {
                                                    var img = document.createElement('img');
                                                    img.src = e.target.result;
                                                    img.style.maxWidth = '25%'; // Adjust image styling
                                                    previewContainer.appendChild(img);
                                                }
                                                reader.readAsDataURL(file);
                                            }
                                        }
                                    });
                                </script>
                            </div>


                        </div>
                    </div>
                    <!--logo settings-->













                    <!--general settings-->
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save me-1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg><font _mstmutation="1" _msttexthash="707785" _msthash="302"> Enregistrer la configuration </font></button>
                    </div>
                </form>
            </div>

            <!--right sidebar-->
            <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                <div class="card tt-sticky-sidebar">
                    <div class="card-body">
                        <h5 class="mb-4" _msttexthash="1107431" _msthash="303">Configurer les paramètres généraux</h5>
                        <div class="tt-vertical-step">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#section-1" class="active" _msttexthash="566683" _msthash="304">Informations générales</a>
                                </li>
                                <li>
                                    <a href="#section-3" _msttexthash="522457" _msthash="305" class="">Logo Dashborad et favicon</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
