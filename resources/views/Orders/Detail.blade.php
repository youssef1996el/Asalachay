@extends('Admin.Dashboard')
@section('content')

<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0" _msttexthash="423033" _msthash="252">Détails de la commande</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!--left sidebar-->
            <div class="col-xl-9 order-2 order-md-2 order-lg-2 order-xl-1">
                <div class="card mb-4" id="section-1">
                    <div class="card-header border-bottom-0">

                        <!--order status-->
                        <div class="row justify-content-between align-items-center g-3">
                            <div class="col-auto flex-grow-1">
                                <h5 class="mb-0"><font _mstmutation="1" _msttexthash="388999" _msthash="255">Facture <span class="text-accent" _mstmutation="1" _istranslated="1">{{$Detail->code}} </span></font>
                                </h5>
                                <span class="text-muted" _msttexthash="490945" _msthash="256">Date de commande :{{$Detail->created_at}}</span>

                                                                        <div>
                                        <span class="text-muted">
                                            <i class="las la-map-marker"></i><font _mstmutation="1" _msttexthash="490932" _msthash="257"> Emplacement par défaut </font></span>
                                    </div>

                            </div>










                        </div>
                    </div>

                    <!--customer info-->
                    <div class="card-body">
                        <div class="row justify-content-between g-3">
                            <div class="col-xl-7 col-lg-6">
                                <div class="welcome-message">
                                    <h6 class="mb-2" _msttexthash="581776" _msthash="278">Informations sur le client</h6>
                                    <p class="mb-0" _msttexthash="465140" _msthash="279">Nom : {{$Detail->name}}</p>
                                    <p class="mb-0" _msttexthash="902759" _msthash="280">Courriel : {{$Detail->email}}</p>
                                    <p class="mb-0" _msttexthash="325715" _msthash="281">Téléphone : {{$Detail->phone}}</p>
                                    <p class="mb-0" _msttexthash="325715" _msthash="281">Ville : {{$Detail->city}}</p>
                                    <p class="mb-0">
                                        <font _mstmutation="1" _msttexthash="310492" _msthash="282">Type de livraison : </font>
                                        <span class="badge bg-primary" _msttexthash="128596" _msthash="283"> Régulier </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--order details-->
                    <table class="table tt-footable border-top footable footable-1 breakpoint-lg" data-use-parent-width="true" style="" _mstvisible="0">
                        <thead _mstvisible="1">
                            <tr class="footable-header" _mstvisible="2">
                                <th class="text-center footable-first-visible" width="7%" _msttexthash="21333" _msthash="288" _mstvisible="3" style="display: table-cell;">S/L</th>
                                <th _msttexthash="118768" _msthash="289" _mstvisible="3" style="display: table-cell;">Produits</th>
                                <th data-breakpoints="xs sm" _msttexthash="209352" _msthash="290" _mstvisible="3" style="display: table-cell;">Prix unitaire</th>
                                <th data-breakpoints="xs sm" _msttexthash="39624" _msthash="291" _mstvisible="3" style="display: table-cell;">QTÉ</th>
                                <th data-breakpoints="xs sm" class="text-end footable-last-visible" _msttexthash="139243" _msthash="292" _mstvisible="3" style="display: table-cell;">Prix total</th>
                            </tr>
                        </thead>

                        <tbody _mstvisible="1">
                            @php
                                $TotalGeneral = 0;
                            @endphp
                            @foreach ($products as $item)
                                @php
                                    $TotalGeneral += $item->total;
                                @endphp
                                <tr _mstvisible="2">

                                    <td _msttexthash="4459" _msthash="293" class="text-center footable-first-visible" _mstvisible="3" style="display: table-cell;">{{$item->id}}</td><td _mstvisible="3" style="display: table-cell;">
                                        <div class="d-flex align-items-center" _mstvisible="4">
                                            <div class="avatar avatar-sm" _mstvisible="5">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="Red Capsicum ±12 gm" class="rounded-circle" _mstalt="301808" _msthash="294" _mstvisible="6">
                                            </div>
                                            <div class="ms-2" _mstvisible="5">
                                                <h6 class="fs-sm mb-0" _msttexthash="311350" _msthash="295" _mstvisible="6"> {{$item->name}} </h6>
                                                <div class="text-muted" _mstvisible="6"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tt-tb-price" _mstvisible="3" style="display: table-cell;">
                                        <span class="fw-bold" _msttexthash="802373" _msthash="296" _mstvisible="4">{{$item->price}} DH
                                        </span>
                                    </td>
                                    <td _msttexthash="4459" _msthash="297" class="fw-bold" _mstvisible="3" style="display: table-cell;">{{$item->qte}}</td>
                                    <td class="tt-tb-price text-end footable-last-visible" _mstvisible="3" style="display: table-cell;">
                                        <span class="text-accent fw-bold" _msttexthash="802373" _msthash="298" _mstvisible="4">{{$item->total}} DH</span>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <!--grand total-->
                    <div class="card-body">
                        <div class="card-footer border-top-0 px-4 py-3 rounded">
                            <div class="row g-4">
                                <div class="col-auto">

                                </div>

                                <div class="col-auto flex-grow-1">

                                </div>








                                <div class="col-auto text-lg-end ps-lg-5">
                                    <h6 class="mb-1" _msttexthash="252135" _msthash="309">Total général</h6>
                                    <strong class="text-accent" _msttexthash="1452412" _msthash="310">@php echo number_format($TotalGeneral, 2, ',', ' '); @endphp DH</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--right sidebar-->
            <div class="col-xl-3 order-1 order-md-1 order-lg-1 order-xl-2">
                <div class="tt-sticky-sidebar">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4" _msttexthash="382239" _msthash="311">Journaux de commande</h5>
                            <div class="tt-vertical-step">
                                <ul class="list-unstyled">

                                                                                <li>
                                            <a class="active" _msttexthash="439049" _msthash="312">Aucun journal trouvé</a>
                                        </li>
                                                                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
