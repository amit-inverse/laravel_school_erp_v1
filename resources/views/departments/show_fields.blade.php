<!-- Faculty Id Field -->
<div class="col-sm-12">
    {!! Form::label('faculty_id', 'Faculty Id:') !!}
    <p>{{ $departments->faculty_id }}</p>
</div>

<!-- Department Name Field -->
<div class="col-sm-12">
    {!! Form::label('department_name', 'Department Name:') !!}
    <p>{{ $departments->department_name }}</p>
</div>

<!-- Department Code Field -->
<div class="col-sm-12">
    {!! Form::label('department_code', 'Department Code:') !!}
    <p>{{ $departments->department_code }}</p>
</div>

<!-- Department Description Field -->
<div class="col-sm-12">
    {!! Form::label('department_description', 'Department Description:') !!}
    <p>{{ $departments->department_description }}</p>
</div>

<!-- Department Status Field -->
<div class="col-sm-12">
    {!! Form::label('department_status', 'Department Status:') !!}
    <p>{{ $departments->department_status }}</p>
</div>

