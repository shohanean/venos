@extends('layouts.dashboard')

@section('supplier.index')
    active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'supplier' => '',
        ],
        'fontawsome' => 'fas fa-user-tie',
    ])
@endsection

@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @can('can manage supplier')
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Add New Supplier
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('supplier.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Supplier Name</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Supplier Phone Number</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                            name="phone_number" value="{{ old('phone_number') }}">
                                    </div>
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Supplier Email Address</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="email_address"
                                            value="{{ old('email_address') }}">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Supplier Custom Field 1</h6>
                                    </label>
                                    <div class="input-group">
                                        <textarea name="custom_field_1" class="form-control" rows="2">{{ old('custom_field_1') }}</textarea>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Supplier Custom Field 2</h6>
                                    </label>
                                    <div class="input-group">
                                        <textarea name="custom_field_2" class="form-control" rows="2">{{ old('custom_field_2') }}</textarea>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Supplier Custom Field 3</h6>
                                    </label>
                                    <div class="input-group">
                                        <textarea name="custom_field_3" class="form-control" rows="2">{{ old('custom_field_3') }}</textarea>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="input-group mb-5">
                                <button type="submit" class="btn btn-success mt-5">Add Supplier</button>
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
                            <span class="card-label fw-bolder fs-3 mb-1">
                                Supplier List <span class="badge bg-success">{{ $suppliers->count() }}</span>
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
                                        <th>Supplier Name</th>
                                        <th>Supplier Phone Number</th>
                                        <th>Supplier Email Address</th>
                                        <th>Supplier Added</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @forelse ($suppliers as $supplier)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $supplier->name ?? '-' }}</td>
                                            <td>{{ $supplier->phone_number ?? '-' }}</td>
                                            <td>{{ $supplier->email_address ?? '-' }}</td>
                                            <td>{{ $supplier->created_at->diffForHumans() }}</td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <form action="{{ route('supplier.destroy', $supplier->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        <a href="{{ route('supplier.show', $supplier->id) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="fa fa-file"></i>
                                                        </a>
                                                    </form>
                                                </div>

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
