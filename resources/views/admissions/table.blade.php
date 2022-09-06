<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Roll No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Batch</th>
                <th>Status</th>
                <th>Date Registered</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admissions as $admissions)
            <tr>
                <td><img src="{{ asset('images/students/'.$admissions->image) }}" height="120px" width="100px" /></td>
                <td>{{ $admissions->roll_no }}</td>
                <td>{{ $admissions->first_name }}</td>
                <td>{{ $admissions->last_name }}</td>
                <td>{{ $admissions->gender }}</td>
                <td>{{ $admissions->batch }}</td>
                <td>{{ $admissions->status }}</td>
                <td>{{ $admissions->date_registered }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['admissions.destroy', $admissions->student_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- <a href="{{ route('admissions.show', [$admissions->student_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a> -->
                        <a data-toggle="modal" data-target="#admission-show-modal" data-student_id="{{$admissions->student_id}}" data-roll_no="{{$admissions->roll_no}}" data-first_name="{{$admissions->first_name}}" data-last_name="{{$admissions->last_name}}" data-father_name="{{$admissions->father_name}}" data-father_phone="{{$admissions->father_phone}}" data-mother_name="{{$admissions->mother_name}}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admissions.edit', [$admissions->student_id]) }}" class='btn btn-default btn-xs'>
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