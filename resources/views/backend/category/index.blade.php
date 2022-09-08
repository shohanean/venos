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
                <!--begin::Form-->
                <form method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <label>
                            <h5 class="font-size-lg text-dark font-weight-bold">Category Name</h5>
                            <p>You can add multiple at a time by seperating with comma (,)</p>
                        </label>
                        <select id="category_name" name="category_name[]" class="form-control" multiple="multiple"></select>
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
                <!--begin::Form-->
                <form method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <!--begin::Input group-->
                    <label>
                        <h5 class="font-size-lg text-dark font-weight-bold">Category Name</h5>
                    </label>
                    <div class="input-group mb-5">
                        <select id="category_choose_dropdown" name="" class="form-select">
                            <option value="">-Select One Category-</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="input-group mb-5">
                        <label>
                            <h5 class="font-size-lg text-dark font-weight-bold">Subcategory Name</h5>
                            <p>You can add multiple at a time by seperating with comma (,)</p>
                        </label>
                        <select id="subcategory_name" name="category_name[]" class="form-control" multiple="multiple"></select>
                        @error('category_name')
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
                    <span class="card-label fw-bolder fs-3 mb-1">User Statistics</span>
                    {{-- <span class="text-muted mt-1 fw-bold fs-7">Over {{ $users->count() }} members</span> --}}
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
                                <th class="w-25px">asdasd</th>
                                <th class="min-w-200px">Authors</th>
                                <th class="min-w-150px">Company</th>
                                <th class="min-w-150px">Progress</th>
                                <th class="min-w-100px text-end">Actions</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->added_by }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>asdas</td>
                                    <td>asdas</td>
                                </tr>
                            @endforeach
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
