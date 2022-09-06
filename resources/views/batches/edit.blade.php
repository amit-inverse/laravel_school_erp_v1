@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Edit Batches</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::model($batches, ['route' => ['batches.update', $batches->batch_id], 'method' => 'patch']) !!}

        <div class="modal-body">
            <!-- Batch Field -->
            <!-- <div class="form-group col-sm-6"> -->
            <div class="form-group">
                {!! Form::label('batch', 'Batch:') !!}
                {!! Form::text('batch', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Update Batch', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection