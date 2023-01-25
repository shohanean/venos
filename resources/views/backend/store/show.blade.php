@extends('layouts.dashboard')

@section('store.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'store' => 'store.index',
            $store->name => '',
        ],
        'fontawsome' => 'fas fa-store'
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    @can ('can manage store')
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title border-bottom">
                    <span class="card-label fw-bolder fs-3 mb-1">
                        Store Details - {{ $store->name }}
                    </span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table body-->
                        <tbody>
                            <tr>
                                <td><b>Store Name</b></td>
                                <td>{{ $store->name ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Logo</b></td>
                                <td>
                                    @if ($store->logo)
                                        <img width="200" src="{{ asset($store->logo) }}" alt="No Logo Uploaded">
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><b>Store Code</b></td>
                                <td>{{ $store->code ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Email Address</b></td>
                                <td>{{ $store->email_address ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Phone Number</b></td>
                                <td>{{ $store->phone_number ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Address</b></td>
                                <td>
                                    <p>{{ $store->address_line_1 ?? "-" }}</p>
                                    <p>{{ $store->address_line_2 ?? "-" }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Store City</b></td>
                                <td>{{ $store->city ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Postal Code</b></td>
                                <td>{{ $store->postal_code ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Country</b></td>
                                <td>{{ $store->country ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Receipt Header</b></td>
                                <td>{{ $store->receipt_header ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Receipt Footer</b></td>
                                <td>{{ $store->receipt_footer ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Created At</b></td>
                                <td>
                                    {{ $store->created_at }}
                                    <span class="badge bg-primary">{{ $store->created_at->diffForHumans() }}</span>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
                <div class="text-center">
                    <a href="{{ route('store.index') }}" class="btn btn-info mb-5">Back To Stores List</a>
                </div>
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>
    <div class="col-xl-6">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title border-bottom">
                    <span class="card-label fw-bolder fs-3 mb-1">
                        Receipt of - {{ $store->name }}
                    </span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="bg-secondary m-auto" style="width: 302.36px">
                    <div class="text-center">
                        @if ($store->logo)
                            <img class="p-3 img-fluid" src="{{ asset($store->logo) }}" alt="not  found">
                            <p>{{ $store->name }}</p>
                        @else
                            <h1 class="p-5">{{ $store->name }}</h1>
                        @endif
                        <p><i class="fa fa-map"></i>
                            {{ $store->address_line_1 }}
                            <br>
                            {{ $store->address_line_2 }}
                            <br>
                            {{ $store->city }} - {{ $store->postal_code }}, {{ $store->country }}
                        </p>
                        <i class="fa fa-phone"></i> {{ $store->phone_number }}
                        <br>
                        <i class="fa fa-envelope"></i> {{ $store->email_address }}
                    </div>
                    <div class="border border-dark text-center mt-3">
                        <p class="p-0 m-0">{{ $store->receipt_header }}</p>
                    </div>
                    <div class="p-3">
                        Date: Wed 25 Jan 2023 01:28 AM
                        <br>
                        Sale No/Ref: 2
                        <br>
                        Customer: Walk-in Client
                        <br>
                        Sales Person: Admin

                        <table class="table table-sm mt-3">
                            <thead>
                                <tr>
                                    <th scope="col"><b>#</b></th>
                                    <th scope="col"><b>Description</b></th>
                                    <th scope="col"><b>Quantity</b></th>
                                    <th scope="col"><b>Price</b></th>
                                    <th scope="col"><b>Subtotal</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=1;$i<3;$i++)
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>{{ Str::random(3) }}</td>
                                        <td>{{ rand(1,9) }}</td>
                                        <td>{{ rand(1000,9999) }}</td>
                                        <td>{{ rand(10000,99999) }}</td>
                                    </tr>
                                @endfor
                                <tr class="border border-dark">
                                    <td colspan="2" class="text-center"><b>Total Items</b></td>
                                    <td class="text-center"><b>114</b></td>
                                    <td class="text-center"><b>Total</b></td>
                                    <td><b>4909</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end"><b>Order Tax</b></td>
                                    <td><b>8980</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end"><b>Tax</b></td>
                                    <td><b>33</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end"><b>Rounding</b></td>
                                    <td><b>1</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end"><b>Grand Total</b></td>
                                    <td><b>8900</b></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center mb-3">
                            {!! DNS1D::getBarcodeSVG('2023010100776', 'C39',1,40,'black', true) !!}
                        </div>
                        <div class="border border-dark text-center">
                            <p class="p-0 m-0">{{ $store->receipt_footer }}</p>
                        </div>
                        <hr>
                        <div class="d-flex">
                            Developed By: Shohan, 01834833973
                            {!! DNS2D::getBarcodeHTML('Shohan', 'QRCODE',3,3) !!}
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->
    @else
    <div class="col-xl-12">
        @include('backend.inc.alert.no_permission')
    </div>
    @endcan
</div>
@endsection
