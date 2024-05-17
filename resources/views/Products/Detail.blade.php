@extends('Admin.Dashboard')
@section('content')

<section class="tt-section pt-4">

    <div class="container ">
        <div class="row g-4">
            <div class="col-xl-12">
                <div class="product-details">
                    <!-- product-view-box -->
                    <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                        <div class="row g-4">
                            <div class="col-xl-6 align-self-end">
                                <!-- sliders -->
                                <div class="quickview-double-slider border shadow mb-3">
                                    <img src="{{asset('storage/'.$product->image)}}" alt="" srcset="">
                                </div>
                                <div class="product-thumbnail-slider swiper mt-80 swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div id="productCarousel" class="carousel slide mt-80" data-bs-ride="carousel">
                                        <div class="carousel-inner border shadow">
                                            @foreach ($image_product as $key => $item)
                                                <div class="carousel-item {{$key === 0 ? 'active' : ''}}">
                                                    <img src="{{ asset('storage/images/'.$item->image) }}" class="d-block" alt="Product Image" style="width: 200px">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>


                            </div>
                            <div class="col-xl-6">
                                <div class="product-info">
                                    <h3 class="mt-1 mb-3 h5">{{$product->name}}</h3>

                                    <!-- pricing -->
                                    <div class="pricing all-pricing mt-2">
                                        <span class="fw-bold h4 text-danger">{{$product->price}} DH</span>




                                        <div class="widget-title d-flex mt-4">
                                            <h6 class="mb-1 flex-shrink-0">Description</h6>
                                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                        </div>
                                        <p class="mb-3">{{$product->description}}</p>

                                        <div class="widget-title d-flex mt-4">
                                            <h6 class="mb-1 flex-shrink-0">Catégorie</h6>
                                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                        </div>
                                        <p class="mb-3">{{$product->category}}</p>

                                        <div class="widget-title d-flex mt-4">
                                            <h6 class="mb-1 flex-shrink-0">Marque</h6>
                                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                        </div>
                                        <p class="mb-3">{{$product->marque}}</p>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            </div>
</section>

@endsection
