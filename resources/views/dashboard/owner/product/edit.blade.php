@extends('dashboard.owner.layouts.app')

@section('content')

    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <div class=" container">
        <div class="row">
            <div class="col-12">
                <h4>Create a new Product</h4>
                <form action="{{ route('owner.products.update',$updateProduct->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row-12 d-flex">
                        <div class="col-5">
                            <div class="form-group">
                                <select class="form-select form-select-lg mt-3 " name="category"
                                    aria-label=".form-select-lg example">
                                    <option selected value=''>Select Product Category</option>
                                    <option value="Sofa"
                                        {{ $updateProduct->category == 'Sofa' ? 'selected' : '' }}>Sofa Category
                                    </option>
                                    <option value="Furniture"
                                        {{ $updateProduct->category == 'Furniture' ? 'selected' : '' }}>Furniture
                                        Category
                                    </option>
                                </select>
                                <span class="text-danger">
                                    @error('category')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-select-lg mt-3  " name="model"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select Product Model</option>
                                    @foreach ($models as $model)
                                        <option
                                            value="{{ $model->id }}"{{ $updateProduct->productmodel->id == $model->id ? 'selected' : '' }}>
                                            {{ $model->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('model')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-select-lg mt-3 " name="type"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select Product Type</option>
                                    @foreach ($types as $type)
                                        {{-- <option value="{{ $type->id }}">{{ $type->type }} Type</option> --}}
                                        <option
                                            value="{{ $type->id }}"{{ $updateProduct->producttype->id == $type->id ? 'selected' : '' }}>
                                            {{ $type->type }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-select-lg mt-3 " name="size"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select Product Size</option>
                                    @foreach ($sizes as $size)
                                        <option
                                            value="{{ $size->id }}"{{ $updateProduct->productsize->id == $size->id ? 'selected' : '' }}>
                                            Size {{ $size->size }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('size')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-select-lg mt-3 " name="fabric"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select Product Fabric</option>
                                    @foreach ($fabrics as $fabric)
                                        {{-- <option value="{{ $fabric->id }}">{{ $fabric->fabric }} Fabric</option> --}}
                                        <option
                                            value="{{ $fabric->id }}"{{ $updateProduct->productfabric->id == $fabric->id ? 'selected' : '' }}>
                                            Fabric {{ $fabric->fabric }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('fabric')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-select-lg mt-3 " name="timber"
                                    aria-label=".form-select-lg example">
                                    <option selected>Select Product Timber</option>
                                    @foreach ($timbers as $timber)
                                        {{-- <option value="{{ $timber->id }}">{{ $timber->name }}</option> --}}
                                        <option
                                            value="{{ $timber->id }}"{{ $updateProduct->producttimber->id == $timber->id ? 'selected' : '' }}>
                                            {{ $timber->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('timber')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <h5>Description</h5>
                                <textarea class="form-control" name="description" id="description" style="min-width: fit-content;" rows="8">{{ $updateProduct->description }}</textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="number" name="quantity" class="form-control  mt-3 p-4"
                                    value="{{ $updateProduct->quantity }}">
                                <span class="text-danger">
                                    @error('quantity')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="price" class="form-control  mt-3 p-4"
                                    value="{{ $updateProduct->unit_price }}">
                                <span class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="row form-group">
                            @foreach ($updateProduct->proudctImages as $image)
                                <div class="col-4"><img src="{{ asset('productImages/' . $image->image_path) }}"
                                        width="330px" height="200px" alt=""></div>
                            @endforeach
                        </div>

                        <div class="col-12">
                            <div class="form-group ">
                                <button type="submit " class="btn btn-outline-primary px-5 fs-4 float-end">Next</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
