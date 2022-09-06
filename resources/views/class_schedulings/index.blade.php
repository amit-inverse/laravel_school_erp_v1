@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Class Schedulings</h1>
            </div>
            <div class="col-sm-6">
                <!-- <a class="btn btn-primary float-right" href="{{ route('classSchedulings.create') }}">
                    Add New
                </a> -->
                <a data-toggle="modal" data-target="#class_scheduling-add-modal" class="btn btn-secondary float-right">
                    <i class="fa fa-plus"></i> Schedule New Class
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
            @include('class_schedulings.table')
            @include('class_schedulings.edit')
            @include('class_schedulings.show_fields')

            <!-- for modal...  -->
            {!! Form::open(['route' => 'classSchedulings.store']) !!}
            @include('class_schedulings.fields')
            {!! Form::close() !!}

            <div class="card-footer clearfix">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>

@endsection