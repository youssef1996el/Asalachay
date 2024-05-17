@extends('Admin.Dashboard')
@section('content')

<link rel="stylesheet" href="{{asset('Css/AddProduct.css')}}">
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
<script src="{{asset('Js/AddProduct.js')}}"></script>

<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0" _msttexthash="330915" _msthash="250">Ajouter un produit</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mb-4 g-4">

            <!--left sidebar-->
            <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1" data-select2-id="select2-data-41-43r3">
                <form action="{{url('Store/Product')}}" method="POST" class="pb-650" id="product-form" data-select2-id="select2-data-product-form" enctype="multipart/form-data">
                    @csrf
                                           <!--basic information start-->
                    <div class="card mb-4" id="section-1" data-select2-id="select2-data-section-1">
                        <div class="card-body" data-select2-id="select2-data-40-0oyw">
                            <h5 class="mb-4" _msttexthash="381394" _msthash="251">Informations de base</h5>

                          {{--   <div class="mb-4" data-select2-id="select2-data-39-35qu">
                                <label for="category_id" class="form-label"><font _mstmutation="1" _msttexthash="92157" _msthash="252">Thèmes </font><span class="text-danger">*</span> </label>
                                <select class="form-control select2 themeChange select2-hidden-accessible" name="theme_ids[]" data-placeholder="Select themes" data-toggle="select2" multiple="" required="" data-select2-id="select2-data-1-i7m4" tabindex="-1" aria-hidden="true">
                                                                                <option value="1" selected="" data-select2-id="select2-data-3-bz9r" _msttexthash="96850" _msthash="253"> Épicerie</option>
                                                                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="select2-data-2-9emx" style="width: 714.75px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-theme_ids-kc-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Rechercher" aria-describedby="select2-theme_ids-kc-container" placeholder="Sélectionner les thèmes" _mstaria-label="154362" _msthash="257" style="width: 100%;" _mstplaceholder="206206"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div> --}}

                            <div class="mb-4">
                                <label for="name" class="form-label" _msttexthash="212251" _msthash="258">Nom du produit</label>
                                <input class="form-control" type="text" id="name" placeholder="Saisissez le nom de votre produit" name="name" required="" _mstplaceholder="428688" _msthash="259">
                                <span class="fs-sm text-muted" _msttexthash="2749747" _msthash="260"> Le nom du produit est obligatoire et recommandé pour être unique. </span>
                            </div>
                            <div class="mb-4">
                                <label for="short_description" class="form-label" _msttexthash="357682" _msthash="261">Description</label>
                                <textarea class="form-control" id="short_description" placeholder="Saisissez la courte description de votre produit" rows="5" name="description" _mstplaceholder="971672" _msthash="262"></textarea>
                            </div>
                            <div class="mb-4">

                            </div>

                        </div>
                    </div>
                    <!--basic information end-->

                    <!--product image and gallery start-->
                    <div class="card mb-4" id="section-2">
                        <div class="card-body">
                            <h5 class="mb-4" _msttexthash="75101" _msthash="567">Images</h5>
                            <div class="mb-4">
                                <label class="form-label" _msttexthash="244283" _msthash="568">Vignette (592x592)</label>
                                <div class="tt-image-drop rounded">
                                    <span class="fw-semibold">Choisissez la vignette du produit</span>
                                    <div class="tt-product-thumb show-selected-files mt-3">
                                        <div class="avatar avatar-xl cursor-pointer choose-media">
                                            <label for="fileInput" class="input-div">
                                                <input id="fileInput" class="input" name="file[]" type="file" multiple>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon">
                                                    <polyline points="16 16 12 12 8 16"></polyline>
                                                    <line y2="21" x2="12" y1="12" x1="12"></line>
                                                    <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                                    <polyline points="16 16 12 12 8 16"></polyline>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
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

                    <!--product brand and unit start-->
                    <div class="row" id="section-3">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h5 class="mb-4 " _msttexthash="297154" _msthash="584" style="white-space: nowrap">Marque du produit </h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="" style="font-size: 12px;white-space: nowrap;color:#e03a1d" data-bs-toggle="modal" data-bs-target="#ModalAddMarque">Ajouter Marque</a href="#">
                                        </div>
                                    </div>
                                    <div class="tt-select-brand">
                                        <select class=" form-select ListMarque" id="selectBrand" name="idmarque" data-select2-id="select2-data-selectBrand" tabindex="-1" aria-hidden="true">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h5 class="mb-4" _msttexthash="297154" _msthash="584"style="white-space: nowrap">Catégories de produits</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="" style="font-size: 12px;white-space: nowrap;color:#e03a1d" data-bs-toggle="modal" data-bs-target="#ModalAddCategory">Ajouter Catégories</a href="#">
                                        </div>
                                    </div>

                                    <div class="tt-select-brand">
                                        <select class=" form-select  ListCategory" name="idcategory"  data-placeholder="Select categories"  required="" id="ListCategory" >

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--product brand and unit end-->

                    <!--product price sku and stock start-->
                    <div class="card mb-4" id="section-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-4" _msttexthash="257673" _msthash="600">Prix,  &amp; Stock</h5>
                               {{--  <div class="form-check form-switch">
                                    <label class="form-check-label fw-medium text-primary" for="is_variant" _msttexthash="247845" _msthash="601">Has Variations?</label>
                                    <input type="checkbox" class="form-check-input" id="is_variant" onchange="isVariantProduct(this)" name="is_variant">
                                </div> --}}
                            </div>

                            <!-- without variation start-->
                            <div class="noVariation">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label"><font _mstmutation="1" _msttexthash="58734" _msthash="602">Prix </font><span class="text-danger">*</span></label>
                                            <input type="number" min="0" step="0.0001" id="price" name="price" placeholder="prix produit " class="form-control" required="" _mstplaceholder="206869" _msthash="603">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="stock" class="form-label" _msttexthash="513032" _msthash="604">Stock <span class="text-danger">*</span></label>
                                            <input type="number" id="stock" placeholder="Stock qte" name="qty" class="form-control" required="" _mstplaceholder="120029" _msthash="605">
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <!--for variation row end-->
                    </div>
                    <!--product price sku and stock end-->



                    <!-- submit button -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-4">
                                <button class="btn btn-primary" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save me-1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg><font _mstmutation="1" _msttexthash="179803" _msthash="691"> Enregistrer le produit
                                </font></button>
                            </div>
                        </div>
                    </div>
                    <!-- submit button end -->

                </form>
            </div>

            <!--right sidebar-->
            <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                <div class="card tt-sticky-sidebar">
                    <div class="card-body">
                        <h5 class="mb-4" _msttexthash="633100" _msthash="692">Informations sur le produit</h5>
                        <div class="tt-vertical-step">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#section-1" class="active" _msttexthash="381394" _msthash="693">Informations de base</a>
                                </li>
                                <li>
                                    <a href="#section-2" _msttexthash="294645" _msthash="694">Images du produit</a>
                                </li>
                                <li>
                                    <a href="#section-3" _msttexthash="150163" _msthash="695">Marque / Catégorie</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="ModalAddMarque" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AJOUTER MARQUE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nom Marque</label>
                    <input type="text" class="form-control NameMarque" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ferme</button>
                <button type="button" class="btn btn-primary BtnSaveMarque">Sauvegarder</button>
            </div>
        </div>
    </div>
  </div>


  <div class="modal fade" id="ModalAddCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AJOUTER CATEGORIE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nom Categorie</label>
                    <input type="text" class="form-control NameCategory" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ferme</button>
                <button type="button" class="btn btn-primary BtnSaveCategory">Sauvegarder</button>
            </div>
        </div>
    </div>
  </div>
<script>
    ClassicEditor.create( document.querySelector( '#short_description' ) )
    .catch( error => {
        console.error( error );
    });

</script>
<script>
    var FetchCategory   = "{{url('FetchCategory')}}";
    var FetchMarque     = "{{url('FetchMarque')}}";
    var StoreMarque     = "{{route('Store.marque')}}";
    var StoreCategory   = "{{url('Store/Category')}}";
</script>

@endsection
