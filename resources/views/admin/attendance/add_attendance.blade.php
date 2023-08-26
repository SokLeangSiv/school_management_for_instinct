@extends('admin.admin_dashboard')

@section('main')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    
    

    <div class="col-md-6 offset-3 grid-margin stretch-card mt-5 ">
        <div class="card">
            <div class="card-body">

                <h6 class="h3 text-dark fw-bolder fs-4 mb-4">Add Attendance</h6>

                <form id="myForm" class="forms-sample" method="post" action="{{ route('store.attendance') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="ageSelect" class="form-label">Student</label>
                        <select class="form-select" id="attendance" name="attendance" id="ageSelect" required>
                            <option selected="" disabled="">Select your Student</option>
                            @foreach ($student as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('attendance'))
                            <span class="text-danger">{{ $errors->first('attendance') }}</span>

                        @endif
                    </div>


                    {{-- gender --}}

                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" id="exampleInputUsername1"
                            autocomplete="off" placeholder="date" required value="{{ now()->format('Y-m-d') }}">
                    </div>

                    {{-- class --}}



                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    attendance: {
                        required: true,
                    },
                    date: {
                        required: true,
                    },
                  
                   
                  

                },
                messages: {
                    attendance: {
                        required: 'Please Enter Property name',
                    },
                    date: {
                        required: 'Please Select Status',
                    },
                   
                   
                   


                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
