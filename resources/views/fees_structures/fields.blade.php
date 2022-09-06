<div class="modal" tabindex="-1" role="dialog" id="fees_structures-add-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Fees Structures</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <!-- Course Id Field -->
                <div class="form-group col-sm-6">
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
                <div class="form-group col-sm-6">
                    <!-- {!! Form::label('level_id', 'Level Id:') !!}
                    {!! Form::number('level_id', null, ['class' => 'form-control']) !!} -->
                    <select class="form-control" name="level_id" id="level_id">
                        <option value="">Select Level...</option>
                        @foreach($levels as $level)
                        <option value="{{$level->level_id}}">{{$level->level}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Admission Fees Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('admission_fees', 'Admission Fees:') !!}
                    {!! Form::number('admission_fees', null, ['class' => 'form-control', 'onKeyup' => 'numbersOnly(event, this)', 'onfocus' => 'this.value = ""']) !!}
                </div>

                <!-- Semester Fees Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('semester_fees', 'Semester Fees:') !!}
                    {!! Form::number('semester_fees', null, ['class' => 'form-control']) !!}
                </div>


            </div>
            <div class="modal-footer">
                {!! Form::submit('Create Fees Structure', ['class' => 'btn btn-primary']) !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('page_scripts')
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

    function numbersOnly(e, field) {
        var val = field.value
        var num = /^([0-9-.]+[\.]?[0-9-.]?[0-9-.]?[0-9-.]+)$/g
        var number = /^([0-9]+[\.]?[0-9]?[0-9]?[0-9]+)/g

        if (num.text(val)) {

        } else {
            val = num.exec(val)
            if (val) {
                field.value = val[0]
            } else {
                field.value = ''
            }
        }
    }
</script>
@endpush