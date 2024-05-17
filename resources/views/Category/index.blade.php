@extends('Admin.Dashboard')
@section('content')
<script src="{{asset('Js/Category.js')}}"></script>
<!-- Start Content-->
<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0">Categories</h2>
                        </div>
                        <div class="tt-action">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModelAddCategory">
                                <i data-feather="plus"></i> Ajouter Categorie
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card mb-4" id="section-1">


                    <table class="table tt-footable border-top " data-use-parent-width="true" id="tableCategory" >
                        <thead>
                            <tr>
                                <th class="text-center">S/L</th>
                                <th>Nom Categorie</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Modal -->
<div class="modal fade" id="ModelAddCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AJOUTER CATEGORIE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label for="">Nom Categorie</label>
                        <input type="text" class="form-control" placeholder="nom categorie" id="nameCategory">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" id="SaveCategory">Sauvegarder</button>
            </div>
        </div>
    </div>
  </div>


  <!-- Modal Edit-->
<div class="modal fade" id="ModelEditCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MODIFICATION CATEGORIE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label for="">Nom Categorie</label>
                        <input type="text" class="form-control" placeholder="nom categorie" id="nameCategoryEdit">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" id="SaveCategoryEdit">Sauvegarder</button>
            </div>
        </div>
    </div>
  </div>

  <script>
        var Store = "{{ url('Store') }}";
        var Update = "{{ route('Update.Category') }}";
        var Delete = "{{ route('Delete.Category') }}";
        var FetchCategory = "{{url('FetchCategory')}}";
  </script>
@endsection
