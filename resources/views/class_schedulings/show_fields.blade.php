<div class="modal fade" id="class_scheduling-show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">View Scheduled Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <form action="{{route('classSchedulings.update', 'class_schedule_id')}}" method="post"> -->
            <!-- @csrf -->
            <!-- @method('PUT') -->
            <!-- <input type="hidden" name="class_schedule_id" id="class_schedule_id" /> -->

            <div class="modal-body">

                <!-- Course Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="course_id" id="course_id">
                </div>

                <!-- Level Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::number('level_id', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="level_id" id="level_id">
                </div>

                <!-- Shift Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('shift_id', 'Shift Id:') !!}
    {!! Form::number('shift_id', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="shift_id" id="shift_id">
                </div>

                <!-- Classroom Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('classroom_id', 'Classroom Id:') !!}
    {!! Form::number('classroom_id', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="classroom_id" id="classroom_id">
                </div>

                <!-- Batch Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('batch_id', 'Batch Id:') !!}
    {!! Form::number('batch_id', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="batch_id" id="batch_id">
                </div>

                <!-- Day Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('day_id', 'Day Id:') !!}
    {!! Form::number('day_id', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="day_id" id="day_id">
                </div>

                <!-- Time Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('time_id', 'Time Id:') !!}
    {!! Form::number('time_id', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="time_id" id="time_id">
                </div>

                <!-- Teacher Id Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    {!! Form::label('teacher_id', 'Teacher Id:') !!}
                    {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Start Time Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="start_time" id="start_time" autocomplete="off" />
                </div>

                <!-- End Time Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    <!-- {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control']) !!} -->
                    <input type="text" class="form-control" name="end_time" id="end_time" autocomplete="off" />
                </div>

                <!-- Status Field -->
                <div class="form-group col-sm-6">
                    <div class="form-check">
                        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
                        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
                        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <!-- {!! Form::submit('Update Scheduled Class', ['class' => 'btn btn-primary']) !!} -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>

@section('scripts')
<script type="text/javascript">
    // Find the edit.blade.php file... for these codes... 

    // $('#class_scheduling-show-modal').on('show.bs.modal', function(event) {
    //     var button = $(event.relatedTarget)
    //     var course_id = button.data('course_id')
    //     var level_id = button.data('level_id')
    //     var shift_id = button.data('shift_id')
    //     var classroom_id = button.data('classroom_id')
    //     var batch_id = button.data('batch_id')
    //     var day_id = button.data('day_id')
    //     var time_id = button.data('time_id')
    //     var start_time = button.data('start_time')
    //     var end_time = button.data('end_time')
    //     var teacher_id = button.data('teacher_id')
    //     var status = button.data('status')

    //     var modal = $(this)

    //     modal.find('.modal-title').text('VIEW SCHEDULED CLASS')
    //     modal.find('.modal-body #course_id').val(course_id)
    //     modal.find('.modal-body #level_id').val(level_id)
    //     modal.find('.modal-body #shift_id').val(shift_id)
    //     modal.find('.modal-body #classroom_id').val(classroom_id)
    //     modal.find('.modal-body #batch_id').val(batch_id)
    //     modal.find('.modal-body #day_id').val(day_id)
    //     modal.find('.modal-body #time_id').val(time_id)
    //     modal.find('.modal-body #start_time').val(start_time)
    //     modal.find('.modal-body #end_time').val(end_time)
    //     modal.find('.modal-body #teacher_id').val(teacher_id)
    //     modal.find('.modal-body #status').val(status)
    // })
</script>
@endsection