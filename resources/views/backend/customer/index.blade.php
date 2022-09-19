@extends('layouts.dashboard')

@section('customer.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'Customer' => ''
        ]
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    @can ('can manage customer')
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::List Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">
                    Add Subcategory
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                @if (session('subcategory_status'))
                    <div class="alert alert-success">{{ session('subcategory_status') }}</div>
                @endif
                <!--begin::Form-->
                <form method="POST" action="{{ route('customer.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold">Customer Name</h6>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name">
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold required">Customer Phone Number</h6>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
                            </div>
                            @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold">Customer Email Address</h6>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email_address">
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md-6">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold">Customer Address</h6>
                            </label>
                            <div class="input-group">
                                <textarea name="address" class="form-control" rows="2"></textarea>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-6">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold">Tags</h6>
                            </label>
                            <div class="input-group">
                                <textarea name="tags" class="form-control" rows="2"></textarea>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <button type="submit" class="btn btn-success mt-5">Add Customer</button>
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
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Customer List</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>SL No.</th>
                                <th>Customer Name</th>
                                <th>Customer Phone Number</th>
                                <th>Customer Email Address</th>
                                <th>Customer Address</th>
                                <th>Tags</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @forelse ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                    <td>{{ $customer->email_address }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->tags }}</td>

                                    <td>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fa fa-pen"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="50">
                                        <div class="alert alert-danger">No Category to Show</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                    <div class="my-5">
                        {{-- {{ $users->links() }} --}}
                    </div>
                </div>
                <!--end::Table container-->
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
