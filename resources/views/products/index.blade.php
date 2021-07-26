@extends('layouts.app',[
'page' => 'Product Page',
'title' => 'Product'
])

@section('breadcrumb')
    <li class="breadcrumb-item active">Product Page</li>
@endsection

@section('content')

    <div class="d-flex justify-content-center">



        <div class="col-md-10">

            <a href="{{ route('products.add') }}" class="btn btn-primary mb-4">Add Product</a>

            <form action="{{ route('products.search') }}" method="GET" class="d-inline">
                <button type="submit" class="btn btn-primary mb-4 float-right">Search</button>
                <input type="search" name="search" id="search" class="form-control col-md-4 mb-2 float-right"
                    autocomplete="off" placeholder="Pick a keyword.." value="{{ request('search') }}">
            </form>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $tableHeader ?? __('Product Table') }}</h3>


                </div>

                <div class="card-body table-responsive" style="overflow: none">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->cod }}</td>
                                    <td>{{ $product->amount }}</td>
                                    <td>{{ $product->date->format('Y-m-d') }}</td>
                                    <td>@include('products.partials.action')</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-header -->

                <!-- /.card-body -->
            </div>

            <div class="float-right">
                {{ $products->links() }}
            </div>
            <!-- /.card -->
        </div>

    </div>





@endsection
