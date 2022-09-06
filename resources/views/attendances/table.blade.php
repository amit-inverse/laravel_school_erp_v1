<div class="table-responsive">
    <table class="table" id="attendances-table">
        <thead>
        <tr>
            <th>Student Id</th>
        <th>Class Id</th>
        <th>Subject Id</th>
        <th>Teacher Id</th>
        <th>Attendance Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attendances as $attendances)
            <tr>
                <td>{{ $attendances->student_id }}</td>
            <td>{{ $attendances->class_id }}</td>
            <td>{{ $attendances->subject_id }}</td>
            <td>{{ $attendances->teacher_id }}</td>
            <td>{{ $attendances->attendance_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['attendances.destroy', $attendances->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendances->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('attendances.edit', [$attendances->id]) }}"
                           class='btn btn-default btn-xs'>
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
