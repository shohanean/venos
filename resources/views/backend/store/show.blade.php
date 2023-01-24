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
                {{ $store }}
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
                                <td><b>Store Phone Number</b></td>
                                <td>{{ $store->phone_number ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Store Email Address</b></td>
                                <td>{{ $store->email_address ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>store Custom Field 1</b></td>
                                <td>{{ $store->custom_field_1 ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>store Custom Field 2</b></td>
                                <td>{{ $store->custom_field_2 ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>store Custom Field 3</b></td>
                                <td>{{ $store->custom_field_3 ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>store Created At</b></td>
                                <td>{{ $store->created_at ?? "-" }}</td>
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
                <div class="bg-secondary m-auto" style="width: 332.60px">
                    <div class="text-center">
                        <img class="img-fluid" src="https://sumashtech.com/_nuxt/img/SUMASHLOGO.8dd4226.png" alt="not  found">
                        <p>{{ $store->name }}</p>
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
                                @for ($i=1;$i<10;$i++)
                                    <tr>
                                        <th scope="row">{{ $i }}</th>
                                        <td>{{ Str::random(3) }}</td>
                                        <td>{{ rand(1,9) }}</td>
                                        <td>{{ rand(1000,9999) }}</td>
                                        <td>{{ rand(10000,99999) }}</td>
                                    </tr>
                                @endfor
                                <tr>
                                    <td colspan="2" class="text-center"><b>Total Items</b></td>
                                    <td><b>114</b></td>
                                    <td><b>Total</b></td>
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
                        {{-- <h1>{{ $store->receipt_header }}</h1> --}}
                        <div class="border border-dark text-center">
                            <p class="p-0 m-0">{{ $store->receipt_footer }}</p>
                            <p class="p-0 m-0">Created By: Shohan Hossain Ean</p>
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
