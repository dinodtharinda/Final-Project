@extends('dashboard.customer.layouts.app')

@section('content')

    <head>

        <link rel="stylesheet" href="{{ asset('ui/css/cart.css') }}">


    </head>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-12">


                    @foreach ($existsOrder as $existsProducts)
                        <div class="card mb-4">
                            @if (count($existsProducts->orderproducts) >= 1)
                                <div class="d-flex justify-content-between card-header py-3">
                                    <h4 class="mb-0">Order Item - {{ count($existsProducts->orderproducts) }} items</h4>
                                </div>
                            @endif

                            @foreach ($existsProducts->orderproducts as $existsProduct)
                                <div class="card-body">
                                    <!-- Single item -->
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                data-mdb-ripple-color="light">
                                                <img src="{{ asset('productImages/' . $existsProduct->product->proudctImages[0]->image_path) }}"
                                                    class="" style="width: 170px;height: 170px;"
                                                    alt="Blue Jeans Jacket" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{ $existsProduct->product->productmodel->name }}</strong>
                                            </p>
                                            <p>Fabric: {{ $existsProduct->product->productfabric->fabric }}
                                            </p>
                                            <p>Size:{{ $existsProduct->product->productsize->size }}</p>
                                            
                                        </div>
                                        <!-- Price -->
                                        <p class="text-start text-md-center">
                                            <strong>Rs
                                                {{ number_format($existsProduct->product->unit_price) }}/=</strong>
                                        </p>

                                        <!-- Price -->
                                    </div>
                                </div>
                            @endforeach
                            <!-- Single item -->
                        </div>
                </div>
                @endforeach

            </div>
        </div>
        </div>
    </section>
@endsection
