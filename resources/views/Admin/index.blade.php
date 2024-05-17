@extends('Admin.Dashboard')
@section('content')
<script src="{{asset('js/indexDashboard.js')}}"></script>

 <section class="tt-section pt-4">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card tt-page-header">
                            <div class="card-body d-lg-flex align-items-center justify-content-lg-between">
                                <div class="tt-page-title">
                                    <h2 class="h5 mb-lg-0">Tableau de bord d'administration</h2>
                                </div>
                                <div class="tt-action">
                                    <a href="{{url('Product/AddProduct')}}" class="btn btn-primary ms-2">
                                        <i data-feather="plus" class="me-2"></i>Ajouter Produit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-xl-9">
                        <div class="row g-3">
                            <!-- total sales chart -->
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="card h-100 flex-column">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted">Gain total</span>
                                            <div class="dropdown tt-tb-dropdown fs-sm">
                                                <a class=" text-muted" href="#">
                                                    Les 7 derniers jours
                                                                                                    </a>

                                            </div>
                                        </div>
                                        <h4 class="fw-bold">{{$totalLast7Days}} DH</h4>
                                    </div>
                                    <div id="totalSales"></div>
                                </div>
                            </div>
                            <!-- total sales chart -->


                            <!-- top 5 category sales chart -->
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="card h-100 flex-column">
                                    <div class="card-body d-flex flex-column h-100">
                                        <span class="text-muted">Ventes ce ans-ci</span>
                                        <h4 class="fw-bold">{{$totalAmountThisYear}} DH</h4>
                                        <div id="topFive"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- top 5 category sales chart -->

                            <!-- total order this month chart -->
                            <div class="col-sm-6 col-md-4 col-lg-4 d-none d-lg-block d-md-block">
                                <div class="card h-100 flex-column">
                                    <div class="card-body">
                                        <span class="text-muted">Commandes des 30 derniers jours</span>
                                        <h4 class="fw-bold">{{$totalOrderLast30Days}}</h4>
                                    </div>
                                    <div id="last30DaysOrders"></div>
                                </div>
                            </div>
                            <!-- total order this month chart -->
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <!-- sales this month chart -->
                            <div class="col-l2">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="text-muted">Ventes ce mois-ci</span>
                                        </div>
                                        <h4 class="fw-bold mb-0">{{$totalAmountThisMonth}} DH</h4>
                                    </div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                            <!-- sales this month chart -->
                            <script>
                               var totalOrdersAmountPerDay = @json($totalOrdersAmountPerDay);

                                // Your JavaScript code continues here
                                const labels = Object.keys(totalOrdersAmountPerDay).map(date => {
                                    // Split the date string into parts (year, month, day)
                                    const [year, month, day] = date.split('-');
                                    // Return the formatted label (day-month)
                                    return `${day}-${month}`;
                                });

                                const values = Object.values(totalOrdersAmountPerDay); // Get the total amounts as values

                                const ctx = document.getElementById('myChart');

                                new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: labels,
                                        datasets: [{
                                            label: 'Montant total des commandes',
                                            data: values,
                                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                            borderColor: 'rgba(54, 162, 235, 1)',
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                              </script>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <!-- top selling products -->
                        <div class="card h-100 flex-column">
                            <div class="card-body px-0">
                                <div class="px-3">
                                    <h5 class="fw-bold mb-1">Produits les plus vendus</h5>
                                    <span class="text-muted">
                                        Nous avons répertorié {{$totalProducts}} produits au total.</span>
                                </div>
                                <div class="tt-top-selling mt-3 h-25rem" data-simplebar>
                                    <ul class="tt-top-selling-list list-unstyled mb-0 px-3">
                                        @foreach ($TopProductSales as $item)
                                            <li class="py-3 d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md flex-shrink-0">
                                                        <img class="rounded-circle"
                                                            src="{{asset('storage/'.$item->image)}}"
                                                            alt="" />
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="fs-md mb-0 tt-line-clamp tt-clamp-1">
                                                            {{$item->name}}
                                                        </h6>
                                                        <span class="text-muted fs-sm">Marque:
                                                            {{$item->marque}}
                                                        </span>
                                                        <br>
                                                        <span class="text-muted fs-sm">Categorie:
                                                            {{$item->category}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <span class="fw-bold heading-font text-end  cursor-pointer"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Total Sales">({{$item->numberOfSales}})
                                                </span>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- top selling products -->
                    </div>
                </div>

                                    <div class="row g-3 mb-3">
                        <a href="https://grostore.themetags.com/admin/orders" class="col-lg-4 col-sm-6">
                            <div class="card h-100 flex-column">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <div class="text-center bg-soft-primary rounded-circle">
                                                <span class="text-primary"> <i data-feather="shopping-bag"></i></span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-1">{{$TotalOrder}}</h4>
                                            <span class="text-muted">Total des commandes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="https://grostore.themetags.com/admin/orders?delivery_status=pending"
                            class="col-lg-4 col-sm-6">
                            <div class="card h-100 flex-column">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <div class="text-center bg-soft-info rounded-circle">
                                                <span class="text-info"> <i data-feather="refresh-cw"></i></span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-1">{{$Ordertraitement}}</h4>
                                            <span class="text-muted">Commande en cours  de traitement</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="https://grostore.themetags.com/admin/orders?delivery_status=delivered"
                            class="col-lg-4 col-sm-6">
                            <div class="card h-100 flex-column">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg">
                                            <div class="text-center bg-soft-success rounded-circle">
                                                <span class="text-success"> <i data-feather="check-circle"></i></span>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-1">{{$Orderlivre}}</h4>
                                            <span class="text-muted">Total livré</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom-0">
                                    <div class="row justify-content-between g-3">
                                        <div class="col-auto flex-grow-1">
                                            <h5 class="mb-1">Dernières commandes</h5>
                                            <span class="text-muted">Vos dernières commandes</span>
                                        </div>


                                    </div>
                                </div>

                                <table class="table tt-footable border-top align-middle" data-use-parent-width="true" id="TableOrder">
                                    <thead>
                                        <tr>
                                            <th class="ps-4">Code Commande </th>
                                            <th data-breakpoints="xs sm md">Clients</th>
                                            <th>Créer Le</th>
                                            <th data-breakpoints="xs">Articles</th>
                                            <th data-breakpoints="xs">Statut de livraison</th>
                                            <th data-breakpoints="xs">Total Commande</th>
                                            <th data-breakpoints="xs" class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recentOrders as $item)
                                            <tr>

                                                <td class="fs-sm ps-4">
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
                                                    <span class="fs-sm">{{date("d-m-Y", strtotime($item->created_at))}}</span>
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
                                                    <span  class="badge rounded-pill text-capitalize bg-secondary">{{$item->total}} DH </span>
                                                </td>

                                                <td class="text-end">
                                                    <a href="{{url('Detail/Order/'.$item->id)}}"
                                                        class="btn btn-sm p-0 tt-view-details" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="View Details">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <!-- counter in dashboard -->



            </div>
        </section>
@endsection
