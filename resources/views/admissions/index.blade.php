@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Admissions</h1>
            </div>
            <div class="col-sm-6">
                <!-- <a class="btn btn-primary float-right" href="{{ route('admissions.create') }}">
                    Add New
                </a> -->
                <a data-toggle="modal" data-target="#admission-add-modal" class="btn btn-secondary float-right">
                    <i class="fa fa-plus"></i> New Admission
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
            @include('admissions.table')
            @include('admissions.show_fields')

            <!-- for modal...  -->
            <form action="{{route('admissions.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admissions.fields')
            </form>

            <div class="card-footer clearfix">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>

@endsection