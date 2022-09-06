@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Teachers</h1>
            </div>
            <div class="col-sm-6">
                <!-- <a class="btn btn-primary float-right" href="{{ route('teachers.create') }}">
                    Add New
                </a> -->
                <a data-toggle="modal" data-target="#teacher-add-modal" class="btn btn-secondary float-right">
                    <i class="fa fa-plus"></i> Add New Teacher
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
            @include('teachers.table')

            <!-- for modal...  -->
            <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('teachers.fields')
            </form>

            <div class="card-footer clearfix">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>

@endsection