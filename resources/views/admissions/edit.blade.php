@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Edit Admissions</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::model($admissions, ['route' => ['admissions.update', $admissions->student_id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

        <div class="modal-body">

            <!-- Roll No Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('roll_no', 'Roll No:') !!}
                {!! Form::text('roll_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- First Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('first_name', 'First Name:') !!}
                {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Last Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('last_name', 'Last Name:') !!}
                {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Father Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('father_name', 'Father Name:') !!}
                {!! Form::text('father_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Father Phone Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('father_phone', 'Father Phone:') !!}
                {!! Form::text('father_phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Mother Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('mother_name', 'Mother Name:') !!}
                {!! Form::text('mother_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Gender Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('gender', 'Gender:') !!}
                {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Dob Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('dob', 'Dob:') !!}
                {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
            </div>

            @push('page_scripts')
            <script type="text/javascript">
                $('#dob').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: true,
                    sideBySide: true
                })
            </script>
            @endpush

            <!-- Email Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Phone Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Address Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Current Address Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('current_address', 'Current Address:') !!}
                {!! Form::textarea('current_address', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Nationality Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nationality', 'Nationality:') !!}
                {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Status Field -->
            <div class="form-group col-sm-6">
                <div class="form-check">
                    {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
                    {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
                    {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
                </div>
            </div>


            <!-- Date Registered Field -->
            <input type="hidden" name="date_registered" id="date_registered" value="{{date('Y-m-d')}}" required />

            <!-- User Id Field -->
            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}" required />

            <!-- Class Id Field -->
            <div class="form-group col-sm-6">
                <!-- {!! Form::label('class_id', 'Class Id:') !!} -->
                <!-- {!! Form::number('class_id', null, ['class' => 'form-control']) !!} -->
                <select class="form-control" name="class_id" id="class_id">
                    <option value="0" disabled="true">Select Class...</option>
                    @foreach($classes as $class)
                    <option value="{{$class->class_id}}">{{$class->class_name}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Batch Id Field -->
            <div class="form-group col-sm-6">
                <select class="form-control" name="batch_id" id="batch_id">
                    <option value="0" disabled="true">Select Batch...</option>
                    @foreach($batches as $batch)
                    <option value="{{$batch->batch_id}}">{{$batch->batch}}</option>
                    <!-- <option value="{{$batch->batch_id}}" {{$batch->batch_id == $admissions->batch_id ? 'selected' : ''}}>{{$batch->batch}}</option> -->
                    @endforeach
                </select>
            </div>

            <!-- Image Field -->
            <div class="form-group">
                {!! Html::image('images/students/'.$admissions->image, null, ['class' => 'student_image', 'id' => 'show_image', 'style' => 'height: 120px; width: 100px;']) !!}
                <input type="file" name="image" id="image" accept="image/x-png, image/png, image/jpg, image/jpeg" style="display: none;" />
                <input type="button" name="browse_file" id="browse_file" value="Choose Image" />
            </div>

            <input type="hidden" name="username" id="username" value="{{ sprintf('%010b', $student_id) }}" required />
            <input type="hidden" name="password" id="password" value="{{ sprintf('%010b', $student_id) }}" required />


        </div>
        <div class="modal-footer">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('admissions.index') }}" class="btn btn-default">Cancel</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection

@push('page_scripts')
<script type="text/javascript">
    $('#browse_file').on('click', function() {
        $('#image').click()
    })
    $('#image').on('change', function(e) {
        showFile(this, '#show_image')
    })

    function showFile(fileInput, img, showName) {
        if (fileInput.files[0]) {
            var reader = new FileReader()
            reader.onload = function(e) {
                $(img).attr('src', e.target.result)
            }
            reader.readAsDataURL(fileInput.files[0])
        }
        $(showName).text(fileInput.files[0].name)
    }
</script>
@endpush