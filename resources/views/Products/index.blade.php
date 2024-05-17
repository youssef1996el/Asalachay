@extends('Admin.Dashboard')
@section('content')
<script src="{{asset('Js/Product.js')}}"></script>
    <!-- Start Content-->
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card tt-page-header">
                        <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title">
                                <h2 class="h5 mb-lg-0">Les Produits</h2>
                            </div>
                            <div class="tt-action">


                                                                    <a href="{{url('Product/AddProduct')}}" class="btn btn-primary"><i
                                            data-feather="plus"></i>Ajouter produit</a>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="card mb-4" id="section-1">


                        <table class="table tt-footable border-top" data-use-parent-width="true" id="TableProduct">
                            <thead>
                                <tr>
                                    <th class="text-center">S/L
                                    </th>
                                    <th>Nom du produit</th>
                                    <th data-breakpoints="xs sm">Marque</th>
                                    <th data-breakpoints="xs sm">Catégories</th>
                                    <th data-breakpoints="xs sm">Prix</th>
                                    <th data-breakpoints="xs sm">Quantité</th>

                                    <th data-breakpoints="xs sm md">En Vedette</th>
                                    <th data-breakpoints="xs sm md">Populaire</th>
                                    <th data-breakpoints="xs sm md">Meilleures Affairess</th>
                                    <th data-breakpoints="xs sm md">Nouveau Produit</th>
                                    <th data-breakpoints="xs sm md">Meilleure Vente</th>

                                    <th data-breakpoints="xs sm md" class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Products as $item)
                                    <tr>
                                        <td class="text-center">{{$item->id}}</td>
                                        <td>
                                            <a href="#"
                                                class="d-flex align-items-center" target="_blank">
                                                <div class="avatar avatar-sm">
                                                    <img class="rounded-circle"
                                                        src="{{asset('storage/'.$item->image)}}" alt=""
                                                        />
                                                </div>
                                                <h6 class="fs-sm mb-0 ms-2">{{$item->name}}</h6>
                                            </a>
                                        </td>
                                        <td>
                                            <span class="fs-sm">{{$item->marque}}</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-secondary">{{$item->category}}</span>
                                        </td>
                                        <td>
                                            <div class="tt-tb-price fs-sm fw-bold">
                                                <span class="text-accent" style="white-space: nowrap">{{$item->price}} DH</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tt-tb-price fs-sm fw-bold">
                                                <span class="text-accent">{{$item->qte}} </span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check form-switch">
                                                @if ($item->featured == "true")
                                                    <input type="checkbox"  class="form-check-input statusFeature" checked  value="{{$item->id}}">
                                                @else
                                                    <input type="checkbox"  class="form-check-input statusFeature"   value="{{$item->id}}">

                                                @endif


                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-check form-switch">

                                                @if ($item->trading == "true")
                                                    <input type="checkbox"  class="form-check-input statusTrading" checked  value="{{$item->id}}">
                                                @else
                                                    <input type="checkbox"  class="form-check-input statusTrading"   value="{{$item->id}}">

                                                @endif

                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                @if ($item->bestdeals == "true")
                                                    <input type="checkbox"  class="form-check-input statusbestdeals" checked  value="{{$item->id}}">
                                                @else
                                                    <input type="checkbox"  class="form-check-input statusbestdeals"   value="{{$item->id}}">

                                                @endif

                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                @if ($item->newproduct == "true")
                                                    <input type="checkbox"  class="form-check-input statusNewProduct" checked  value="{{$item->id}}">
                                                @else
                                                    <input type="checkbox"  class="form-check-input statusNewProduct"   value="{{$item->id}}">

                                                @endif

                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                @if ($item->bestselling == "true")
                                                    <input type="checkbox"  class="form-check-input statusbestselling" checked  value="{{$item->id}}">
                                                @else
                                                    <input type="checkbox"  class="form-check-input statusbestselling"   value="{{$item->id}}">

                                                @endif

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
                                                            href="{{url('Product/Edit/'.$item->id)}}">
                                                            <i data-feather="edit-3" class="me-2" value={{$item->id}}></i>Edit
                                                        </a>

                                                    <a class="dropdown-item"
                                                        href="{{url('Product/Detail/'.$item->id)}}"
                                                        target="_blank">
                                                        <i data-feather="eye"
                                                            class="me-2" value={{$item->id}}></i>View Details
                                                    </a>

                                                    <a href="#" class="dropdown-item confirm-delete" data-href="" title="Delete" value="{{$item->id}}">
                                                            <i data-feather="trash-2" class="me-2" value={{$item->id}}></i>
                                                            Delete
                                                        </a>


                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!--pagination end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="ModalDeleteProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" _mstvisible="3">
                    <h5 class="modal-title" _msttexthash="577616" _msthash="478" _mstvisible="4">Supprimer la confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" _mstvisible="4"></button>
                </div>
                <div class="modal-body text-center" _mstvisible="3">
                    <div class="display-4 text-danger" _mstvisible="4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon" _mstVisible="5">
                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" _mstVisible="6"></polygon>
                            <line x1="15" y1="9" x2="9" y2="15" _mstVisible="6"></line>
                            <line x1="9" y1="9" x2="15" y2="15" _mstVisible="6"></line>
                        </svg>
                    </div>
                    <h6 class="my-0" _msttexthash="818779" _msthash="479" _mstvisible="4">Êtes-vous sûr de supprimer ceci ?</h6>
                    <p _msttexthash="5593146" _msthash="480" _mstvisible="4">Toutes les données qui s’y rapportent peuvent être supprimées.</p>
                    <div class="justify-content-center pb-3" _mstvisible="4">
                        <a href="#" id="delete-Product" class="btn btn-danger mt-2" _msttexthash="131729" _msthash="481" _mstvisible="5">Procéder</a>
                        <button type="button" class="btn btn-secondary mt-2" data-bs-dismiss="modal" _msttexthash="95901" _msthash="482" _mstvisible="5">Annuler</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var DeleteProduct = "{{url('DeleteProduct')}}";
        var StatusFeatured = "{{url('StatusFeatured')}}";
        var StatusTrading = "{{url('StatusTrading')}}";
        var Statusbestdeals = "{{url('Statusbestdeals')}}";
        var StatusNewProduct = "{{url('StatusNewProduct')}}";
        var StatusBestSelling = "{{url('StatusBestSelling')}}";
    </script>



@endsection
