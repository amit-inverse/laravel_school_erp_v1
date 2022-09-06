<div class="modal fade" id="admission-show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Admission Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <!-- Roll No Field -->
                <div class="col-sm-12">
                    {!! Form::label('roll_no', 'Roll No:') !!}
                    <input type="text" class="form-control" name="roll_no" id="roll_no">
                </div>

                <!-- First Name Field -->
                <div class="col-sm-12">
                    {!! Form::label('first_name', 'First Name:') !!}
                    <input type="text" class="form-control" name="first_name" id="first_name">
                </div>

                <!-- Last Name Field -->
                <div class="col-sm-12">
                    {!! Form::label('last_name', 'Last Name:') !!}
                    <input type="text" class="form-control" name="last_name" id="last_name">
                </div>

                <!-- Father Name Field -->
                <div class="col-sm-12">
                    {!! Form::label('father_name', 'Father Name:') !!}
                    <input type="text" class="form-control" name="father_name" id="father_name">
                </div>

                <!-- Father Phone Field -->
                <div class="col-sm-12">
                    {!! Form::label('father_phone', 'Father Phone:') !!}
                    <input type="text" class="form-control" name="father_phone" id="father_phone">
                </div>

                <!-- Mother Name Field -->
                <div class="col-sm-12">
                    {!! Form::label('mother_name', 'Mother Name:') !!}
                    <input type="text" class="form-control" name="mother_name" id="mother_name">
                </div>

                <!-- Gender Field -->
                <div class="col-sm-12">
                    {!! Form::label('gender', 'Gender:') !!}
                    <input type="text" class="form-control" name="gender" id="gender">
                </div>

                <!-- Dob Field -->
                <div class="col-sm-12">
                    {!! Form::label('dob', 'Dob:') !!}
                    <input type="text" class="form-control" name="dob" id="dob">
                </div>

                <!-- Email Field -->
                <div class="col-sm-12">
                    {!! Form::label('email', 'Email:') !!}
                    <input type="text" class="form-control" name="email" id="email">
                </div>

                <!-- Phone Field -->
                <div class="col-sm-12">
                    {!! Form::label('phone', 'Phone:') !!}
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>

                <!-- Address Field -->
                <div class="col-sm-12">
                    {!! Form::label('address', 'Address:') !!}
                    <input type="text" class="form-control" name="address" id="address">
                </div>

                <!-- Current Address Field -->
                <div class="col-sm-12">
                    {!! Form::label('current_address', 'Current Address:') !!}
                    <input type="text" class="form-control" name="current_address" id="current_address">
                </div>

                <!-- Nationality Field -->
                <div class="col-sm-12">
                    {!! Form::label('nationality', 'Nationality:') !!}
                    <input type="text" class="form-control" name="nationality" id="nationality">
                </div>

                <!-- Status Field -->
                <div class="col-sm-12">
                    {!! Form::label('status', 'Status:') !!}
                    <input type="text" class="form-control" name="status" id="status">
                </div>

                <!-- Date Registered Field -->
                <div class="col-sm-12">
                    {!! Form::label('date_registered', 'Date Registered:') !!}
                    <input type="text" class="form-control" name="date_registered" id="date_registered">
                </div>

                <!-- User Id Field -->
                <div class="col-sm-12">
                    {!! Form::label('user_id', 'User ID:') !!}
                    <input type="text" class="form-control" name="user_id" id="user_id">
                </div>

                <!-- Class Id Field -->
                <div class="col-sm-12">
                    {!! Form::label('class_id', 'Class ID:') !!}
                    <input type="text" class="form-control" name="class_id" id="class_id">
                </div>

                <!-- Image Field -->
                <div class="col-sm-12">
                    {!! Form::label('image', 'Image:') !!}
                    <input type="text" class="form-control" name="image" id="image">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@section('scripts')
<script type="text/javascript">
    $('#admission-show-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var roll_no = button.data('roll_no')
        var first_name = button.data('first_name')
        var last_name = button.data('last_name')
        var father_name = button.data('father_name')
        var father_phone = button.data('father_phone')
        var mother_name = button.data('mother_name')
        // var gender = button.data('gender')
        // var dob = button.data('dob')
        // var email = button.data('email')
        // var phone = button.data('phone')
        // var address = button.data('address')
        // var current_address = button.data('current_address')
        // var nationality = button.data('nationality')
        // var status = button.data('status')
        // var date_registered = button.data('date_registered')
        // var user_id = button.data('user_id')
        // var class_id = button.data('class_id')
        // var image = button.data('image')

        var modal = $(this)

        modal.find('.modal-title').text('ADMISSION DETAILS')
        modal.find('.modal-body #roll_no').val(roll_no)
        modal.find('.modal-body #first_name').val(first_name)
        modal.find('.modal-body #last_name').val(last_name)
        modal.find('.modal-body #father_name').val(father_name)
        modal.find('.modal-body #father_phone').val(father_phone)
        modal.find('.modal-body #mother_name').val(mother_name)
        // modal.find('.modal-body #gender').val(gender)
        // modal.find('.modal-body #dob').val(dob)
        // modal.find('.modal-body #email').val(email)
        // modal.find('.modal-body #phone').val(phone)
        // modal.find('.modal-body #address').val(address)
        // modal.find('.modal-body #current_address').val(current_address)
        // modal.find('.modal-body #nationality').val(nationality)
        // modal.find('.modal-body #status').val(status)
        // modal.find('.modal-body #date_registered').val(date_registered)
        // modal.find('.modal-body #user_id').val(user_id)
        // modal.find('.modal-body #class_id').val(class_id)
        // modal.find('.modal-body #image').val(image)
    })
</script>
@endsection