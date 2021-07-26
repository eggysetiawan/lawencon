@extends('layouts.app',[
'page' => 'Edit Product',
'title' => 'Edit Product'
])

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('products.connect') }}">Product</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <style>
        .amount:out-of-range {
            border-color: #dc3545;
            padding-right: 2.25rem;
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e);
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
        }

    </style>

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit {{ $product->name }}</div>

                <form action="{{ route('products.update', $product->id) }}" method="post" autocomplete="off">
                    @csrf
                    @method('patch')
                    @include('products.partials._form-control')
                </form>
            </div>
        </div>
    </div>
@endsection
