<div class="table-responsive">
    <table class="table" id="academics-table">
        <thead>
            <tr>
                <th>Academic Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($academics as $academics)
            <tr>
                <td>{{ $academics->academic_year }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['academics.destroy', $academics->academic_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('academics.show', [$academics->academic_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('academics.edit', [$academics->academic_id]) }}" class='btn btn-default btn-xs'>
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