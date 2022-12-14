<div class="table-responsive">
    <table class="table" id="levels-table">
        <thead>
            <tr>
                <th>Level</th>
                <th>Course Id</th>
                <th>Level Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($levels as $levels)
            <tr>
                <td>{{ $levels->level }}</td>
                <td>{{ $levels->course_id }}</td>
                <td>{{ $levels->level_description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['levels.destroy', $levels->level_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('levels.show', [$levels->level_id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('levels.edit', [$levels->level_id]) }}" class='btn btn-default btn-xs'>
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