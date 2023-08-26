@extends('admin.admin_dashboard')

@section('main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


<div class="col-md-6 offset-3 grid-margin stretch-card mt-5 ">
    <div class="card">
      <div class="card-body">

                        <h6 class="h3 text-dark fw-bolder fs-4 mb-4">Add Student</h6>

                        <form class="forms-sample" action="{{ route('update.student', $student->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Student Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputUsername1" autocomplete="off" placeholder="Username" value="{{ $student->name }}">
                            </div>


                            {{-- gender --}}

                            <div class="mb-3">
                                <label for="ageSelect" class="form-label">Gender</label>
                                <select class="form-select" name="gender" id="ageSelect">
                                    <option selected="" disabled="">Select your Gender</option>
                                    <option value="Male"{{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                   
                                </select>
                            </div>

                            {{-- class --}}

                            <div class="mb-3">
                                <label for="ageSelect" class="form-label">Class</label>
                                <select class="form-select" name="class" id="ageSelect">
                                    <option selected="" disabled="">Select your Class</option>
                                    @foreach ($class as $classes)
                                    <option value="{{ $classes->id }}" {{ $classes->id == $student->class_id ? "selected" : "" }}>{{ $classes->class_name }}</option>
                                    @endforeach
                                    
                                   
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>

      </div>
    </div>
 </div>


@endsection