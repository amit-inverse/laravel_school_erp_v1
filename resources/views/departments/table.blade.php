<div class="table-responsive">
    <table class="table" id="departments-table">
        <thead>
            <tr>
                <th>Faculty</th>
                <th>Department Name</th>
                <th>Department Code</th>
                <th>Department Description</th>
                <th>Department Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $departments)
            <tr>
                <td>{{ $departments->faculty_name }}</td>
                <td>{{ $departments->department_name }}</td>
                <td>{{ $departments->department_code }}</td>
                <td>{{ $departments->department_description }}</td>
                <td>{{ $departments->department_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['departments.destroy', $departments->department_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departments.show', [$departments->department_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('departments.edit', [$departments->department_id]) }}" class='btn btn-default btn-xs'>
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