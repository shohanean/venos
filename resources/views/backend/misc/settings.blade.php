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
                    <div class="card-header border-0 d-block py-5">
                        <h3 class="card-title fw-bolder text-dark d-block">
                            <span>Change Settings</span>
                            @if (setting_last_changed())
                                <span class="badge bg-primary float-end">Last Changed:
                                    {{ setting_last_changed()->diffForHumans() }}</span>
                            @endif
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Company Name</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="company_name"
                                            value="{{ setting('company_name') }}">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Company Phone</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="company_phone"
                                            value="{{ setting('company_phone') }}">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Default Email Address</h6>
                                    </label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="default_email_address"
                                            value="{{ setting('default_email_address') }}">
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Currency</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select" name="currency">
                                            @foreach ($currencies as $currency)
                                                <option value="{{ $currency->id }}"
                                                    {{ setting('currency') == $currency->id ? 'selected' : '' }}>
                                                    {{ $currency->name . ' - ' . $currency->code . '[' . $currency->symbol . ']' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Date Format</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select" name="date_format">
                                            @foreach ($date_formats as $date_format)
                                                <option {{ setting('date_format') == $date_format->pattern ? 'selected' : '' }}
                                                    value="{{ $date_format->pattern }}">
                                                    {{ ($date_format->pattern == 'diffForHumans') ? '25 minutes ago' : \Carbon\Carbon::now()->format($date_format->pattern) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold required">Time Format</h6>
                                    </label>
                                    <div class="input-group">
                                        <select class="form-select" name="time_format">
                                            <option {{ setting('time_format') == 'h' ? 'selected' : '' }} value="h">12
                                                Hour Clock</option>
                                            <option {{ setting('time_format') == 'H' ? 'selected' : '' }} value="H">24
                                                Hour Clock</option>
                                        </select>
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
                                        <textarea name="" class="form-control" rows="2">{{ old('receipt_header') }}</textarea>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="col-12 col-md-6">
                                    <!--begin::Input group-->
                                    <label>
                                        <h6 class="font-size-lg text-dark font-weight-bold">Receipt Footer</h6>
                                    </label>
                                    <div class="input-group">
                                        <textarea name="" class="form-control" rows="2">{{ old('receipt_footer') }}</textarea>
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
