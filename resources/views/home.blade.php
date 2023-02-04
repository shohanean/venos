@extends('layouts.dashboard')

@section('home')
    active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home'
        ],
        'fontawsome' => 'fa fa-home'
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Mixed Widget 14-->
        <div class="card card-xxl-stretch mb-5 mb-xl-8" style="background-color: #CBF0F4">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column mb-7">
                    <!--begin::Title-->
                    <p class="text-dark text-hover-primary fw-bolder fs-3 p-0 m-0">Summary</p>
                    <!--end::Title-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Row-->
                <div class="row g-0">
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-user-check fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ $users->total() }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Active Users</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-tasks fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ $roles }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Roles</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-lock fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ $permissions }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Permissions</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-list fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ total_categories() }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Categories</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-list-alt fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ $subcategories }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Subcategories</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fas fa-user-friends fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ total_customers() }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Customers</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fas fa-user-tie fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ total_suppliers() }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Suppliers</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fas fa-warehouse fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ total_warehouses() }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Warehouses</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fas fa-store fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ total_stores() }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Stores</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fas fa-money-bill fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">{{ App\Models\Currency::where('id', setting('currency'))->first()->symbol }}{{ $todays_expense }}</div>
                                <div class="fs-7 text-gray-600 fw-bold">Today's Expense</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-database fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">Null</div>
                                <div class="fs-7 text-gray-600 fw-bold">Backup</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-database fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">Null</div>
                                <div class="fs-7 text-gray-600 fw-bold">Backup</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-database fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">Null</div>
                                <div class="fs-7 text-gray-600 fw-bold">Backup</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-database fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">Null</div>
                                <div class="fs-7 text-gray-600 fw-bold">Backup</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-envelope fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">Null</div>
                                <div class="fs-7 text-gray-600 fw-bold">SMS</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px me-3">
                                <div class="symbol-label bg-white bg-opacity-50">
                                    <i class="fa fa-gift fa-2x"></i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bolder lh-1">Free</div>
                                <div class="fs-7 text-gray-600 fw-bold">Package</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
        </div>
        <!--end::Mixed Widget 14-->
    </div>
    <!--end::Col-->
</div>
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                    <i class="fonticon-incoming-call text-white fs-2qx lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6">
                        {{ $users->total() }}
                    </span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Total</span>
                        <span class="">Users</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                <!--begin::Progress-->
                <div class="fw-bold text-white py-2">
                    <span class="fs-1 d-block">In words</span>
                    <span class="opacity-50">
                        {{ Str::ucfirst(\NumberToWords\NumberToWords::transformNumber('en', $users->total())) }}
                    </span>
                </div>
                <!--end::Progress-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fonticon-outgoing-call text-white fs-2qx lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6">{{ $users->whereNotNull('email_verified_at')->count() }}</span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Verified</span>
                        <span class="">Users</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                <!--begin::Progress-->
                <div class="fw-bold text-white py-2">
                    <span class="fs-1 d-block">{{ Str::ucfirst(\NumberToWords\NumberToWords::transformNumber('en', 3)) }}</span>
                    <span class="opacity-50">Generated Leads</span>
                </div>
                <!--end::Progress-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Chart widget 36-->
        <div class="card card-flush overflow-hidden h-lg-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Performance</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                </h3>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                        <!--begin::Display range-->
                        <div class="text-gray-600 fw-bold">21 Jul 2022</div>
                        <!--end::Display range-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                        <span class="svg-icon svg-icon-1 ms-2 me-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor"></path>
                                <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor"></path>
                                <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Daterangepicker-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end p-0">
                <!--begin::Chart-->
                <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px; min-height: 315px;"><div id="apexchartszcnvnmr8" class="apexcharts-canvas apexchartszcnvnmr8 apexcharts-theme-light" style="width: 581.5px; height: 300px;"><svg id="SvgjsSvg1457" width="581.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1459" class="apexcharts-inner apexcharts-graphical" transform="translate(47.835205078125, 30)"><defs id="SvgjsDefs1458"><clipPath id="gridRectMaskzcnvnmr8"><rect id="SvgjsRect1464" width="530.664794921875" height="224.82" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzcnvnmr8"></clipPath><clipPath id="nonForecastMaskzcnvnmr8"></clipPath><clipPath id="gridRectMarkerMaskzcnvnmr8"><rect id="SvgjsRect1465" width="527.664794921875" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1470" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1471" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop><stop id="SvgjsStop1472" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop1473" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1479" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1480" stop-opacity="0.4" stop-color="rgba(80,205,137,0.4)" offset="0.15"></stop><stop id="SvgjsStop1481" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop1482" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1485" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1486" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1488" font-family="inherit" x="0" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1489"></tspan><title></title></text><text id="SvgjsText1491" font-family="inherit" x="29.092488606770836" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1492"></tspan><title></title></text><text id="SvgjsText1494" font-family="inherit" x="58.184977213541664" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1495"></tspan><title></title></text><text id="SvgjsText1497" font-family="inherit" x="87.27746582031249" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 88.2774658203125 239.32000732421875)"><tspan id="SvgjsTspan1498">9 AM</tspan><title>9 AM</title></text><text id="SvgjsText1500" font-family="inherit" x="116.36995442708333" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1501"></tspan><title></title></text><text id="SvgjsText1503" font-family="inherit" x="145.46244303385419" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1504"></tspan><title></title></text><text id="SvgjsText1506" font-family="inherit" x="174.55493164062503" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 175.554931640625 239.32000732421875)"><tspan id="SvgjsTspan1507">12 PM</tspan><title>12 PM</title></text><text id="SvgjsText1509" font-family="inherit" x="203.64742024739587" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1510"></tspan><title></title></text><text id="SvgjsText1512" font-family="inherit" x="232.7399088541667" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1513"></tspan><title></title></text><text id="SvgjsText1515" font-family="inherit" x="261.8323974609375" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 262.8323974609375 239.32000732421875)"><tspan id="SvgjsTspan1516">15 PM</tspan><title>15 PM</title></text><text id="SvgjsText1518" font-family="inherit" x="290.9248860677083" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1519"></tspan><title></title></text><text id="SvgjsText1521" font-family="inherit" x="320.01737467447913" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1522"></tspan><title></title></text><text id="SvgjsText1524" font-family="inherit" x="349.10986328124994" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 350.10986328125 239.32000732421875)"><tspan id="SvgjsTspan1525">18 PM</tspan><title>18 PM</title></text><text id="SvgjsText1527" font-family="inherit" x="378.20235188802076" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1528"></tspan><title></title></text><text id="SvgjsText1530" font-family="inherit" x="407.2948404947916" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1531"></tspan><title></title></text><text id="SvgjsText1533" font-family="inherit" x="436.3873291015624" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 437.3873291015625 239.32000732421875)"><tspan id="SvgjsTspan1534">19 PM</tspan><title>19 PM</title></text><text id="SvgjsText1536" font-family="inherit" x="465.4798177083332" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1537"></tspan><title></title></text><text id="SvgjsText1539" font-family="inherit" x="494.572306315104" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1540"></tspan><title></title></text><text id="SvgjsText1542" font-family="inherit" x="523.6647949218749" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan1543"></tspan><title></title></text></g></g><g id="SvgjsG1567" class="apexcharts-grid"><g id="SvgjsG1568" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1570" x1="0" y1="0" x2="523.664794921875" y2="0" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1571" x1="0" y1="36.97" x2="523.664794921875" y2="36.97" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1572" x1="0" y1="73.94" x2="523.664794921875" y2="73.94" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1573" x1="0" y1="110.91" x2="523.664794921875" y2="110.91" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1574" x1="0" y1="147.88" x2="523.664794921875" y2="147.88" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1575" x1="0" y1="184.85" x2="523.664794921875" y2="184.85" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1576" x1="0" y1="221.82" x2="523.664794921875" y2="221.82" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1569" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1578" x1="0" y1="221.82" x2="523.664794921875" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1577" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1466" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1467" class="apexcharts-series" seriesName="InboundxCalls" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1474" d="M 0 221.82L 0 135.55666666666667C 10.18237101236979 135.55666666666667 18.910117594401044 98.58666666666667 29.092488606770832 98.58666666666667C 39.27485961914062 98.58666666666667 48.00260620117187 98.58666666666667 58.184977213541664 98.58666666666667C 68.36734822591146 98.58666666666667 77.0950948079427 147.88 87.2774658203125 147.88C 97.45983683268229 147.88 106.18758341471354 147.88 116.36995442708333 147.88C 126.55232543945311 147.88 135.28007202148436 184.85 145.46244303385416 184.85C 155.64481404622396 184.85 164.3725606282552 184.85 174.554931640625 184.85C 184.7373026529948 184.85 193.46504923502602 98.58666666666667 203.64742024739581 98.58666666666667C 213.8297912597656 98.58666666666667 222.55753784179686 98.58666666666667 232.73990885416666 98.58666666666667C 242.92227986653646 98.58666666666667 251.6500264485677 123.23333333333335 261.8323974609375 123.23333333333335C 272.0147684733073 123.23333333333335 280.7425150553385 123.23333333333335 290.9248860677083 123.23333333333335C 301.1072570800781 123.23333333333335 309.83500366210933 73.94 320.01737467447913 73.94C 330.1997456868489 73.94 338.9274922688802 73.94 349.10986328125 73.94C 359.2922342936198 73.94 368.019980875651 98.58666666666667 378.2023518880208 98.58666666666667C 388.3847229003906 98.58666666666667 397.11246948242183 98.58666666666667 407.29484049479163 98.58666666666667C 417.4772115071614 98.58666666666667 426.2049580891927 98.58666666666667 436.3873291015625 98.58666666666667C 446.5697001139323 98.58666666666667 455.2974466959635 147.88 465.4798177083333 147.88C 475.6621887207031 147.88 484.38993530273433 147.88 494.57230631510413 147.88C 504.7546773274739 147.88 513.4824239095052 172.52666666666667 523.664794921875 172.52666666666667C 523.664794921875 172.52666666666667 523.664794921875 172.52666666666667 523.664794921875 221.82M 523.664794921875 172.52666666666667z" fill="url(#SvgjsLinearGradient1470)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzcnvnmr8)" pathTo="M 0 221.82L 0 135.55666666666667C 10.18237101236979 135.55666666666667 18.910117594401044 98.58666666666667 29.092488606770832 98.58666666666667C 39.27485961914062 98.58666666666667 48.00260620117187 98.58666666666667 58.184977213541664 98.58666666666667C 68.36734822591146 98.58666666666667 77.0950948079427 147.88 87.2774658203125 147.88C 97.45983683268229 147.88 106.18758341471354 147.88 116.36995442708333 147.88C 126.55232543945311 147.88 135.28007202148436 184.85 145.46244303385416 184.85C 155.64481404622396 184.85 164.3725606282552 184.85 174.554931640625 184.85C 184.7373026529948 184.85 193.46504923502602 98.58666666666667 203.64742024739581 98.58666666666667C 213.8297912597656 98.58666666666667 222.55753784179686 98.58666666666667 232.73990885416666 98.58666666666667C 242.92227986653646 98.58666666666667 251.6500264485677 123.23333333333335 261.8323974609375 123.23333333333335C 272.0147684733073 123.23333333333335 280.7425150553385 123.23333333333335 290.9248860677083 123.23333333333335C 301.1072570800781 123.23333333333335 309.83500366210933 73.94 320.01737467447913 73.94C 330.1997456868489 73.94 338.9274922688802 73.94 349.10986328125 73.94C 359.2922342936198 73.94 368.019980875651 98.58666666666667 378.2023518880208 98.58666666666667C 388.3847229003906 98.58666666666667 397.11246948242183 98.58666666666667 407.29484049479163 98.58666666666667C 417.4772115071614 98.58666666666667 426.2049580891927 98.58666666666667 436.3873291015625 98.58666666666667C 446.5697001139323 98.58666666666667 455.2974466959635 147.88 465.4798177083333 147.88C 475.6621887207031 147.88 484.38993530273433 147.88 494.57230631510413 147.88C 504.7546773274739 147.88 513.4824239095052 172.52666666666667 523.664794921875 172.52666666666667C 523.664794921875 172.52666666666667 523.664794921875 172.52666666666667 523.664794921875 221.82M 523.664794921875 172.52666666666667z" pathFrom="M -1 295.76L -1 295.76L 29.092488606770832 295.76L 58.184977213541664 295.76L 87.2774658203125 295.76L 116.36995442708333 295.76L 145.46244303385416 295.76L 174.554931640625 295.76L 203.64742024739581 295.76L 232.73990885416666 295.76L 261.8323974609375 295.76L 290.9248860677083 295.76L 320.01737467447913 295.76L 349.10986328125 295.76L 378.2023518880208 295.76L 407.29484049479163 295.76L 436.3873291015625 295.76L 465.4798177083333 295.76L 494.57230631510413 295.76L 523.664794921875 295.76"></path><path id="SvgjsPath1475" d="M 0 135.55666666666667C 10.18237101236979 135.55666666666667 18.910117594401044 98.58666666666667 29.092488606770832 98.58666666666667C 39.27485961914062 98.58666666666667 48.00260620117187 98.58666666666667 58.184977213541664 98.58666666666667C 68.36734822591146 98.58666666666667 77.0950948079427 147.88 87.2774658203125 147.88C 97.45983683268229 147.88 106.18758341471354 147.88 116.36995442708333 147.88C 126.55232543945311 147.88 135.28007202148436 184.85 145.46244303385416 184.85C 155.64481404622396 184.85 164.3725606282552 184.85 174.554931640625 184.85C 184.7373026529948 184.85 193.46504923502602 98.58666666666667 203.64742024739581 98.58666666666667C 213.8297912597656 98.58666666666667 222.55753784179686 98.58666666666667 232.73990885416666 98.58666666666667C 242.92227986653646 98.58666666666667 251.6500264485677 123.23333333333335 261.8323974609375 123.23333333333335C 272.0147684733073 123.23333333333335 280.7425150553385 123.23333333333335 290.9248860677083 123.23333333333335C 301.1072570800781 123.23333333333335 309.83500366210933 73.94 320.01737467447913 73.94C 330.1997456868489 73.94 338.9274922688802 73.94 349.10986328125 73.94C 359.2922342936198 73.94 368.019980875651 98.58666666666667 378.2023518880208 98.58666666666667C 388.3847229003906 98.58666666666667 397.11246948242183 98.58666666666667 407.29484049479163 98.58666666666667C 417.4772115071614 98.58666666666667 426.2049580891927 98.58666666666667 436.3873291015625 98.58666666666667C 446.5697001139323 98.58666666666667 455.2974466959635 147.88 465.4798177083333 147.88C 475.6621887207031 147.88 484.38993530273433 147.88 494.57230631510413 147.88C 504.7546773274739 147.88 513.4824239095052 172.52666666666667 523.664794921875 172.52666666666667" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzcnvnmr8)" pathTo="M 0 135.55666666666667C 10.18237101236979 135.55666666666667 18.910117594401044 98.58666666666667 29.092488606770832 98.58666666666667C 39.27485961914062 98.58666666666667 48.00260620117187 98.58666666666667 58.184977213541664 98.58666666666667C 68.36734822591146 98.58666666666667 77.0950948079427 147.88 87.2774658203125 147.88C 97.45983683268229 147.88 106.18758341471354 147.88 116.36995442708333 147.88C 126.55232543945311 147.88 135.28007202148436 184.85 145.46244303385416 184.85C 155.64481404622396 184.85 164.3725606282552 184.85 174.554931640625 184.85C 184.7373026529948 184.85 193.46504923502602 98.58666666666667 203.64742024739581 98.58666666666667C 213.8297912597656 98.58666666666667 222.55753784179686 98.58666666666667 232.73990885416666 98.58666666666667C 242.92227986653646 98.58666666666667 251.6500264485677 123.23333333333335 261.8323974609375 123.23333333333335C 272.0147684733073 123.23333333333335 280.7425150553385 123.23333333333335 290.9248860677083 123.23333333333335C 301.1072570800781 123.23333333333335 309.83500366210933 73.94 320.01737467447913 73.94C 330.1997456868489 73.94 338.9274922688802 73.94 349.10986328125 73.94C 359.2922342936198 73.94 368.019980875651 98.58666666666667 378.2023518880208 98.58666666666667C 388.3847229003906 98.58666666666667 397.11246948242183 98.58666666666667 407.29484049479163 98.58666666666667C 417.4772115071614 98.58666666666667 426.2049580891927 98.58666666666667 436.3873291015625 98.58666666666667C 446.5697001139323 98.58666666666667 455.2974466959635 147.88 465.4798177083333 147.88C 475.6621887207031 147.88 484.38993530273433 147.88 494.57230631510413 147.88C 504.7546773274739 147.88 513.4824239095052 172.52666666666667 523.664794921875 172.52666666666667" pathFrom="M -1 295.76L -1 295.76L 29.092488606770832 295.76L 58.184977213541664 295.76L 87.2774658203125 295.76L 116.36995442708333 295.76L 145.46244303385416 295.76L 174.554931640625 295.76L 203.64742024739581 295.76L 232.73990885416666 295.76L 261.8323974609375 295.76L 290.9248860677083 295.76L 320.01737467447913 295.76L 349.10986328125 295.76L 378.2023518880208 295.76L 407.29484049479163 295.76L 436.3873291015625 295.76L 465.4798177083333 295.76L 494.57230631510413 295.76L 523.664794921875 295.76"></path><g id="SvgjsG1468" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1586" r="0" cx="0" cy="0" class="apexcharts-marker wqw9csm4t no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1476" class="apexcharts-series" seriesName="OutboundxCalls" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1483" d="M 0 221.82L 0 73.94C 10.18237101236979 73.94 18.910117594401044 24.646666666666704 29.092488606770832 24.646666666666704C 39.27485961914062 24.646666666666704 48.00260620117187 24.646666666666704 58.184977213541664 24.646666666666704C 68.36734822591146 24.646666666666704 77.0950948079427 61.616666666666674 87.2774658203125 61.616666666666674C 97.45983683268229 61.616666666666674 106.18758341471354 61.616666666666674 116.36995442708333 61.616666666666674C 126.55232543945311 61.616666666666674 135.28007202148436 86.26333333333335 145.46244303385416 86.26333333333335C 155.64481404622396 86.26333333333335 164.3725606282552 86.26333333333335 174.554931640625 86.26333333333335C 184.7373026529948 86.26333333333335 193.46504923502602 61.616666666666674 203.64742024739581 61.616666666666674C 213.8297912597656 61.616666666666674 222.55753784179686 61.616666666666674 232.73990885416666 61.616666666666674C 242.92227986653646 61.616666666666674 251.6500264485677 12.323333333333323 261.8323974609375 12.323333333333323C 272.0147684733073 12.323333333333323 280.7425150553385 12.323333333333323 290.9248860677083 12.323333333333323C 301.1072570800781 12.323333333333323 309.83500366210933 49.29333333333335 320.01737467447913 49.29333333333335C 330.1997456868489 49.29333333333335 338.9274922688802 49.29333333333335 349.10986328125 49.29333333333335C 359.2922342936198 49.29333333333335 368.019980875651 12.323333333333323 378.2023518880208 12.323333333333323C 388.3847229003906 12.323333333333323 397.11246948242183 12.323333333333323 407.29484049479163 12.323333333333323C 417.4772115071614 12.323333333333323 426.2049580891927 61.616666666666674 436.3873291015625 61.616666666666674C 446.5697001139323 61.616666666666674 455.2974466959635 61.616666666666674 465.4798177083333 61.616666666666674C 475.6621887207031 61.616666666666674 484.38993530273433 86.26333333333335 494.57230631510413 86.26333333333335C 504.7546773274739 86.26333333333335 513.4824239095052 86.26333333333335 523.664794921875 86.26333333333335C 523.664794921875 86.26333333333335 523.664794921875 86.26333333333335 523.664794921875 221.82M 523.664794921875 86.26333333333335z" fill="url(#SvgjsLinearGradient1479)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskzcnvnmr8)" pathTo="M 0 221.82L 0 73.94C 10.18237101236979 73.94 18.910117594401044 24.646666666666704 29.092488606770832 24.646666666666704C 39.27485961914062 24.646666666666704 48.00260620117187 24.646666666666704 58.184977213541664 24.646666666666704C 68.36734822591146 24.646666666666704 77.0950948079427 61.616666666666674 87.2774658203125 61.616666666666674C 97.45983683268229 61.616666666666674 106.18758341471354 61.616666666666674 116.36995442708333 61.616666666666674C 126.55232543945311 61.616666666666674 135.28007202148436 86.26333333333335 145.46244303385416 86.26333333333335C 155.64481404622396 86.26333333333335 164.3725606282552 86.26333333333335 174.554931640625 86.26333333333335C 184.7373026529948 86.26333333333335 193.46504923502602 61.616666666666674 203.64742024739581 61.616666666666674C 213.8297912597656 61.616666666666674 222.55753784179686 61.616666666666674 232.73990885416666 61.616666666666674C 242.92227986653646 61.616666666666674 251.6500264485677 12.323333333333323 261.8323974609375 12.323333333333323C 272.0147684733073 12.323333333333323 280.7425150553385 12.323333333333323 290.9248860677083 12.323333333333323C 301.1072570800781 12.323333333333323 309.83500366210933 49.29333333333335 320.01737467447913 49.29333333333335C 330.1997456868489 49.29333333333335 338.9274922688802 49.29333333333335 349.10986328125 49.29333333333335C 359.2922342936198 49.29333333333335 368.019980875651 12.323333333333323 378.2023518880208 12.323333333333323C 388.3847229003906 12.323333333333323 397.11246948242183 12.323333333333323 407.29484049479163 12.323333333333323C 417.4772115071614 12.323333333333323 426.2049580891927 61.616666666666674 436.3873291015625 61.616666666666674C 446.5697001139323 61.616666666666674 455.2974466959635 61.616666666666674 465.4798177083333 61.616666666666674C 475.6621887207031 61.616666666666674 484.38993530273433 86.26333333333335 494.57230631510413 86.26333333333335C 504.7546773274739 86.26333333333335 513.4824239095052 86.26333333333335 523.664794921875 86.26333333333335C 523.664794921875 86.26333333333335 523.664794921875 86.26333333333335 523.664794921875 221.82M 523.664794921875 86.26333333333335z" pathFrom="M -1 295.76L -1 295.76L 29.092488606770832 295.76L 58.184977213541664 295.76L 87.2774658203125 295.76L 116.36995442708333 295.76L 145.46244303385416 295.76L 174.554931640625 295.76L 203.64742024739581 295.76L 232.73990885416666 295.76L 261.8323974609375 295.76L 290.9248860677083 295.76L 320.01737467447913 295.76L 349.10986328125 295.76L 378.2023518880208 295.76L 407.29484049479163 295.76L 436.3873291015625 295.76L 465.4798177083333 295.76L 494.57230631510413 295.76L 523.664794921875 295.76"></path><path id="SvgjsPath1484" d="M 0 73.94C 10.18237101236979 73.94 18.910117594401044 24.646666666666704 29.092488606770832 24.646666666666704C 39.27485961914062 24.646666666666704 48.00260620117187 24.646666666666704 58.184977213541664 24.646666666666704C 68.36734822591146 24.646666666666704 77.0950948079427 61.616666666666674 87.2774658203125 61.616666666666674C 97.45983683268229 61.616666666666674 106.18758341471354 61.616666666666674 116.36995442708333 61.616666666666674C 126.55232543945311 61.616666666666674 135.28007202148436 86.26333333333335 145.46244303385416 86.26333333333335C 155.64481404622396 86.26333333333335 164.3725606282552 86.26333333333335 174.554931640625 86.26333333333335C 184.7373026529948 86.26333333333335 193.46504923502602 61.616666666666674 203.64742024739581 61.616666666666674C 213.8297912597656 61.616666666666674 222.55753784179686 61.616666666666674 232.73990885416666 61.616666666666674C 242.92227986653646 61.616666666666674 251.6500264485677 12.323333333333323 261.8323974609375 12.323333333333323C 272.0147684733073 12.323333333333323 280.7425150553385 12.323333333333323 290.9248860677083 12.323333333333323C 301.1072570800781 12.323333333333323 309.83500366210933 49.29333333333335 320.01737467447913 49.29333333333335C 330.1997456868489 49.29333333333335 338.9274922688802 49.29333333333335 349.10986328125 49.29333333333335C 359.2922342936198 49.29333333333335 368.019980875651 12.323333333333323 378.2023518880208 12.323333333333323C 388.3847229003906 12.323333333333323 397.11246948242183 12.323333333333323 407.29484049479163 12.323333333333323C 417.4772115071614 12.323333333333323 426.2049580891927 61.616666666666674 436.3873291015625 61.616666666666674C 446.5697001139323 61.616666666666674 455.2974466959635 61.616666666666674 465.4798177083333 61.616666666666674C 475.6621887207031 61.616666666666674 484.38993530273433 86.26333333333335 494.57230631510413 86.26333333333335C 504.7546773274739 86.26333333333335 513.4824239095052 86.26333333333335 523.664794921875 86.26333333333335" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskzcnvnmr8)" pathTo="M 0 73.94C 10.18237101236979 73.94 18.910117594401044 24.646666666666704 29.092488606770832 24.646666666666704C 39.27485961914062 24.646666666666704 48.00260620117187 24.646666666666704 58.184977213541664 24.646666666666704C 68.36734822591146 24.646666666666704 77.0950948079427 61.616666666666674 87.2774658203125 61.616666666666674C 97.45983683268229 61.616666666666674 106.18758341471354 61.616666666666674 116.36995442708333 61.616666666666674C 126.55232543945311 61.616666666666674 135.28007202148436 86.26333333333335 145.46244303385416 86.26333333333335C 155.64481404622396 86.26333333333335 164.3725606282552 86.26333333333335 174.554931640625 86.26333333333335C 184.7373026529948 86.26333333333335 193.46504923502602 61.616666666666674 203.64742024739581 61.616666666666674C 213.8297912597656 61.616666666666674 222.55753784179686 61.616666666666674 232.73990885416666 61.616666666666674C 242.92227986653646 61.616666666666674 251.6500264485677 12.323333333333323 261.8323974609375 12.323333333333323C 272.0147684733073 12.323333333333323 280.7425150553385 12.323333333333323 290.9248860677083 12.323333333333323C 301.1072570800781 12.323333333333323 309.83500366210933 49.29333333333335 320.01737467447913 49.29333333333335C 330.1997456868489 49.29333333333335 338.9274922688802 49.29333333333335 349.10986328125 49.29333333333335C 359.2922342936198 49.29333333333335 368.019980875651 12.323333333333323 378.2023518880208 12.323333333333323C 388.3847229003906 12.323333333333323 397.11246948242183 12.323333333333323 407.29484049479163 12.323333333333323C 417.4772115071614 12.323333333333323 426.2049580891927 61.616666666666674 436.3873291015625 61.616666666666674C 446.5697001139323 61.616666666666674 455.2974466959635 61.616666666666674 465.4798177083333 61.616666666666674C 475.6621887207031 61.616666666666674 484.38993530273433 86.26333333333335 494.57230631510413 86.26333333333335C 504.7546773274739 86.26333333333335 513.4824239095052 86.26333333333335 523.664794921875 86.26333333333335" pathFrom="M -1 295.76L -1 295.76L 29.092488606770832 295.76L 58.184977213541664 295.76L 87.2774658203125 295.76L 116.36995442708333 295.76L 145.46244303385416 295.76L 174.554931640625 295.76L 203.64742024739581 295.76L 232.73990885416666 295.76L 261.8323974609375 295.76L 290.9248860677083 295.76L 320.01737467447913 295.76L 349.10986328125 295.76L 378.2023518880208 295.76L 407.29484049479163 295.76L 436.3873291015625 295.76L 465.4798177083333 295.76L 494.57230631510413 295.76L 523.664794921875 295.76"></path><g id="SvgjsG1477" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1587" r="0" cx="0" cy="0" class="apexcharts-marker wbc4st8bp no-pointer-events" stroke="#50cd89" fill="#50cd89" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1469" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1478" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1580" x1="0" y1="0" x2="0" y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1581" x1="0" y1="0" x2="523.664794921875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1582" x1="0" y1="0" x2="523.664794921875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1583" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1584" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1585" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1588" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1589" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1544" class="apexcharts-yaxis" rel="0" transform="translate(17.835205078125, 0)"><g id="SvgjsG1545" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1547" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1548">120</tspan><title>120</title></text><text id="SvgjsText1550" font-family="inherit" x="20" y="68.57" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1551">105</tspan><title>105</title></text><text id="SvgjsText1553" font-family="inherit" x="20" y="105.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1554">90</tspan><title>90</title></text><text id="SvgjsText1556" font-family="inherit" x="20" y="142.51" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1557">75</tspan><title>75</title></text><text id="SvgjsText1559" font-family="inherit" x="20" y="179.48" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1560">60</tspan><title>60</title></text><text id="SvgjsText1562" font-family="inherit" x="20" y="216.45" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1563">45</tspan><title>45</title></text><text id="SvgjsText1565" font-family="inherit" x="20" y="253.42" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan1566">30</tspan><title>30</title></text></g></g><rect id="SvgjsRect1579" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1460" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 150px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                <!--end::Chart-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Chart widget 36-->
    </div>
    <!--end::Col-->
</div>
<div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::List Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">
                    Add Records
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                <!--begin::Form-->
                <form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon3">
                            <i class="las la-file-excel fs-1"></i>
                        </span>
                        <input type="file" class="form-control" name="import"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <button type="submit" class="btn btn-success btn-sm">Upload</button>
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
    <div class="col-xl-8">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">User Statistics</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Over {{ $users->count() }} members</span>
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
                                <th class="w-25px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check">
                                    </div>
                                </th>
                                <th class="min-w-200px">Authors</th>
                                <th class="min-w-150px">Company</th>
                                <th class="min-w-150px">Progress</th>
                                <th class="min-w-100px text-end">Actions</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="{{ Avatar::create($user->name)->toBase64() }}" alt="not found"/>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{ $user->name }}</a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">{{ $user->email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $user->updated_at->diffForHumans() }}</a>
                                        @isset($user->email_verified_at)
                                            <span class="badge badge-light-success fs-8 fw-bolder">Email Verified</span>
                                        @endisset
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                                                        <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                    <div class="my-5">
                        {{ $users->links() }}
                    </div>
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->
</div>
@endsection

@section('footer_scripts')

@endsection
