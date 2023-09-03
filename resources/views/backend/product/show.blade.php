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
                <div class="card card-flush mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h2 class="mb-1">
                                @if ($product->stock_alert >= $product->inventory->where('status', 'received')->sum('quantity'))
                                    <i class="fa fa-2x fa-exclamation-triangle text-danger"></i>
                                @endif
                                Product Details
                            </h2>
                            <div class="fs-6 fw-bold text-muted">{{ $product->name }}</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_task">
                                <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z"
                                            fill="currentColor" />
                                        <rect x="11" y="19" width="10" height="2" rx="1"
                                            transform="rotate(-90 11 19)" fill="currentColor" />
                                        <rect x="7" y="13" width="10" height="2" rx="1"
                                            fill="currentColor" />
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Add Task</button>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column">
                        <div class="row mb-5">
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->code }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Code
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->name }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Name
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->category->category_name }} <i class="fa fa-tag"></i>
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Category
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->subcategory_id }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Subcategory
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->unit->name }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Unit
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->brand->name }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Brand
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->stock_alert }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Stock Alert
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->inventory->where('status', 'received')->sum('quantity') }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Total Available Quantity
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->created_at->diffForHumans() }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Added At
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            {{ $product->updated_at->diffForHumans() }}
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Last Updated At
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <div class="fw-bold ms-5">
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">
                                            @if ($product->deleted_at)
                                                <span class="badge bg-danger">Deactivated</span>
                                            @else
                                                <span class="badge bg-success">Active</span>
                                            @endif
                                        </a>
                                        <div class="fs-7 text-muted">
                                            Status
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="card bg-light">
                                    <div class="card-body p-3">
                                        <u>Description:</u>
                                        <br>
                                        {{ $product->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-12 m-0">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Available Inventory of "{{ $product->name }}"
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-row-dashed">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4 rounded-start">Supplier Name</th>
                                        <th>Product Cost</th>
                                        <th>Product Price</th>
                                        <th>Tax Type</th>
                                        <th>Order Tax (%)</th>
                                        <th>Warehouse</th>
                                        <th>Status</th>
                                        <th class="rounded-end">Available Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product->inventory as $inventory)
                                        <tr>
                                            <td class="ps-4">{{ $inventory->supplier->name }}</td>
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
                                            <td>{{ Str::title($inventory->tax_type) }}</td>
                                            <td>{{ $inventory->order_tax }}%</td>
                                            <td>
                                                {{ $inventory->warehouse->name }}
                                                <br>
                                                <i class="fa fa-map-pin"></i> {{ $inventory->warehouse->address }}
                                            </td>
                                            <td>
                                                <span
                                                    class="badge text-dark
                                                @if ($inventory->status == 'received') bg-success
                                                @elseif ($inventory->status == 'pending')
                                                    bg-warning
                                                @else
                                                    bg-info @endif
                                                ">{{ Str::title($inventory->status) }}</span>
                                            </td>
                                            <td>{{ $inventory->quantity }}</td>
                                        </tr>
                                    @empty
                                        <tr class="text-center text-danger">
                                            <td colspan="50">There is no inventory of this product</td>
                                        </tr>
                                    @endforelse
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
