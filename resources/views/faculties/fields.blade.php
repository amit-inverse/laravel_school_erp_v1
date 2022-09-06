<div class="modal fade" id="faculty-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Faculty Name Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    {!! Form::label('faculty_name', 'Faculty Name:') !!}
                    {!! Form::text('faculty_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Faculty Code Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    {!! Form::label('faculty_code', 'Faculty Code:') !!}
                    {!! Form::text('faculty_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Faculty Description Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('faculty_description', 'Faculty Description:') !!}
                    {!! Form::textarea('faculty_description', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Faculty Status Field -->
                <div class="form-group col-sm-6">
                    <div class="form-check">
                        {!! Form::hidden('faculty_status', 0, ['class' => 'form-check-input']) !!}
                        {!! Form::checkbox('faculty_status', '1', null, ['class' => 'form-check-input']) !!}
                        {!! Form::label('faculty_status', 'Faculty Status', ['class' => 'form-check-label']) !!}
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                {!! Form::submit('Add Faculty', ['class' => 'btn btn-primary']) !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>