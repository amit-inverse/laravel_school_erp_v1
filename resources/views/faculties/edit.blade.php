@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Edit Faculties</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::model($faculties, ['route' => ['faculties.update', $faculties->faculty_id], 'method' => 'patch']) !!}

        <div class="modal-body">

            <!-- Faculty Name Field -->
            <!-- <div class="form-group col-sm-6"> -->
            <div class="form-group">
                {!! Form::label('faculty_name', 'Faculty Name:') !!}
                {!! Form::text('faculty_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Faculty Code Field -->
            <!-- <div class="form-group col-sm-6"> -->
            <div class="form-group">
                {!! Form::label('faculty_code', 'Faculty Code:') !!}
                {!! Form::text('faculty_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Faculty Description Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('faculty_description', 'Faculty Description:') !!}
                {!! Form::textarea('faculty_description', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Faculty Status Field -->
            <div class="form-group col-sm-6">
                <div class="form-check">
                    {!! Form::hidden('faculty_status', 0, ['class' => 'form-check-input']) !!}
                    {!! Form::checkbox('faculty_status', '1', null, ['class' => 'form-check-input']) !!}
                    {!! Form::label('faculty_status', 'Faculty Status', ['class' => 'form-check-label']) !!}
                </div>
            </div>

        </div>
        <div class="modal-footer">
            {!! Form::submit('Update Faculty', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('faculties.index') }}" class="btn btn-default">Cancel</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection