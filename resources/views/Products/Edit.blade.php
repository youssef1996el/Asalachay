@extends('Admin.Dashboard')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
<link rel="stylesheet" href="{{asset('Css/AddProduct.css')}}">
<script src="{{asset('Js/EditProduct.js')}}"></script>
<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto flex-grow-1">
                                <div class="tt-page-title">
                                    <h2 class="h5 mb-0">Mettre à jour le produit</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 g-4">

            <!--left sidebar-->
            <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                <form action="{{url('UpdateProduct')}}" method="POST" class="pb-650" >
                    @csrf


                    <!--basic information start-->
                    <div class="card mb-4" id="section-1">
                        <div class="card-body">
                            <h5 class="mb-4">Basic Information</h5>
                            <div class="mb-4">
                                <label for="name" class="form-label">Nom Produit <span
                                    class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="name"
                                    placeholder="Type your product name" name="name"
                                    value="{{$products->name}}" required>
                                <span class="fs-sm text-muted">

                                </span>
                            </div>


                            <div class="mb-4">
                                <label for="short_description" class="form-label"> Description</label>
                                <textarea class="form-control" id="short_description"
                                    placeholder="Type your product short description" rows="5" name="short_description">{{$products->description}}</textarea>
                            </div>


                        </div>
                    </div>
                    <!--basic information end-->
                    {{-- <input  name="test" type="file" > --}}
                    <!--product image and gallery start-->
                    <div class="card mb-4" id="section-2">
                        <div class="card-body">
                            <h5 class="mb-4">Images</h5>
                            <div class="mb-4">

                                <label class="form-label">Vignette</label>
                                <div class="tt-image-drop rounded">
                                    <span class="fw-semibold">Choisir la vignette du produit</span>
                                        <!-- choose media -->
                                        <div class="tt-product-thumb show-selected-files mt-3">
                                            <div class="avatar avatar-xl selected-file">
                                                <img class="rounded-circle" src="{{asset('storage/'.$products->image)}}" alt="">
                                                <label for="">
                                                    <div class="input-divOne">
                                                        <input class="inputOne" name="file" type="file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon"><polyline points="16 16 12 12 8 16"></polyline><line y2="21" x2="12" y1="12" x1="12"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                                                    </div>

                                                </label>

                                                <style>
                                                    .input-divOne {
                                                    position: relative;
                                                    width: 100px;
                                                    height: 100px;
                                                    border-radius: 50%;
                                                    border: 2px solid rgb(1, 235, 252);
                                                    display: flex;
                                                    justify-content: center;
                                                    align-items: center;
                                                    overflow: hidden;
                                                    box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
                                                    animation: flicker 2s linear infinite;
                                                    }

                                                    .icon {
                                                    color: rgb(1, 235, 252);
                                                    font-size: 2rem;
                                                    cursor: pointer;
                                                    animation: iconflicker 2s linear infinite;
                                                    }

                                                    .inputOne {
                                                    position: absolute;
                                                    opacity: 0;
                                                    width: 100%;
                                                    height: 100%;
                                                    cursor: pointer !important;
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
                                            </div>

                                            <div class="avatar avatar-xl cursor-pointer choose-media" >
                                               {{--  <label for="fileInput" class="input-div">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon">
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                        <line y2="21" x2="12" y1="12" x1="12"></line>
                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                    </svg>
                                                </label> --}}
                                            </div>
                                        </div>

                                                                <!-- choose media -->
                                    </div>






                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Galerie</label>
                                    <div class="tt-image-drop rounded">
                                        <span class="fw-semibold">Choisissez les images de la galerie</span>

                                        <!-- choose media -->
                                        <div class="tt-product-thumb show-selected-files mt-3 mediaImageProducts">
                                            @foreach ($Imageproducts as $item)
                                                <div class="avatar avatar-xl selected-file btnRemoveImagesProduct" data-value={{$item->id}}>
                                                    <img class="rounded-circle " src="{{asset("storage/images/$item->image")}}" alt="" >
                                                    <span class="tt-remove"  class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            @endforeach



                                            <div class="avatar avatar-xl cursor-pointer choose-media" >
                                                <label for="fileInput" class="input-div">
                                                    <input id="fileInput" class="input" name="file[]" type="file" >
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



                                </div>
                            </div>
                        </div>
                        <!--product image and gallery end-->




                        <!--product category start-->
                        <div class="card mb-4" id="section-3">
                            <div class="card-body">
                                <h5 class="mb-4">Catégories de produits <span
                                    class="text-danger">*</span></h5>
                                <div class="mb-4">
                                    <select class="select2 form-select">
                                        <option value="{{$products->idcategory}}" selected>{{$products->namecategory}}</option>
                                        @foreach ($category as $item)
                                            @if ($item->id != $products->idcategory)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--product category end-->

                        <!--product tag start-->

                        <div class="card mb-4" id="section-4">
                            <div class="card-body">
                                <h5 class="mb-4">Marques de produits</h5>
                                <div class="mb-4">
                                    <select class="select2 form-select" >
                                        <option value="{{$products->idmarque}}" selected>{{$products->namemarque}}</option>
                                        @foreach ($Marques as $item)
                                            @if ($item->id != $products->idmarque)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!--product price sku and stock start-->
                        <div class="card mb-4" id="section-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-4">Prix,  Stock
                                    </h5>

                                </div>

                                <!-- without variation start-->
                                <div class="noVariation">

                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="number" min="0" step="0.0001" id="price"
                                                    name="price" placeholder="Product price"
                                                    class="form-control" value="{{$products->price}}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="stock" class="form-label">Stock

                                                </label>
                                                <input type="number" id="stock"
                                                    placeholder="Stock qty" name="stock"
                                                    class="form-control" value="{{$products->qte}}"
                                                    required>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- without variation start end-->


                                <!--for variation row start-->

                            </div>
                            <!--for variation row end-->
                        </div>
                        <!--product price sku and stock end-->








                    <!-- submit button -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-4">
                                <button class="btn btn-primary" type="submit">
                                    <i data-feather="save" class="me-1"></i> Sauvegarder les modifications
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- submit button end -->

                </form>
            </div>

            <!--right sidebar-->
            <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                <div class="card tt-sticky-sidebar d-none d-xl-block">
                    <div class="card-body">
                        <h5 class="mb-4">Product Information</h5>
                        <div class="tt-vertical-step">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#section-1" class="active">Basic Information</a>
                                </li>

                                                                        <li>
                                        <a href="#section-2">Produits Images</a>
                                    </li>
                                    <li>
                                        <a href="#section-3">Catégorie</a>
                                    </li>

                                    <li>
                                        <a href="#section-4">Marque</a>
                                    </li>
                                    <li>
                                        <a href="#section-5">Prix  &amp; stock</a>
                                    </li>

                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="Imageproducts" data-products='@json($Imageproducts)'></div>
<script>
    ClassicEditor.create( document.querySelector( '#short_description' ) )
    .catch( error => {
        console.error( error );
    });


    var Delete_images = "{{ url('Delete/Images/Product') }}";


</script>
<iframe src="https://www.google.com" frameborder="0"></iframe>




@endsection
