<div class="modal fade" id="class_scheduling-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Scheduled Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('classSchedulings.update', 'class_schedule_id')}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="class_schedule_id" id="class_schedule_id" />

                <div class="modal-body">

                    <!-- Course Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <div class="form-group">
                        <!-- {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!} -->
                        <select class="form-control" name="course_id" id="course_id">
                            <option value="">Select Course...</option>
                            @foreach($courses as $course)
                            <option value="{{$course->course_id}}">{{$course->course_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Level Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <div class="form-group">
                        <!-- {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::number('level_id', null, ['class' => 'form-control']) !!} -->
                        <select class="form-control" name="level_id" id="level_id">
                            <option value="">Select Level...</option>
                            <!-- @foreach($levels as $level)
                        <option value="{{$level->level_id}}">{{$level->level}}</option>
                        @endforeach -->
                        </select>
                    </div>

                    <!-- Shift Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <div class="form-group">
                        <!-- {!! Form::label('shift_id', 'Shift Id:') !!}
    {!! Form::number('shift_id', null, ['class' => 'form-control']) !!} -->
                        <select class="form-control" name="shift_id" id="shift_id">
                            <option value="">Select Shift...</option>
                            @foreach($shifts as $shift)
                            <option value="{{$shift->shift_id}}">{{$shift->shift}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Classroom Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <div class="form-group">
                        <!-- {!! Form::label('classroom_id', 'Classroom Id:') !!}
    {!! Form::number('classroom_id', null, ['class' => 'form-control']) !!} -->
                        <select class="form-control" name="classroom_id" id="classroom_id">
                            <option value="">Select Classroom...</option>
                            @foreach($classrooms as $classroom)
                            <option value="{{$classroom->classroom_id}}">{{$classroom->classroom_code}} | {{$classroom->classroom_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Batch Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <div class="form-group">
                        <!-- {!! Form::label('batch_id', 'Batch Id:') !!}
    {!! Form::number('batch_id', null, ['class' => 'form-control']) !!} -->
                        <select class="form-control" name="batch_id" id="batch_id">
                            <option value="">Select Batch...</option>
                            @foreach($batches as $batch)
                            <option value="{{$batch->batch_id}}">{{$batch->batch}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Day Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <div class="form-group">
                        <!-- {!! Form::label('day_id', 'Day Id:') !!}
    {!! Form::number('day_id', null, ['class' => 'form-control']) !!} -->
                        <select class="form-control" name="day_id" id="day_id">
                            <option value="">Select Day...</option>
                            @foreach($days as $day)
                            <option value="{{$day->day_id}}">{{$day->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Time Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <div class="form-group">
                        <!-- {!! Form::label('time_id', 'Time Id:') !!}
    {!! Form::number('time_id', null, ['class' => 'form-control']) !!} -->
                        <select class="form-control" name="time_id" id="time_id">
                            <option value="">Select Time...</option>
                            @foreach($times as $time)
                            <option value="{{$time->time_id}}">{{$time->time}}</option>
                            @endforeach
                        </select>
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
                    {!! Form::submit('Update Scheduled Class', ['class' => 'btn btn-primary']) !!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('scripts')
<script type="text/javascript">
    $('#course_id').on('change', function(e) {
        console.log(e)
        var course_id = e.target.value;
        $('#level_id').empty();
        $.get('dynamicLevel?course_id=' + course_id, function(data) {
            console.log(data)
            $.each(data, function(index, level) {
                $('#level_id').append('<option value="' + level.level_id + '">' + level.level + '</option>')
            })
        })
    })

    $('#start_time').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: false
    });

    $('#end_time').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: false
    })

    // $('#start_time').datetimepicker({
    //     format: 'DD/MM/YYYY',
    //     useCurrent: false
    // });

    // $('#end_time').datetimepicker({
    //     format: 'DD/MM/YYYY',
    //     useCurrent: false
    // })

    $(document).on('click', '#edit', function(event) {
        var id = $(this).data('id');
        // alert(id);

        $.get("{{route('class_scheduling_edit')}}", {
            id: id
        }, function(data) {
            $('#course_id').val(data.course_id);
            $('#level_id').val(data.level_id);
            $('#shift_id').val(data.shift_id);
            $('#classroom_id').val(data.classroom_id);
            $('#batch_id').val(data.batch_id);
            $('#day_id').val(data.day_id);
            $('#time_id').val(data.time_id);
            $('#start_time').val(data.start_time);
            $('#end_time').val(data.end_time);
            $('#teacher_id').val(data.teacher_id);
            $('#status').val(data.status);
            $('#class_schedule_id').val(data.class_schedule_id);
            console.log(data)
        })
    })

    $('#class_scheduling-show-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var course_id = button.data('course_id')
        var level_id = button.data('level_id')
        var shift_id = button.data('shift_id')
        var classroom_id = button.data('classroom_id')
        var batch_id = button.data('batch_id')
        var day_id = button.data('day_id')
        var time_id = button.data('time_id')
        var start_time = button.data('start_time')
        var end_time = button.data('end_time')
        var teacher_id = button.data('teacher_id')
        var status = button.data('status')

        var modal = $(this)

        modal.find('.modal-title').text('VIEW SCHEDULED CLASS')
        modal.find('.modal-body #course_id').val(course_id)
        modal.find('.modal-body #level_id').val(level_id)
        modal.find('.modal-body #shift_id').val(shift_id)
        modal.find('.modal-body #classroom_id').val(classroom_id)
        modal.find('.modal-body #batch_id').val(batch_id)
        modal.find('.modal-body #day_id').val(day_id)
        modal.find('.modal-body #time_id').val(time_id)
        modal.find('.modal-body #start_time').val(start_time)
        modal.find('.modal-body #end_time').val(end_time)
        modal.find('.modal-body #teacher_id').val(teacher_id)
        modal.find('.modal-body #status').val(status)
    })
</script>
@endsection