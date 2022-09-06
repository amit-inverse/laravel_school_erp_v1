<div class="modal" id="teacher-add-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
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
                </div>

                <div class="row">
                    <!-- Gender Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('gender', 'Gender:') !!}
                        <!-- {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="female" checked>
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                    </div>

                    <!-- Dob Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('dob', 'DOB:') !!}
                        {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
                    </div>

                    @push('page_scripts')
                    <script type="text/javascript">
                        $('#dob').datetimepicker({
                            format: 'YYYY-MM-DD',
                            useCurrent: true,
                            sideBySide: true
                        })
                    </script>
                    @endpush
                </div>

                <div class="row">
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

                <div class="row">
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
                </div>

                <div class="row">
                    <!-- Date Registered Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('date_registered', 'Date Registered:') !!}
                        {!! Form::text('date_registered', null, ['class' => 'form-control','id'=>'date_registered']) !!}
                    </div>

                    @push('page_scripts')
                    <script type="text/javascript">
                        $('#date_registered').datetimepicker({
                            format: 'YYYY-MM-DD',
                            useCurrent: true,
                            sideBySide: true
                        })
                    </script>
                    @endpush

                    <!-- User Id Field -->
                    <!-- <div class="form-group col-sm-6"> -->
                    <!-- {!! Form::label('user_id', 'User Id:') !!} -->
                    <!-- {!! Form::number('user_id', null, ['class' => 'form-control']) !!} -->
                    <input type="hidden" name="user_id" value="{{Auth::id()}}" />
                    <!-- </div> -->
                </div>

                <!-- Image Field -->
                <div class="form-group">
                    <!-- {!! Form::label('image', 'Image:') !!} -->
                    <!-- {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} -->
                    {!! Html::image('images/logo.png', null, ['class' => 'teacher_image', 'id' => 'show_image', 'style' => 'height: 120px; width: 100px;']) !!}
                    <input type="file" name="image" id="image" accept="image/x-png, image/png, image/jpg, image/jpeg" style="display: none;" />
                    <input type="button" name="browse_file" id="browse_file" value="Choose Image" />
                </div>

            </div>
            <div class="modal-footer">
                {!! Form::submit('Add New Teacher', ['class' => 'btn btn-primary']) !!}
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