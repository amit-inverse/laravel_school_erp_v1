<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course</th>
                <th>Level</th>
                <th>Shift</th>
                <th>Classroom</th>
                <th>Batch</th>
                <th>Day</th>
                <th>Time</th>
                <th>Teacher</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classSchedulings as $classSchedulings)
            <tr>
                <td>{{ $classSchedulings->course_name }}</td>
                <td>{{ $classSchedulings->level }}</td>
                <td>{{ $classSchedulings->shift }}</td>
                <td>{{ $classSchedulings->classroom_name }}</td>
                <td>{{ $classSchedulings->batch }}</td>
                <td>{{ $classSchedulings->name }}</td>
                <td>{{ $classSchedulings->time }}</td>
                <td>{{ $classSchedulings->first_name }} {{ $classSchedulings->last_name }}</td>
                <td>{{ $classSchedulings->start_time }}</td>
                <td>{{ $classSchedulings->end_time }}</td>
                <td>
                    @if($classSchedulings->status == 1)
                    <p class="text-success">Active</p>
                    @else
                    <p class="text-danger">Inactive</p>
                    @endif
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classSchedulings->class_schedule_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- <a href="{{ route('classSchedulings.show', [$classSchedulings->class_schedule_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a> -->
                        <a data-toggle="modal" data-target="#class_scheduling-show-modal" data-id="{{$classSchedulings->class_schedule_id}}" data-course_id="{{$classSchedulings->course_name}}" data-level_id="{{$classSchedulings->level}}" data-shift_id="{{$classSchedulings->shift}}" data-classroom_id="{{$classSchedulings->classroom_code}} | {{$classSchedulings->classroom_name}}" data-batch_id="{{$classSchedulings->batch}}" data-day_id="{{$classSchedulings->name}}" data-time_id="{{$classSchedulings->time}}" data-start_time="{{$classSchedulings->start_time}}" data-end_time="{{$classSchedulings->end_time}}" data-teacher_id="{{$classSchedulings->teacher_id}}" data-status="{{$classSchedulings->status}}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <!-- <a href="{{ route('classSchedulings.edit', [$classSchedulings->class_schedule_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a> -->
                        <a data-toggle="modal" data-target="#class_scheduling-edit-modal" data-id="{{$classSchedulings->class_schedule_id}}" id="edit" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>