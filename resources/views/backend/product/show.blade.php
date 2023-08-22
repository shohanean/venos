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
            "$product->name" => '',
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
                        <div class="row">
                            <h3 class="card-title fw-bolder text-dark">
                                Product Details - [{{ $product->name }}]
                            </h3>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>Code: {{ $product->code }}
                                    <li>Category: {{ $product->category->category_name }} <i class="fa fa-tag"></i></li>
                                    <li>Stock Alert: {{ $product->stock_alert }} <i
                                            class="fa fa-exclamation-triangle text-danger"></i> </li>
                                    <li>{{ $product->created_at }}</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Name: {{ $product->name }}</li>
                                    <li>Subcategory: {{ $product->subcategory_id }} </li>
                                    <li>Supplier: {{ $product->supplier->name }} (<a
                                            href="tel:{{ $product->supplier->phone_number }}">{{ $product->supplier->phone_number }}</a>)
                                    </li>
                                    <li>{{ $product->updated_at }}</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Brand: {{ $product->brand->name }}</li>
                                    <li>Unit: {{ $product->unit->name }}</li>
                                    <li>Total Available Quantity: {{ $product->inventory->sum('quantity') }}</li>
                                    <li>
                                        Status:
                                        @if ($product->deleted_at)
                                            <span class="badge bg-danger">Deactivated</span>
                                        @else
                                            <span class="badge bg-success">Active</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <div class="card bg-light">
                                    <div class="card-body p-3">
                                        Description: {{ $product->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:List Widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-12 m-0">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Available Inventory of "{{ $product->name }}"
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-row-dashed">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4 rounded-start">Product Cost</th>
                                        <th>Product Price</th>
                                        <th>Tax Type</th>
                                        <th>Order Tax (%)</th>
                                        <th>Warehouse</th>
                                        <th>Status</th>
                                        <th class="rounded-end">Available Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product->inventory as $inventory)
                                        <tr>
                                            <td class="ps-4">{{ $inventory->cost }}</td>
                                            <td>
                                                {{ $inventory->price }}
                                                @if ($inventory->cost < $inventory->price)
                                                    <span
                                                        class="text-success">+{{ round((($inventory->price - $inventory->cost) / $inventory->cost) * 100, 2) }}%</span>
                                                    <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                                @elseif($inventory->cost > $inventory->price)
                                                    <span
                                                        class="text-danger">-{{ round((($inventory->cost - $inventory->price) / $inventory->cost) * 100, 2) }}%</span>
                                                    <i class="fa fa-arrow-down text-danger" aria-hidden="true"></i>
                                                @endif
                                            </td>
                                            <td>{{ Str::title($inventory->tax_type) }}</td>
                                            <td>{{ $inventory->order_tax }}%</td>
                                            <td>
                                                {{ $inventory->warehouse->name }}
                                                <br>
                                                <i class="fa fa-map-pin"></i> {{ $inventory->warehouse->address }}
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-light text-dark">{{ Str::title($inventory->status) }}</span>
                                            </td>
                                            <td>{{ $inventory->quantity }}</td>
                                        </tr>
                                    @empty
                                        <tr class="text-center text-danger">
                                            <td colspan="50">There is no inventory of this product</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
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
