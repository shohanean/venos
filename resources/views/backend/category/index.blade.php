@extends('layouts.dashboard')

@section('category.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'category & subcategory' => ''
        ]
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::List Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">
                    Add Category
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                @if(session('status'))
                    @if (isset(session('status')['added']))
                        <div class="alert alert-success">
                            <p>Category Added Successfully</p>
                            @foreach (session('status')['added'] as $added)
                                <li>{{ $added }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if (isset(session('status')['exists']))
                        <div class="alert alert-danger">
                            <p>Category Already Exists</p>
                            @foreach (session('status')['exists'] as $exists)
                                <li>{{ $exists }}</li>
                            @endforeach
                        </div>
                    @endif
                @endif
                <!--begin::Form-->
                <form method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <label>
                            <h5 class="font-size-lg text-dark font-weight-bold">Category Name</h5>
                            <p>You can add multiple at a time by seperating with comma (,)</p>
                        </label>
                        <select id="category_name" name="category_name[]" class="form-control @error('category_name') is-invalid @enderror" multiple="multiple"></select>
                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <button type="submit" class="btn btn-success">Add Category</button>
                    </div>
                    <!--end::Input group-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Body-->
        </div>
        <!--end:List Widget 3-->
    </div>
    <div class="col-xl-6">
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
                <form method="POST" action="{{ route('subcategory.store') }}">
                    @csrf
                    <!--begin::Input group-->
                    <label>
                        <h5 class="font-size-lg text-dark font-weight-bold">Category Name</h5>
                    </label>
                    <div class="input-group">
                        <select id="category_choose_dropdown" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                            <option value="">-Select One Category-</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="input-group my-5">
                        <label>
                            <h5 class="font-size-lg text-dark font-weight-bold">Subcategory Name</h5>
                            <p>You can add multiple at a time by seperating with comma (,)</p>
                        </label>
                        <select id="subcategory_name" name="subcategory_name[]" class="form-control @error('subcategory') is-invalid @enderror" multiple="multiple"></select>
                        @error('subcategory')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <button type="submit" class="btn btn-success">Add Subcategory</button>
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
                    <span class="card-label fw-bolder fs-3 mb-1">Category & Subcategory</span>
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
                                <th>Category Name</th>
                                <th>Category Added By</th>
                                <th>Subcategory</th>
                                <th>Category Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->user->name }}</td>
                                    <td>
                                        @forelse ($category->subcategory as $subcat)
                                        <span class="badge badge-light-success text-dark fw-bold my-1">
                                            <i class="fa fa-tag"></i>&nbsp;{{ $subcat->subcategory_name }}
                                        </span>
                                        @empty
                                        <i class="fa fa-stop text-danger"></i> There is no subcategory under this category
                                        @endforelse
                                    </td>
                                    <td>{{ $category->slug }}</td>
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
</div>
@endsection
@section('footer_scripts')
<script>
    $(document).ready(function() {
        $("#category_name").select2({
            tags: true,
            tokenSeparators: [',']
        });
        $("#subcategory_name").select2({
            tags: true,
            tokenSeparators: [',']
        });
        // $('#category_choose_dropdown').select2();
    });

</script>
@endsection
