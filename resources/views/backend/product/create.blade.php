@extends('layouts.dashboard')

@section('product_management')
    show here
@endsection

@section('product.index')
    active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'product' => 'product.index',
            'add new product' => '',
        ],
        'fontawsome' => 'fas fa-cubes',
    ])
@endsection

@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @can('can manage product')
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Add New Product
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Code</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('code') is-invalid @enderror"
                                            name="code" value="{{ old('code') }}" autofocus>
                                    </div>
                                    @error('code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Product Name</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Brand</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select @error('brand_id') is-invalid @enderror" name="brand_id">
                                            @foreach ($brands as $brand)
                                                <option {{ $brand->id == old('brand_id') ? 'selected' : '' }}
                                                    value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('brand_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Category Name</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select @error('category_id') is-invalid @enderror"
                                            name="category_id">
                                            <option value="">-Select One Category-</option>
                                            @foreach ($categories as $category)
                                                <option {{ $category->id == old('category_id') ? 'selected' : '' }}
                                                    value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Subcategory Name</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select @error('subcategory_id') is-invalid @enderror"
                                            name="subcategory_id">
                                            <option value="1">-Select Category First-</option>
                                        </select>
                                    </div>
                                    @error('subcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-2">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Product Cost</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('cost') is-invalid @enderror"
                                            name="cost" value="{{ old('cost') }}">
                                        <span
                                            class="input-group-text">{{ App\Models\Currency::where('id', setting('currency'))->first()->symbol }}</span>
                                    </div>
                                    @error('cost')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-2">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Product Price</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('cost') is-invalid @enderror"
                                            name="price" value="{{ old('price') }}">
                                        <span
                                            class="input-group-text">{{ App\Models\Currency::where('id', setting('currency'))->first()->symbol }}</span>
                                    </div>
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Product Unit</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select @error('unit_id') is-invalid @enderror" name="unit_id">
                                            @foreach ($units as $unit)
                                                <option {{ $unit->id == old('unit_id') ? 'selected' : '' }}
                                                    value="{{ $unit->id }}">{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('unit_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Stock Alert</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('stock_alert') is-invalid @enderror"
                                            name="stock_alert" value="{{ old('stock_alert') }}">
                                    </div>
                                    @error('stock_alert')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-2">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Tax Type</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select @error('tax_type') is-invalid @enderror" name="tax_type">
                                            <option {{ old('tax_type') == 'exclusive' ? 'selected' : '' }} value="exclusive">
                                                Exclusive</option>
                                            <option {{ old('tax_type') == 'inclusive' ? 'selected' : '' }} value="inclusive">
                                                Inclusive</option>
                                        </select>
                                    </div>
                                    @error('tax_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-2">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Order Tax</h6>
                                    </label>
                                    <div class="input-group">
                                        @if (old('order_tax'))
                                            <input type="text" class="form-control @error('order_tax') is-invalid @enderror"
                                                name="order_tax" value="{{ old('order_tax') }}">
                                        @else
                                        <input type="text" class="form-control @error('order_tax') is-invalid @enderror"
                                            name="order_tax" value="0">
                                        @endif
                                        <span class="input-group-text">%</span>
                                    </div>
                                    @error('order_tax')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="input-group mb-5">
                                <button type="submit" class="btn btn-success mt-5">Add Product</button>
                            </div>
                            <!--end::Input group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:List Widget 3-->
            </div>
            <!--end::Col-->
        @else
            <div class="col-xl-12">
                @include('backend.inc.alert.no_permission')
            </div>
        @endcan
    </div>
@endsection