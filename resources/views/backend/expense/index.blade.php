@extends('layouts.dashboard')

@section('expense_management')
show here
@endsection

@section('expense.index')
active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'expense' => ''
        ],
        'fontawsome' => 'fas fa-money-bill'
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    @can ('can manage warehouse')
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::List Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">
                    Add New Expense
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <!--begin::Form-->
                <form method="POST" action="{{ route('expensecategory.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold required">Date</h6>
                            </label>
                            <div class="input-group">
                                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                            </div>
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold required">Expense Title</h6>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                            </div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold required">Store/Warehouse Name (shohan)</h6>
                            </label>
                            <div class="input-group">
                                <select class="form-select" name="faka1">
                                    <option value="">-Select One Store/Warehouse Name-</option>
                                    @foreach ($stores as $store)
                                        <option value="">{{ $store->name }} (Store)</option>
                                    @endforeach
                                    @foreach ($warehouses as $warehouse)
                                        <option value="">{{ $warehouse->name }} (Warehouse)</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('name1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold required">Expense Category Name</h6>
                            </label>
                            <div class="input-group">
                                <select class="form-select" name="faka">
                                    <option value="">- Select One Expense Category Name -</option>
                                    @foreach ($expense_categories as $expense_category)
                                        <option value="">{{ $expense_category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('faka')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold required">Expense Amount</h6>
                            </label>
                            <div class="input-group">
                                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}">
                            </div>
                            @error('amount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <!--end::Input group-->
                        </div>
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold">Details</h6>
                            </label>
                            <div class="input-group">
                                <textarea name="details" class="form-control" rows="1"></textarea>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <!--begin::Input group-->
                            <label>
                                <h6 class="font-size-lg text-dark font-weight-bold">&nbsp;</h6>
                            </label>
                            <div class="input-group">
                                <button type="submit" class="form-control btn btn-success">Add Expense</button>
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
                        {{-- Expense Category List <span class="badge bg-success">{{ $expense_categories->count() }}</span> --}}
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
                                <th>Expense Category Name</th>
                                <th>Added By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            {{-- @forelse ($expense_categories as $expense_category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $expense_category->name ?? "-" }}</td>
                                    <td>
                                        <span class="badge bg-secondary text-dark">{{ $expense_category->user->name }}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{ route('expensecategory.destroy', $expense_category->id) }}" method="POST">
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
                                        <div class="alert alert-danger">No Expense Category to Show</div>
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
