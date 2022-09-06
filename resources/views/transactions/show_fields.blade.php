<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $transactions->student_id }}</p>
</div>

<!-- Fee Id Field -->
<div class="col-sm-12">
    {!! Form::label('fee_id', 'Fee Id:') !!}
    <p>{{ $transactions->fee_id }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $transactions->user_id }}</p>
</div>

<!-- Paid Field -->
<div class="col-sm-12">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $transactions->paid }}</p>
</div>

<!-- Transaction Date Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    <p>{{ $transactions->transaction_date }}</p>
</div>

<!-- Remarks Field -->
<div class="col-sm-12">
    {!! Form::label('remarks', 'Remarks:') !!}
    <p>{{ $transactions->remarks }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $transactions->description }}</p>
</div>

