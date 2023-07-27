@extends('layouts.dashboard')

@section('profile.index')
    active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'profile overview' => 'profile.index',
            'change password' => '',
        ],
    ])
@endsection

@section('content')
    @livewire('profile.changepassword')
@endsection
