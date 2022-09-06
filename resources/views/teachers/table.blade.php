<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Current Address</th>
                <th>Nationality</th>
                <th>Status</th>
                <th>Date Registered</th>
                <!-- <th>User Id</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teachers)
            <tr>
                <td><img src="{{ asset('images/teachers/'.$teachers->image) }}" height="120px" width="100px" /></td>
                <td>{{ $teachers->first_name }}</td>
                <td>{{ $teachers->last_name }}</td>
                <td>{{ $teachers->gender }}</td>
                <td>{{ $teachers->dob }}</td>
                <td>{{ $teachers->email }}</td>
                <td>{{ $teachers->phone }}</td>
                <td>{{ $teachers->address }}</td>
                <td>{{ $teachers->current_address }}</td>
                <td>{{ $teachers->nationality }}</td>
                <td>{{ $teachers->status }}</td>
                <td>{{ $teachers->date_registered }}</td>
                <!-- <td>{{ $teachers->user_id }}</td> -->
                <td width="120">
                    {!! Form::open(['route' => ['teachers.destroy', $teachers->teacher_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teachers->teacher_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teachers.edit', [$teachers->teacher_id]) }}" class='btn btn-default btn-xs'>
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