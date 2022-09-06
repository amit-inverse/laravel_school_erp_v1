<div class="modal fade" id="classroom-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create Classroom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Classroom Name Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    {!! Form::label('classroom_name', 'Classroom Name:') !!}
                    {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Classroom Code Field -->
                <!-- <div class="form-group col-sm-6"> -->
                <div class="form-group">
                    {!! Form::label('classroom_code', 'Classroom Code:') !!}
                    {!! Form::text('classroom_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Classroom Description Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('classroom_description', 'Classroom Description:') !!}
                    {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Classroom Status Field -->
                <div class="form-group col-sm-6">
                    <div class="form-check">
                        {!! Form::hidden('classroom_status', 0, ['class' => 'form-check-input']) !!}
                        {!! Form::checkbox('classroom_status', '1', null, ['class' => 'form-check-input']) !!}
                        {!! Form::label('classroom_status', 'Classroom Status', ['class' => 'form-check-label']) !!}
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                {!! Form::submit('Create Classroom', ['class' => 'btn btn-primary']) !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>