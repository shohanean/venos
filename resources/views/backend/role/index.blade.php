@extends('layouts.dashboard')

@section('user_management')
    here show
@endsection

@section('role.index')
    active border-start border-3
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'roles' => 'role.index',
        ],
    ])
@endsection

@section('content')
    @livewire('addrole')
@endsection
