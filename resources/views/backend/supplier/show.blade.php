@extends('layouts.dashboard')

@section('supplier.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'supplier' => 'supplier.index',
            $supplier->name => '',
        ],
        'fontawsome' => 'fas fa-user-tie'
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    @can ('can manage supplier')
    <!--begin::Col-->
    <div class="col-xl-6 offset-xl-3">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title border-bottom">
                    <span class="card-label fw-bolder fs-3 mb-1">
                        Supplier Details - {{ $supplier->name }}
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
                                <td><b>Supplier Name</b></td>
                                <td>{{ $supplier->name ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Supplier Phone Number</b></td>
                                <td>{{ $supplier->phone_number ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Supplier Email Address</b></td>
                                <td>{{ $supplier->email_address ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Supplier Custom Field 1</b></td>
                                <td>{{ $supplier->custom_field_1 ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Supplier Custom Field 2</b></td>
                                <td>{{ $supplier->custom_field_2 ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Supplier Custom Field 3</b></td>
                                <td>{{ $supplier->custom_field_3 ?? "-" }}</td>
                            </tr>
                            <tr>
                                <td><b>Supplier Created At</b></td>
                                <td>{{ $supplier->created_at ?? "-" }}</td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
                <div class="text-center">
                    <a href="{{ route('supplier.index') }}" class="btn btn-info mb-5">Back To Suppliers List</a>
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
