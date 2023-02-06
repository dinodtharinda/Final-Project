@extends('dashboard.owner.layouts.app')


@section('content')
    <div>
        {{-- @foreach ($products as $product)
    {{ $product }}
    @endforeach --}}
        <div>
            <div class="my-2" style="width: 250px ">
                <a href="{{ route('owner.products.create') }}"
                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Add New Product</a>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Details</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Added Date</th>
                        <th>Action</th>

                    </tr>
                    @foreach ($products as $product)
                        @if ($product->is_remove == 0)
                            <tr>
                                <td> {{ $product->id }}</td>
                                <td> {{ $product->category }}</td>

                                <td>
                                    <ul>
                                        <li> Model {{ $product->productmodel->name }} </li>
                                        <li> Size {{ $product->productsize->size }} </li>
                                        <li> Fabric {{ $product->productfabric->fabric }}</li>
                                        <li>Timber {{ $product->producttimber->name }}</li>
                                        <li>Type {{ $product->producttype->type }}</li>

                                    </ul>
                                </td>
                                <td>{{ $product->unit_price }} </td>
                                <td>{{ $product->quantity }} </td>
                                <td> {{ $product->date }}</td>
                                <td class="">
                                    <div class="row"><a href="{{ route('owner.products.edit', $product->id) }}"
                                            class="btn btn-success mx-2">Update</a>

                                        <form action="{{ route('owner.products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>

                                </td>

                            </tr>
                        @endif
                    @endforeach
                </thead>
            </table>
        </div>

    </div>
@endsection
