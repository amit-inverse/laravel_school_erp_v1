<div class="modal fade" id="department-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Faculty Id Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('faculty_id', 'Faculty Id:') !!}
                    <!-- {!! Form::number('faculty_id', null, ['class' => 'form-control']) !!}     -->
                    <select class="form-control" name="faculty_id" id="faculty_id">
                        <option value="0" selected="true" disabled="true">Select Faculty...</option>
                        @foreach($faculties as $key => $faculty)
                        <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Department Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('department_name', 'Department Name:') !!}
                    {!! Form::text('department_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Department Code Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('department_code', 'Department Code:') !!}
                    {!! Form::text('department_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Department Description Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('department_description', 'Department Description:') !!}
                    {!! Form::textarea('department_description', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Department Status Field -->
                <div class="form-group col-sm-6">
                    <div class="form-check">
                        {!! Form::hidden('department_status', 0, ['class' => 'form-check-input']) !!}
                        {!! Form::checkbox('department_status', '1', null, ['class' => 'form-check-input']) !!}
                        {!! Form::label('department_status', 'Department Status', ['class' => 'form-check-label']) !!}
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                {!! Form::submit('Add New Department', ['class' => 'btn btn-primary']) !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>