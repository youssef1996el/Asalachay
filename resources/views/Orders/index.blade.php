@extends('Admin.Dashboard')
@section('content')
<script src="{{asset('Js/Order.js')}}"></script>
<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0">Commandes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card mb-4" id="section-1">
                    <form class="app-search" action="https://grostore.themetags.com/admin/orders" method="GET">
                        <div class="card-header border-bottom-0">
                            <div class="row justify-content-between g-3">
                                <div class="col-auto flex-grow-1 d-none">
                                    <div class="tt-search-box">
                                        <div class="input-group">
                                            <span class="position-absolute top-50 start-0 translate-middle-y ms-2">
                                                <i data-feather="search"></i>
                                            </span>
                                            <input class="form-control rounded-start w-100" type="text"  id="search" name="search" placeholder="Search by name/phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <table class="table tt-footable border-top align-middle" data-use-parent-width="true" id="TableOrder">
                        <thead>
                            <tr>
                                <th class="text-center">S/L
                                </th>
                                <th>Order Code</th>
                                <th data-breakpoints="xs sm md">Cliente</th>
                                <th>Créer le</th>
                                <th data-breakpoints="xs">Articles</th>
                                <th data-breakpoints="xs sm">Status</th>
                                <th data-breakpoints="xs sm">Total</th>
                                <th data-breakpoints="xs sm" class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentOrders as $item)
                                <tr>
                                    <td class="text-center">{{$item->id}}</td>

                                    <td class="fs-sm">
                                        {{$item->code}}
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img class="rounded-circle"
                                                    src="https://grostore.themetags.com/public/uploads/media/INDtffUJXB3VqDxlyFgAS6h199TZNniBQNPW0mIc.jpg"
                                                    alt="avatar"
                                                    onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="fs-sm mb-0">{{$item->client_name}}</h6>
                                                <span class="text-muted fs-sm">
                                                    {{$item->client_phone}}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="fs-sm">{{$item->created_at}}</span>
                                    </td>

                                    <td class="tt-tb-price">
                                        <span class="fw-bold">
                                            {{$item->countarticle}}
                                        </span>
                                    </td>




                                    <td>
                                        <span class="badge bg-soft-info rounded-pill text-capitalize">{{$item->status}}</span>
                                    </td>



                                    <td>
                                        <span class="badge rounded-pill text-capitalize bg-secondary">{{$item->total}} DH</span>
                                    </td>

                                    <td class="text-end">
                                        <a href="{{url('Livre/Order/'.$item->id)}}" data-bs-toggle="tooltip" class="divLivre me-2 " style="border: 1px solid #dbe6e5;border-radius: 50%;padding: 5px;background-color: #bce5c9;" title="Livré">
                                            <svg style="color: #0e0afd;margin-left: 2px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></g></svg>
                                        </a>

                                        <a href="{{url('Traitement/Order/'.$item->id)}}" data-bs-toggle="tooltip" class="divLivre me-2" style="border: 1px solid #dbe6e5;border-radius: 50%;padding: 5px;background-color: #bce5c9;" title="Traitement">
                                            <svg style="color: #0e0afd;margin-left: 2px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M17 22q-2.075 0-3.537-1.463T12 17t1.463-3.537T17 12t3.538 1.463T22 17t-1.463 3.538T17 22m.5-5.2v-2.3q0-.2-.15-.35T17 14t-.35.15t-.15.35v2.275q0 .2.075.388t.225.337l1.525 1.525q.15.15.35.15t.35-.15t.15-.35t-.15-.35zM5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h4.175q.275-.875 1.075-1.437T12 1q1 0 1.788.563T14.85 3H19q.825 0 1.413.588T21 5v4q0 .425-.288.713T20 10t-.712-.288T19 9V5h-2v2q0 .425-.288.713T16 8H8q-.425 0-.712-.288T7 7V5H5v14h4.5q.425 0 .713.288T10.5 20t-.288.713T9.5 21zm7-16q.425 0 .713-.288T13 4t-.288-.712T12 3t-.712.288T11 4t.288.713T12 5"/></svg>
                                        </a>
                                        <a href="{{url('Detail/Order/'.$item->id)}}" data-bs-toggle="tooltip" class="divLivre me-2" style="border: 1px solid #dbe6e5;border-radius: 50%;padding: 5px;background-color: #bce5c9;" title="Traitement">
                                            <svg style="color: #0e0afd;margin-left: 2px;" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                                        </a>


                                        {{-- <a href="{{url('Detail/Order/'.$item->id)}}"
                                            class="btn btn-sm p-0 tt-view-details divLivre" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="View Details">
                                            <i data-feather="eye"></i>
                                        </a> --}}

                                        {{-- <a href="https://grostore.themetags.com/admin/orders/invoice-print/187"
                                            class="btn btn-sm p-0 tt-priint-details" target="__blank" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Print Invoice">
                                            <i data-feather="printer"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="note" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rejection Note</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="note"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    <!-- container -->
@endsection
