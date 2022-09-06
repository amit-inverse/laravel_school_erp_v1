<div class="table-responsive">
    <table class="table" id="feesStructures-table">
        <thead>
            <tr>
                <th>Course</th>
                <th>Level</th>
                <th>Admission Fees</th>
                <th>Semester Fees</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feesStructures as $feesStructures)
            <tr>
                <td>{{ $feesStructures->course_name }}</td>
                <td>{{ $feesStructures->level }}</td>
                <td>{{ $feesStructures->admission_fees }}</td>
                <td>{{ $feesStructures->semester_fees }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['feesStructures.destroy', $feesStructures->fees_structures_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('feesStructures.show', [$feesStructures->fees_structures_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('feesStructures.edit', [$feesStructures->fees_structures_id]) }}" class='btn btn-default btn-xs'>
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