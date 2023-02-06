@extends('dashboard.customer.layouts.app')

@section('content')

    <head>

        <link rel="stylesheet" href="{{ asset('ui/css/cart.css') }}">


    </head>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="d-flex justify-content-between card-header py-3">
                            <h4 class="mb-0">Cart - {{ count($existsProducts) }} items</h4>

                            <a href="{{ route('customer.orderPage') }}" class="btn btn-primary px-3 ms-2 qun-btn">
                                <i class="bi bi-truck"></i>
                            </a>

                        </div>
                        @foreach ($existsProducts as $existsProduct)
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
                                        <p><strong>{{ $existsProduct->product->productmodel->name }}</strong></p>
                                        <p>Fabric: {{ $existsProduct->product->productfabric->fabric }}</p>
                                        <p>Size:{{ $existsProduct->product->productsize->size }}</p>
                                        <a href="{{ route('customer.removeFromCart', $existsProduct->product->id) }}"
                                            class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                                            title="Remove item">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                                            title="Move to the wish list">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <!-- Data -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Quantity -->
                                        <div class="d-flex mb-4" style="max-width:170px;height:40px;">
                                            <button class="btn btn-primary px-3 me-2  "
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown() , decrementQuantity({{ $existsProduct->product->id }})">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <div class="form-outline">
                                                <input disabled id="form1" min="1" name="quantity"
                                                    value="{{ $existsProduct->quantity }}" type="number"
                                                    class="form-control" />
                                            </div>

                                            <button class="btn btn-primary px-3 ms-2 qun-btn"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp() , addTocart({{ $existsProduct->product->id }})">
                                                <i class="fas fa-plus"></i>
                                            </button>

                                        </div>
                                        <!-- Quantity -->

                                        <!-- Price -->
                                        <p class="text-start text-md-center">
                                            <strong>Rs {{ number_format($existsProduct->product->unit_price) }}/=</strong>
                                        </p>
                                        <!-- Price -->
                                    </div>
                                </div>
                                <!-- Single item -->

                                <hr class="my-4" />
                            </div>
                        @endforeach
                    </div>



                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($existsProducts as $existsProduct)
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        {{ $existsProduct->product->productmodel->name }}



                                        <span> X{{ $existsProduct->quantity }}</span>
                                        <span>{{ number_format($existsProduct->product->unit_price * $existsProduct->quantity) }}</span>
                                    </li>
                                @endforeach
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                   Delivery
                                    <span>Gratis</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        
                                        <strong>Total amount</strong>
                        
                                    </div>
                                 <span><strong>  
                                     
                                     Rs   {{number_format($total) }}
                                   
                                    </strong></span>
                                </li>
                            </ul>

                            <a type="button" href="{{ route('customer.addOrder') }}" class="btn checkout-btn">
                                Go to checkout
                            </a>
                        </div>

                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Expected shipping delivery</strong></p>
                            <p class="mb-0">12.10.2020 - 14.10.2020</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                alt="Visa" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                alt="American Express" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                alt="Mastercard" />
                            <img class="me-2" width="45px"
                                src="https://s.wsj.net/public/resources/images/BN-PR880_PAYMC0_TOP_20160905213759.jpg"
                                alt="PayPal acceptance mark" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function addTocart(id) {
            $.ajax({
                type: "POST",
                url: @json(route('customer.incrementQuantity')),
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                success: function(response) {
                    location.reload();

                }
            });
        }


        function decrementQuantity(id) {
            $.ajax({
                type: "POST",
                url: @json(route('customer.decrementQuantity')),
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                success: function(response) {
                    // new Notify ({
                    //     text: 'Add to cart successfully',
                    //     autoclose: true,
                    //     autotimeout: 3000,
                    //     status: 'success'
                    // })
                    location.reload();

                }
            });
        }
    </script>
@endsection
