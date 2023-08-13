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
                        <h3 class="card-title fw-bolder text-dark">
                            Product Details - [{{ $product->name }}]
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>Code: <span class="badge bg-info">{{ $product->code }}</span></li>
                                    <li>{{  $product }}</li>
                                    <li>asdasd</li>
                                    <li>asdasd</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>asdasd</li>
                                    <li>asdasd</li>
                                    <li>asdasd</li>
                                    <li>asdasd</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>asdasd</li>
                                    <li>asdasd</li>
                                    <li>asdasd</li>
                                    <li>asdasd</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:List Widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Product Details - [{{ $product->name }}]
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-row-dashed">
                                <thead>
                                    <tr>
                                        <th>cost</th>
                                        <th>price</th>
                                        <th>tax_type</th>
                                        <th>order_tax</th>
                                        <th>quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->inventory as $inventory)
                                        <tr>
                                            <td>{{ $inventory->cost }}</td>
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
                                            <td>{{ $inventory->tax_type }}</td>
                                            <td>{{ $inventory->order_tax }}</td>
                                            <td>{{ $inventory->quantity }}</td>
                                        </tr>
                                    @endforeach
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
