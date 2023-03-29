@extends('layouts.dashboard')

@section('product_management')
show here
@endsection

@section('unit.index')
active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'unit' => ''
        ],
        'fontawsome' => 'fas fa-quote-right'
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    @can ('can manage unit')
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::List Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">
                    Add New Unit
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <!--begin::Form-->
                <form method="POST" action="{{ route('brand.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold required">Brand Name</h6>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-6">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold">&nbsp;</h6>
                            </label>
                            <div class="input-group">
                                <button type="submit" class="btn btn-success form-control">Add Brand</button>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
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
                    <span class="card-label fw-bolder fs-3 mb-1">
                        Brand List
                    </span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                @if (session('delete_success'))
                    <div class="alert alert-warning">{{ session('delete_success') }}</div>
                @endif
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>SL No.</th>
                                <th>Added By</th>
                                <th>Brand Name</th>
                                <th>QR Code</th>
                                <th>Product Count</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            {{-- @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img class="rounded-circle" src="{{ asset($brand->user->avatar) }}" alt="not found" width="50">
                                        <br>
                                        {{ $brand->user->name }}
                                    </td>
                                    <td>
                                        {{ $brand->name ?? "-" }}
                                    </td>
                                    <td>
                                        {!! DNS2D::getBarcodeHTML($brand->name, 'QRCODE',3,3) !!}
                                    </td>
                                    <td>###</td>
                                    <td>{{ $brand->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{ route('brand.destroy', $brand->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="50">
                                        <div class="alert alert-danger">No Brand to Show</div>
                                    </td>
                                </tr>
                            @endforelse --}}
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
