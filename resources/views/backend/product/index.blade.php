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
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Product List</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Over {{ $products->count() }} Products</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                            title="" data-bs-original-title="Click to add a new product">
                            <a href="{{ route('product.create') }}" class="btn btn-sm btn-light btn-active-primary" >
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Add New Product</a>
                        </div>
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
