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
            'product' => '',
        ],
        'fontawsome' => 'fas fa-cubes',
    ])
@endsection

@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @can('can manage product')
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Tables Widget 9-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5 align-items-center">
                        <span class="card-label fw-bolder fs-3 mb-1">
                            Product List
                        </span>
                        <a class="btn btn-warning" href="{{ route('product.create') }}">Add New Product</a>
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
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $product->code }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group"
                                                    aria-label="Button group with nested dropdown">
                                                    <button
                                                        onclick="window.location.href='{{ route('product.show', $product->id) }}'"
                                                        class="btn btn-info">
                                                        <i class="fa fa-sticky-note"></i>
                                                        Details
                                                    </button>

                                                    <button
                                                        onclick="window.location.href='{{ route('product.edit', $product->id) }}'"
                                                        class="btn btn-dark">
                                                        <i class="fa fa-pen"></i>
                                                        Edit
                                                    </button>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button"
                                                            class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <li><a class="dropdown-item" href="#">Add with same
                                                                    supplier</a></li>
                                                            <li><a class="dropdown-item" href="#">Add with same
                                                                    supplier</a></li>
                                                            <li><a class="dropdown-item" href="#">Add with same
                                                                    supplier</a></li>
                                                            <li><a class="dropdown-item" href="#">Add with same
                                                                    supplier</a></li>
                                                            <li><a class="dropdown-item" href="#">Add with same
                                                                    supplier</a></li>
                                                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="50">
                                                <div class="alert alert-danger">No Expense to Show</div>
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
