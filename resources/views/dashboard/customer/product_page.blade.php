@extends('dashboard.customer.layouts.app')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('ui/css/card.css') }}">
    </head>
    <!-- Slider start -->
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="box">
                            <div class="image-main"
                                style="background-image: url('{{ asset('ui/images/main_images/product-view-main.jpg') }}'); ">
                            </div>
                        </div>
                        <div class="box over ">
                            <div class="overlay-main row">
                                <h1 class="second-title align-self-center "
                                    style="font-size: 6vw; text-align: center; font-weight: 100; margin-bottom: 50px; text-align: center;">
                                    MODERN SOFAS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Slider end -->



    <!-- card start -->


    <section>
        <div class="product-div my-5 ">
            <div class="d-flex flex-wrap gap-4  justify-content-center">

                @foreach ($products as $product)
                    <a href="{{ route('productDetails', encrypt($product->id)) }}">

                        <div class="card "
                            style="background-image:url('{{ asset('productImages/' . $product->proudctImages[0]->image_path) }}'); ">
                            <figure>
                            </figure>
                            <section class="details">
                                <div class="min-details">
                                    <h1>{{ $product->productmodel->name }} <span>{{ $product->category }}</span></h1>
                                    <h1 class="price" style="color: greenyellow;font-weight: 300;">Rs
                                        {{ number_format($product->unit_price) }}/=</h1>
                                </div>
                                <div class="options">
                                    <div class="options-size m-0">
                                        <div class="card-details-div" style="background-color: rgb(126, 217, 87); ">
                                            <p class="card-details-div-text">
                                                {{ $product->producttype->type }}
                                            </p>
                                        </div>
                                        <div class="card-details-div" style="background-color: rgb(132, 213, 190); ">
                                            <p class="card-details-div-text">
                                                {{ $product->producttimber->name }}
                                            </p>
                                        </div>
                                        <div class="card-details-div" style="background-color: rgb(161, 87, 217); ">
                                            <p class="card-details-div-text">
                                                Size {{ $product->productsize->size }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class=" d-flex">
                                        <img style="  border: 1px solid rgb(255, 255, 255);" class="card-color-img "
                                            src="{{ asset('colors/' . $product->productfabric->image_path) }}"
                                            alt="">
                                    </div>

                                </div>
                            </section>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
