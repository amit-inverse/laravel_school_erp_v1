<div class="modal fade" id="admission-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">New Admission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Roll No Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('roll_no', 'Roll No:') !!}
                    {!! Form::text('roll_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- First Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('first_name', 'First Name:') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Last Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('last_name', 'Last Name:') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Father Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('father_name', 'Father Name:') !!}
                    {!! Form::text('father_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Father Phone Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('father_phone', 'Father Phone:') !!}
                    {!! Form::text('father_phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Mother Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('mother_name', 'Mother Name:') !!}
                    {!! Form::text('mother_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Gender Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('gender', 'Gender:') !!}
                    {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Dob Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('dob', 'Dob:') !!}
                    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
                </div>

                @push('page_scripts')
                <script type="text/javascript">
                    $('#dob').datetimepicker({
                        format: 'YYYY-MM-DD HH:mm:ss',
                        useCurrent: true,
                        sideBySide: true
                    })
                </script>
                @endpush

                <!-- Email Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Phone Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('phone', 'Phone:') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Address Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('address', 'Address:') !!}
                    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Current Address Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('current_address', 'Current Address:') !!}
                    {!! Form::textarea('current_address', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Nationality Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('nationality', 'Nationality:') !!}
                    {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Status Field -->
                <div class="form-group col-sm-6">
                    <div class="form-check">
                        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
                        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
                        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
                    </div>
                </div>


                <!-- Date Registered Field -->
                <input type="hidden" name="date_registered" id="date_registered" value="{{date('Y-m-d')}}" required />

                <!-- User Id Field -->
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}" required />

                <!-- Class Id Field -->
                <div class="form-group col-sm-6">
                    <!-- {!! Form::label('class_id', 'Class Id:') !!} -->
                    <!-- {!! Form::number('class_id', null, ['class' => 'form-control']) !!} -->
                    <select class="form-control" name="class_id" id="class_id">
                        <option value="0" selected="true" disabled="true">Select Class...</option>
                        @foreach($classes as $class)
                        <option value="{{$class->class_id}}">{{$class->class_name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Batch Id Field -->
                <div class="form-group col-sm-6">
                    <select class="form-control" name="batch_id" id="batch_id">
                        <option value="0" selected="true" disabled="true">Select Batch...</option>
                        @foreach($batches as $batch)
                        <option value="{{$batch->batch_id}}">{{$batch->batch}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Image Field -->
                <div class="form-group">
                    <!-- {!! Form::label('image', 'Image:') !!} -->
                    <!-- {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} -->
                    {!! Html::image('images/logo.png', null, ['class' => 'student_image', 'id' => 'show_image', 'style' => 'height: 120px; width: 100px;']) !!}
                    <input type="file" name="image" id="image" accept="image/x-png, image/png, image/jpg, image/jpeg" style="display: none;" />
                    <input type="button" name="browse_file" id="browse_file" value="Choose Image" />
                </div>

                <input type="hidden" name="username" id="username" value="{{ sprintf('%010b', $student_id) }}" required />
                <input type="hidden" name="password" id="password" value="{{ sprintf('%010b', $student_id) }}" required />


            </div>
            <div class="modal-footer">
                {!! Form::submit('New Admission', ['class' => 'btn btn-primary']) !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@push('page_scripts')
<script type="text/javascript">
    $('#browse_file').on('click', function() {
        $('#image').click()
    })
    $('#image').on('change', function(e) {
        showFile(this, '#show_image')
    })

    function showFile(fileInput, img, showName) {
        if (fileInput.files[0]) {
            var reader = new FileReader()
            reader.onload = function(e) {
                $(img).attr('src', e.target.result)
            }
            reader.readAsDataURL(fileInput.files[0])
        }
        $(showName).text(fileInput.files[0].name)
    }
</script>
@endpush