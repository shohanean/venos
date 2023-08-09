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
    <a class="btn btn-warning" href="{{ route('product.create') }}">Add New Product</a>
    <p>{{ $products }}</p>
@endsection
