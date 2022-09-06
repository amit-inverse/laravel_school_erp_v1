@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Classes</h1>
            </div>
            <div class="col-sm-6">
                <!-- <a class="btn btn-primary float-right" href="{{ route('classes.create') }}">
                    Add New
                </a> -->
                <a data-toggle="modal" data-target="#class-add-modal" class="btn btn-secondary float-right">
                    <i class="fa fa-plus"></i> Add New Class
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('flash::message')

    <!-- for modal...  -->
    @include('adminlte-templates::common.errors')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('classes.table')

            <!-- for modal...  -->
            {!! Form::open(['route' => 'classes.store']) !!}
            @include('classes.fields')
            {!! Form::close() !!}

            <div class="card-footer clearfix">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>

@endsection