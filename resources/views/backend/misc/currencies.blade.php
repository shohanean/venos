@extends('layouts.dashboard')

@section('currency.index')
    active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'currency' => '',
        ],
        'fontawsome' => 'fas fa-dollar-sign',
    ])
@endsection

@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @can('can manage Currency')
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Add New Currency
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('currencies.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Currency Name</h6>
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
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Currency Code</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('code') is-invalid @enderror"
                                            name="code" value="{{ old('code') }}">
                                    </div>
                                    @error('code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Currency Symbol</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('symbol') is-invalid @enderror"
                                            name="symbol" value="{{ old('symbol') }}">
                                    </div>
                                    @error('symbol')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="input-group mb-5">
                                <button type="submit" class="btn btn-success mt-5">Add Currency</button>
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
                                Currency List <span class="badge bg-success">{{ $currencies->count() }}</span>
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
                                        <th>Currency Name</th>
                                        <th>Currency Code</th>
                                        <th>Currency Symbol</th>
                                        <th>Currency Added</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @forelse ($currencies as $currency)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $currency->name ?? '-' }}</td>
                                            <td>{{ $currency->code ?? '-' }}</td>
                                            <td>{{ $currency->symbol ?? '-' }}</td>
                                            <td>{{ $currency->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="50">
                                                <div class="alert alert-danger">No Currency to Show</div>
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
