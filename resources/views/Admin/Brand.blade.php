@extends('Admin.Dashboard')
@section('content')
 <!-- Start Content-->
 <section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0">Brands</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 g-4">
            <!--left sidebar-->
            <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4" id="section-1">
                            <form class="app-search" action="https://grostore.themetags.com/admin/products/brands" method="GET">
                                <div class="card-header border-bottom-0">
                                    <div class="row justify-content-between g-3">
                                        <div class="col-auto flex-grow-1">
                                            <div class="tt-search-box">
                                                <div class="input-group">
                                                    <span
                                                        class="position-absolute top-50 start-0 translate-middle-y ms-2">
                                                        <i data-feather="search"></i></span>
                                                    <input class="form-control rounded-start w-100" type="text"
                                                        id="search" name="search"
                                                        placeholder="Search"
                                                        >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <select class="form-select select2" name="is_published"
                                                    data-minimum-results-for-search="Infinity">
                                                    <option value="">Select Status</option>
                                                    <option value="1"
                                                        >
                                                        Active</option>
                                                    <option value="0"
                                                        >
                                                        Hidden</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">
                                                <i data-feather="search" width="18"></i>
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table class="table tt-footable border-top" data-use-parent-width="true">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="7%">S/L</th>
                                        <th class="all">Name</th>
                                        <th data-breakpoints="xs sm">Active</th>
                                        <th data-breakpoints="xs sm" class="text-end">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                                                                <tr>
                                            <td class="text-center">
                                                1
                                            </td>
                                            <td>
                                                <a class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                            src="https://grostore.themetags.com/public/uploads/media/Msqfr2BOKyJczzH0LRsX5CjZmncpdCBDrIZraJ8G.png"
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                                    </div>
                                                    <h6 class="fs-sm mb-0 ms-2">
                                                        Biofuel</h6>
                                                </a>
                                            </td>
                                            <td>
                                                                                                        <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                            onchange="updateStatus(this)"
                                                             checked                                                                 value="1">
                                                    </div>
                                                                                                </td>
                                            <td class="text-end">
                                                <div class="dropdown tt-tb-dropdown">
                                                    <button type="button" class="btn p-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end shadow">


                                                                                                                        <a class="dropdown-item"
                                                                href="https://grostore.themetags.com/admin/products/brands/edit/1?lang_key=en&localize">
                                                                <i data-feather="edit-3"
                                                                    class="me-2"></i>Edit
                                                            </a>

                                                                                                                        <a href="#" class="dropdown-item confirm-delete"
                                                                data-href="https://grostore.themetags.com/admin/products/brands/delete/1"
                                                                title="Delete">
                                                                <i data-feather="trash-2" class="me-2"></i>
                                                                Delete
                                                            </a>
                                                                                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="text-center">
                                                2
                                            </td>
                                            <td>
                                                <a class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                            src="https://grostore.themetags.com/public/uploads/media/PYwuWwj4EY2Ym5E4O9CVLI4WNs3TIH1nRswIa0Eg.png"
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                                    </div>
                                                    <h6 class="fs-sm mb-0 ms-2">
                                                        Simplegraph</h6>
                                                </a>
                                            </td>
                                            <td>
                                                                                                        <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                            onchange="updateStatus(this)"
                                                             checked                                                                 value="2">
                                                    </div>
                                                                                                </td>
                                            <td class="text-end">
                                                <div class="dropdown tt-tb-dropdown">
                                                    <button type="button" class="btn p-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end shadow">


                                                                                                                        <a class="dropdown-item"
                                                                href="https://grostore.themetags.com/admin/products/brands/edit/2?lang_key=en&localize">
                                                                <i data-feather="edit-3"
                                                                    class="me-2"></i>Edit
                                                            </a>

                                                                                                                        <a href="#" class="dropdown-item confirm-delete"
                                                                data-href="https://grostore.themetags.com/admin/products/brands/delete/2"
                                                                title="Delete">
                                                                <i data-feather="trash-2" class="me-2"></i>
                                                                Delete
                                                            </a>
                                                                                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="text-center">
                                                3
                                            </td>
                                            <td>
                                                <a class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                            src="https://grostore.themetags.com/public/uploads/media/1WGw2sD92Wf1Ex9asi9RELXlYoZMoDi22u1VCcFW.png"
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                                    </div>
                                                    <h6 class="fs-sm mb-0 ms-2">
                                                        Bird Wings</h6>
                                                </a>
                                            </td>
                                            <td>
                                                                                                        <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                            onchange="updateStatus(this)"
                                                             checked                                                                 value="3">
                                                    </div>
                                                                                                </td>
                                            <td class="text-end">
                                                <div class="dropdown tt-tb-dropdown">
                                                    <button type="button" class="btn p-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end shadow">


                                                                                                                        <a class="dropdown-item"
                                                                href="https://grostore.themetags.com/admin/products/brands/edit/3?lang_key=en&localize">
                                                                <i data-feather="edit-3"
                                                                    class="me-2"></i>Edit
                                                            </a>

                                                                                                                        <a href="#" class="dropdown-item confirm-delete"
                                                                data-href="https://grostore.themetags.com/admin/products/brands/delete/3"
                                                                title="Delete">
                                                                <i data-feather="trash-2" class="me-2"></i>
                                                                Delete
                                                            </a>
                                                                                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="text-center">
                                                4
                                            </td>
                                            <td>
                                                <a class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                            src="https://grostore.themetags.com/public/uploads/media/js3K8QAIBU9ecbMv54gIsABamUQtVVLYahwjAkFQ.png"
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                                    </div>
                                                    <h6 class="fs-sm mb-0 ms-2">
                                                        Nexover</h6>
                                                </a>
                                            </td>
                                            <td>
                                                                                                        <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                            onchange="updateStatus(this)"
                                                             checked                                                                 value="4">
                                                    </div>
                                                                                                </td>
                                            <td class="text-end">
                                                <div class="dropdown tt-tb-dropdown">
                                                    <button type="button" class="btn p-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end shadow">


                                                                                                                        <a class="dropdown-item"
                                                                href="https://grostore.themetags.com/admin/products/brands/edit/4?lang_key=en&localize">
                                                                <i data-feather="edit-3"
                                                                    class="me-2"></i>Edit
                                                            </a>

                                                                                                                        <a href="#" class="dropdown-item confirm-delete"
                                                                data-href="https://grostore.themetags.com/admin/products/brands/delete/4"
                                                                title="Delete">
                                                                <i data-feather="trash-2" class="me-2"></i>
                                                                Delete
                                                            </a>
                                                                                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="text-center">
                                                5
                                            </td>
                                            <td>
                                                <a class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                            src="https://grostore.themetags.com/public/uploads/media/d1TMFEm3rpUcqVPep1Q1hdv3yjxeTnMoCERiB0My.png"
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                                    </div>
                                                    <h6 class="fs-sm mb-0 ms-2">
                                                        Color Love</h6>
                                                </a>
                                            </td>
                                            <td>
                                                                                                        <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                            onchange="updateStatus(this)"
                                                             checked                                                                 value="5">
                                                    </div>
                                                                                                </td>
                                            <td class="text-end">
                                                <div class="dropdown tt-tb-dropdown">
                                                    <button type="button" class="btn p-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end shadow">


                                                                                                                        <a class="dropdown-item"
                                                                href="https://grostore.themetags.com/admin/products/brands/edit/5?lang_key=en&localize">
                                                                <i data-feather="edit-3"
                                                                    class="me-2"></i>Edit
                                                            </a>

                                                                                                                        <a href="#" class="dropdown-item confirm-delete"
                                                                data-href="https://grostore.themetags.com/admin/products/brands/delete/5"
                                                                title="Delete">
                                                                <i data-feather="trash-2" class="me-2"></i>
                                                                Delete
                                                            </a>
                                                                                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                                                                <tr>
                                            <td class="text-center">
                                                6
                                            </td>
                                            <td>
                                                <a class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm">
                                                        <img class="rounded-circle"
                                                            src="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png"
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                                    </div>
                                                    <h6 class="fs-sm mb-0 ms-2">
                                                        ha</h6>
                                                </a>
                                            </td>
                                            <td>
                                                                                                        <div class="form-check form-switch">
                                                        <input type="checkbox" class="form-check-input"
                                                            onchange="updateStatus(this)"
                                                                                                                            value="6">
                                                    </div>
                                                                                                </td>
                                            <td class="text-end">
                                                <div class="dropdown tt-tb-dropdown">
                                                    <button type="button" class="btn p-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end shadow">


                                                                                                                        <a class="dropdown-item"
                                                                href="https://grostore.themetags.com/admin/products/brands/edit/6?lang_key=en&localize">
                                                                <i data-feather="edit-3"
                                                                    class="me-2"></i>Edit
                                                            </a>

                                                                                                                        <a href="#" class="dropdown-item confirm-delete"
                                                                data-href="https://grostore.themetags.com/admin/products/brands/delete/6"
                                                                title="Delete">
                                                                <i data-feather="trash-2" class="me-2"></i>
                                                                Delete
                                                            </a>
                                                                                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                                                        </tbody>
                            </table>
                            <!--pagination start-->
                            <div class="d-flex align-items-center justify-content-between px-4 pb-4">
                                <span>Showing
                                    1-6 of
                                    6 results</span>
                                <nav>

                                </nav>
                            </div>
                            <!--pagination end-->

                        </div>
                    </div>
                </div>

                    <form action="https://grostore.themetags.com/admin/products/brand" method="POST" enctype="multipart/form-data"
                        class="pb-650">
                        <input type="hidden" name="_token" value="iQyrvGkU126pcDd5TIPCvejvy5zN92RJDiXDxjl7" autocomplete="off">                            <!--brand info start-->
                        <div class="card mb-4" id="section-2">
                            <div class="card-body">
                                <h5 class="mb-4">Add New Brand</h5>

                                <div class="mb-4">
                                    <label for="name" class="form-label">Brand Name</label>
                                    <input type="text" name="name" id="nameBrand"
                                        placeholder="Type brand name" class="form-control" required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Brand Image</label>
                                    <div class="tt-image-drop rounded">
                                        <span class="fw-semibold">Choose Brand Thumbnail</span>

                                        <!-- choose media -->
                                        <div class="tt-product-thumb show-selected-files mt-3">
                                            <div class="avatar avatar-xl cursor-pointer choose-media">
                                                <label for="fileInput" class="input-div">

                                                    <input id="fileInput" class="input" name="file" type="file" onchange="displayImage(event)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line y2="21" x2="12" y1="12" x1="12"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>

                                                </label>
                                                <img id="preview" src="#" alt="Preview" style="display: none;">

                                            </div>
                                        </div>

                                        <!-- choose media -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--brand info end-->
                        <script>
                            // Function to display uploaded image
                            function displayImage(event) {
                                var image = document.getElementById('preview');
                                image.style.display = 'block';
                                image.src = URL.createObjectURL(event.target.files[0]);

                                // Show the remove button
                                var removeBtn = document.getElementById('removeBtn');
                                if (removeBtn) {
                                    removeBtn.style.display = 'block';
                                } else {
                                    // Create remove button if not exists
                                    removeBtn = document.createElement('button');
                                    removeBtn.setAttribute('id', 'removeBtn');
                                    removeBtn.setAttribute('class', 'remove-btn');
                                    removeBtn.innerHTML = 'X';
                                    removeBtn.addEventListener('click', removeImage);
                                    document.querySelector('.avatar').appendChild(removeBtn);
                                }
                            }

                            // Function to remove uploaded image
                            function removeImage() {
                                var image = document.getElementById('preview');
                                if (image) {
                                    image.style.display = 'none';
                                    image.src = '#'; // Clear the image source
                                }
                                var removeBtn = document.getElementById('removeBtn');
                                if (removeBtn) {
                                    removeBtn.parentNode.removeChild(removeBtn);
                                }
                                // Clear input file value
                                document.getElementById('fileInput').value = '';
                            }
                        </script>
<style>
    /* Your CSS */
    .input-div {
        position: relative;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 2px solid #dcf0d4;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        box-shadow: 0px 0px 100px #dcf0d4 , inset 0px 0px 10px #dcf0d4,0px 0px 5px #dcf0d4;
        animation: flicker 2s linear infinite;
    }

    .icon {
        color: rgb(1, 235, 252);
        font-size: 2rem;
        cursor: pointer;
        animation: iconflicker 2s linear infinite;

        position: relative; /* Added */
        z-index: 1; /* Added */
        opacity: 1; /* Changed from 1 to maintain visibility */
    }

    .input {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer !important;
    }

    .remove-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 50%;
        padding: 5px;
        cursor: pointer;
        display: none; /* Hide the remove button initially */
    }

    #preview {
        max-width: 100%;
        max-height: 100%;
    }

    @keyframes flicker {
        0% {
            border: 2px solid rgb(1, 235, 252);
            box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
        }

        5% {
            border: none;
            box-shadow: none;
        }

        10% {
            border: 2px solid rgb(1, 235, 252);
            box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
        }

        25% {
            border: none;
            box-shadow: none;
        }

        30% {
            border: 2px solid rgb(1, 235, 252);
            box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
        }

        100% {
            border: 2px solid rgb(1, 235, 252);
            box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
        }
    }

    @keyframes iconflicker {
        0% {
            opacity: 1;
        }

        5% {
            opacity: 0.2;
        }

        10% {
            opacity: 1;
        }

        25% {
            opacity: 0.2;
        }

        30% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }
</style>

                        <!--seo meta description end-->

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <button class="btn btn-primary" type="submit">
                                        <i data-feather="save" class="me-1"></i> Save Brand
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                                </div>

            <!--right sidebar-->
            <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                <div class="card tt-sticky-sidebar">
                    <div class="card-body">
                        <h5 class="mb-4">Brand Information</h5>
                        <div class="tt-vertical-step">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#section-1" class="active">All Brands</a>
                                </li>
                                <li>
                                    <a href="#section-2">Add New Brand</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
    <!-- container -->
@endsection
