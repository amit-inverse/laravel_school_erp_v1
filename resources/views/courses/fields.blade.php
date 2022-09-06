<div class="modal fade" id="course-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Course Name Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    {!! Form::label('course_name', 'Course Name:') !!}
                    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Course Code Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    {!! Form::label('course_code', 'Course Code:') !!}
                    {!! Form::text('course_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Course Description Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('course_description', 'Course Description:') !!}
                    {!! Form::textarea('course_description', null, ['class' => 'form-control']) !!}
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
                {!! Form::submit('Create Course', ['class' => 'btn btn-primary']) !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>