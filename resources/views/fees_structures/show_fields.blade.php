<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $feesStructures->course_id }}</p>
</div>

<!-- Level Id Field -->
<div class="col-sm-12">
    {!! Form::label('level_id', 'Level Id:') !!}
    <p>{{ $feesStructures->level_id }}</p>
</div>

<!-- Admission Fees Field -->
<div class="col-sm-12">
    {!! Form::label('admission_fees', 'Admission Fees:') !!}
    <p>{{ $feesStructures->admission_fees }}</p>
</div>

<!-- Semester Fees Field -->
<div class="col-sm-12">
    {!! Form::label('semester_fees', 'Semester Fees:') !!}
    <p>{{ $feesStructures->semester_fees }}</p>
</div>

