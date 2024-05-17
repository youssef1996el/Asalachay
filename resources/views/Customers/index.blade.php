@extends('Admin.Dashboard')
@section('content')
<script src="{{asset('Js/Customer.js')}}"></script>
<section class="tt-section pt-4">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card tt-page-header">
                    <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                        <div class="tt-page-title">
                            <h2 class="h5 mb-lg-0" _msttexthash="155129" _msthash="252">Clientèle</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card mb-4" id="section-1">
                    <table class="table tt-footable border-top align-middle" data-use-parent-width="true" id="tableClient">
                        <thead>
                            <tr>
                                <th class="text-center">S/L
                                </th>

                                <th data-breakpoints="xs sm md">Cliente</th>
                                <th>E-mail</th>
                                <th data-breakpoints="xs">Téléphone</th>
                                <th data-breakpoints="xs sm">Adresse</th>
                                <th data-breakpoints="xs sm">Ville</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $item)
                                <tr>
                                    <td class="text-center">{{$item->id}}</td>



                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img class="rounded-circle"
                                                    src="https://grostore.themetags.com/public/uploads/media/INDtffUJXB3VqDxlyFgAS6h199TZNniBQNPW0mIc.jpg"
                                                    alt="avatar"
                                                    onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" />
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="fs-sm mb-0">{{$item->name}}</h6>

                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="fs-sm">{{$item->email}}</span>
                                    </td>

                                    <td class="tt-tb-price">
                                        <span class="">
                                            {{$item->phone}}
                                        </span>
                                    </td>




                                    <td>
                                        <span class="fs-sm">{{$item->address}}</span>
                                    </td>



                                    <td>
                                        <span class="fs-sm">{{$item->city}}</span>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- <table class="table tt-footable border-top footable footable-1 breakpoint-lg" data-use-parent-width="true" style="" _mstvisible="0" id="tableClient">
                        <thead _mstvisible="1">
                            <tr class="footable-header" _mstvisible="2">
                                <th class="text-center footable-first-visible" _msttexthash="21333" _msthash="259" _mstvisible="3" style="display: table-cell;">S/L</th>
                                <th _msttexthash="31395" _msthash="260" _mstvisible="3" style="display: table-cell;">Nom</th>
                                <th data-breakpoints="xs sm" _msttexthash="564538" _msthash="261" _mstvisible="3" style="display: table-cell;">Messagerie électronique</th>
                                <th data-breakpoints="xs sm" _msttexthash="165516" _msthash="262" _mstvisible="3" style="display: table-cell;">Téléphone</th>
                                <th data-breakpoints="xs sm" class="text-end footable-last-visible" _msttexthash="115544" _msthash="263" _mstvisible="3" style="display: table-cell;">Ville </th>
                            </tr>
                        </thead>
                        <tbody _mstvisible="1">

                            <tr _mstvisible="2">
                                <td _msttexthash="4459" _msthash="264" class="text-center footable-first-visible" _mstvisible="3" style="display: table-cell;">{{$item->id}}</td>
                                <td _mstvisible="3" style="display: table-cell;">
                                    <a href="javascript:void(0);" class="d-flex align-items-center" _mstvisible="4">
                                        <div class="avatar avatar-sm" _mstvisible="5">
                                            <img class="rounded-circle" src="https://grostore.themetags.com/public/frontend/default/assets/img/no-data-found.png" alt="" onerror="this.onerror=null;this.src='https://grostore.themetags.com/public/backend/assets/img/placeholder-thumb.png?v=v4.4.0';" _mstvisible="6">
                                        </div>
                                        <h6 class="fs-sm mb-0 ms-2" _msttexthash="78559" _msthash="265" _mstvisible="5">{{$item->name}} </h6>
                                    </a>
                                </td>
                                <td _msttexthash="397241" _msthash="266" _mstvisible="3" style="display: table-cell;">{{$item->email}}</td>
                                <td _msttexthash="113685" _msthash="267" _mstvisible="3" style="display: table-cell;">{{$item->phone}}</td>
                                <td _msttexthash="113685" _msthash="267" _mstvisible="3" style="display: table-cell;">{{$item->city}}</td>
                            </tr>

                        </tbody>
                    </table> --}}

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
