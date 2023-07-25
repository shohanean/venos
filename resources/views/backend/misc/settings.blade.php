@extends('layouts.dashboard')

@section('settings.index')
    active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'settings' => '',
        ],
        'fontawsome' => 'fa fa-cog',
    ])
@endsection

@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @can('can manage settings')
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::List Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Change Settings
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <!--begin::Form-->
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Currency</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select" name="">
                                            @foreach ($currencies as $currency)
                                                <option value="{{ $currency->id }}" {{ (setting('currency') == $currency->id) ? 'selected':'' }}>{{ $currency->name." - ".$currency->code."[".$currency->symbol."]" }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Currency</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select" name="">
                                            @foreach ($currencies as $currency)
                                                <option value="{{ $currency->id }}" {{ (setting('currency') == $currency->id) ? 'selected':'' }}>{{ $currency->name." - ".$currency->code."[".$currency->symbol."]" }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">settings Email Address</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email_address"
                                            value="{{ old('email_address') }}">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-md-6">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Receipt Header</h6>
                                    </label>
                                    <div class="input-group">
                                        <textarea name="receipt_header" class="form-control" rows="2">{{ old('receipt_header') }}</textarea>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-6">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Receipt Footer</h6>
                                    </label>
                                    <div class="input-group">
                                        <textarea name="receipt_footer" class="form-control" rows="2">{{ old('receipt_footer') }}</textarea>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="input-group mb-5">
                                <button type="submit" class="btn btn-success mt-5">Add settings</button>
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
        @else
            <div class="col-xl-12">
                @include('backend.inc.alert.no_permission')
            </div>
        @endcan
    </div>
@endsection
