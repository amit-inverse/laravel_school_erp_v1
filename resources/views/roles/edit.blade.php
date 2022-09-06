@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Edit Roles</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::model($roles, ['route' => ['roles.update', $roles->role_id], 'method' => 'patch']) !!}

        <div class="modal-body">
            <!-- Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Update Role', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection