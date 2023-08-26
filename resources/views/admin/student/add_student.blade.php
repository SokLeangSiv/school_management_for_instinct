@extends('admin.admin_dashboard')

@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   

    <div class="col-md-6 offset-3 grid-margin stretch-card mt-5 ">
        <div class="card">
            <div class="card-body">

                <h6 class="h3 text-dark fw-bolder fs-4 mb-4">Add Student</h6>

                <form id="validation" class="forms-sample" method="post" action="{{ route('store.student') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputUsername1" class="form-label">Student Name</label>
                        <input type="text" class="form-control mb-1" id="name" name="name" autocomplete="off"
                            placeholder="Username" >

                          @if ($errors->has('name'))
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                              
                          @endif  
                    </div>


                    {{-- gender --}}

                    <div class="form-group mb-3">
                        <label for="ageSelect" class="form-label">Gender</label>
                        <select class="form-select mb-1" id="gender" name="gender" >
                            <option selected="" disabled="">Select your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            
                        </select>

                        @if ($errors->has('gender'))

                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                            
                        @endif
                    </div>

                    {{-- class --}}

                    <div class="form-group mb-3">
                        <label for="ageSelect" class="form-label">Class</label>
                        <select class="form-select mb-1" id="class" name="class" >
                            <option selected="" disabled="">Select your Class</option>
                            @foreach ($class as $classes => $item)
                                <option value="{{ $item->id }}">{{ $item->class_name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('class'))

                        <span class="text-danger">{{ $errors->first('class') }}</span>
                            
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary" id="sucess">Cancel</button>
                </form>

            </div>
        </div>
    </div>
    
@endsection
