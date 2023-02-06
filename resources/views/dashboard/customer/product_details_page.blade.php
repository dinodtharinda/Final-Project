@extends('dashboard.customer.layouts.app')


@section('content')

<head><link rel="stylesheet" href="{{ asset('notification/dist/simple-notify.min.css') }}" /></head>


    <section>
        <div class="container " style="margin-block: 4rem; margin-top: 6rem;">
            <div class="row justify-content-center">
                <div class="col-md-7 fixed">
                    <div class="row gap-1 d-flex justify-content-center">
                        @if (count($product->proudctImages) >= 0)
                            <div class="col-md-10 sofa-img  demo-trigger"
                                style="background-image: url({{ asset('productImages/' . $product->proudctImages[0]->image_path) }});">
                            </div>
                        @endif
                        @if (count($product->proudctImages) >= 2)
                            <div class="col-md-5 sofa-img-mini"
                                style="background-image: url({{ asset('productImages/' . $product->proudctImages[1]->image_path) }});">
                            </div>
                        @endif
                        @if (count($product->proudctImages) >= 3)
                            <div class="col-md-5 sofa-img-mini"
                                style="background-image: url({{ asset('productImages/' . $product->proudctImages[2]->image_path) }});">

                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-5 mt-sm-5 mt-md-0 sofa-details">
                    <h2 class=" sofa-title" style="margin-top: 30px; margin-left: 20px; margin-bottom: 20px;">Blackly
                    </h2>
                    <div class="details-list-item ms-4 d-flex">
                        <h5 class="mt-2 sofa-option-title">Type </h2>
                            <div class="ms-5 mb-3">
                                <img src="{{ asset('ui/images/Type-icons/' . $product->producttype->type . '.png') }}"
                                    width="60px" height="25px" alt="">
                                <h4 class="text-center sofa-data-text mt-2">{{ $product->producttype->type }}</h4>
                            </div>
                    </div>
                    <hr style="margin-top: 2px;">
                    <div class="details-list-item ms-4 d-flex">
                        <h5 class="mt-2 sofa-option-title"> Size </h5>
                        <h5 class="mt-2 ms-5 sofa-data-text">{{ $product->productsize->size }}</h5>
                    </div>
                    <hr>
                    <div class=" details-list-item ms-4 d-flex">
                        <h5 class="mt-2 sofa-option-title">Fabric</h2>
                            <div class="ms-5 ">
                                <img class="fabric-img"
                                    src="{{ asset('ui/images/colors/' . $product->productfabric->image_path) }}"
                                    style="border-radius: 3px;" alt="">
                            </div>
                    </div>
                    <hr>
                    <div class="details-list-item ms-4 d-flex">
                        <h5 class="mt-2 sofa-option-title"> Timber </h5>
                        <h5 class="mt-2 ms-5 sofa-data-text"> {{ $product->producttimber->name }}</h5>
                    </div>
                    <hr style="margin-bottom: 2px;">
                    <div class="ms-4">
                        {{-- <p class=" mb-0">Cash on Delivery</p>
                        <p class="m mb-0">7 Days Returns</p> --}}
                        <div class="d-flex mt-2">
                            <div class="me-4">
                                <div class="p-2 stock-circule" style="background-color: rgb(171, 202, 125);">
                                    <p class="text-center stock-circule-text" style="color: rgb(101, 187, 72);">34</p>
                                </div>
                                <p class="ms-1" style="font-size: 14px;">Sold</p>
                            </div>
                            <div class="me-4">
                                <div class="  p-2 stock-circule" style="background-color: rgb(202, 181, 125);">
                                    <p class="text-center stock-circule-text" style="color: rgb(187, 143, 72);">34</p>
                                </div>
                                <p class="" style="font-size: 14px;">Watch</p>
                            </div>
                            <div class="me-4">
                                <div class=" p-2 stock-circule" style=" background-color: rgb(125, 183, 202);">
                                    <p class="text-center stock-circule-text" style="color: rgb(72, 120, 187);">
                                        {{ $product->quantity }}</p>
                                </div>
                                <p class="" style="font-size: 14px;">Stock</p>
                            </div>
                        </div>
                        <h5 class="price-text">Rs {{ number_format($product->unit_price) }}</h5>
                        {{-- <div class="d-flex">
                            <h3 class="quantity-icon">
                                <i class="bi bi-plus-lg "></i>
                            </h3>
                            <div class="p-1 mx-2 "
                                style="width: 50px; height: 35px;border: 1px solid; border-radius: 10px;">
                                <p class="text-center" style="font-weight: bold;">1</p>
                            </div>
                            <h3 class="quantity-icon">
                                <i class="bi bi-dash-lg "></i>
                            </h3>
                        </div> --}}
                        <div class="d-flex">
                            <div class="buy-now-btn m-2 mb-4 py-3" style="background-color: rgb(49, 148, 3);">
                                <h5 class="text-center m-1 buy-now-btn-text">
                                    BUY NOW</h5>
                            </div>
                            <a type="button" onclick="addTocart({{ $product->id }})" style="text-decoration: none" >
                                <div class="buy-now-btn m-2 mb-4 py-3" style="background-color: rgb(0, 0, 0); ">
                                    <h5 class="text-center m-1 buy-now-btn-text">
                                        ADD TO CART</h5>
                                </div>
                            </a>

                            <div class="buy-btn m-2 mb-4  add-wish-btn">
                                <h5 class="text-center m-1 add-wish-btn-icon">
                                    <i class="bi bi-heart"></i>
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container col-12 mt-4 ms-md-5 reveal">
                    <h4>Discription</h4>
                    <p style="  text-align: justify; ">
                        {{ $product->description }}

                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        function addTocart(id) {
            $.ajax({
            type: "POST",
            url: @json(route('customer.productAddToCart')),
            data:{
                "_token": "{{ csrf_token() }}",
                "id":id
            },
            success: function(response){
                new Notify ({
                    text: 'Add to cart successfully',
                    autoclose: true,
                    autotimeout: 3000,
                    status: 'success'
                })
            }
        });
        }
    </script>
    <script src="{{ asset('notification/dist/simple-notify.min.js') }} "></script>
@endsection
