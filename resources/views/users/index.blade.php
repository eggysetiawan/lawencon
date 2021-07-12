@extends('layouts.app',[
    'page' => 'Management User',
    'title' => 'Management User',
])

@section('breadcrumb')
<li class="breadcrumb-item active">Management User</li>

@endsection
@section('content')


<div class="d-flex justify-content-center">
<div class="col-md-10">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $tableHeader ?? 'Table User' }}</h3>


        </div>

        <div class="card-body table-responsive ">
            {!! $dataTable->table([
'class' => 'table table-centered table-striped dt-responsive
            nowrap w-100',
'id' => 'user-table',
]) !!}
        </div>
        <!-- /.card-header -->

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

    </div>



@endsection
@push('script')
    {!! $dataTable->scripts() !!}
@endpush
