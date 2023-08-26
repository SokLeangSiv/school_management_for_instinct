@extends('admin.admin_dashboard')

@section('main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


<div class="col-md-6 offset-3 grid-margin stretch-card mt-5 ">
    <div class="card">
      <div class="card-body">

                        <h6 class="h3 text-dark fw-bolder fs-4 mb-4">Edit Attendance</h6>

                        <form class="forms-sample" action="{{ route('update.attendance', $attendance->id) }}" method="post">

                            @csrf

                            <div class="mb-3">
                                <label for="ageSelect" class="form-label">Student</label>
                                <select class="form-select" name="student" id="ageSelect">
                                    <option selected="" disabled="">Select your Student</option>
                                    @foreach ($student as $students)
                                    <option value="{{ $students->id }}" {{ $students->id == $attendance->stu_id ? 'selected' : '' }}>{{ $students->name }}</option>
                                    @endforeach
                                    
                                   
                                </select>
                            </div>


                            {{-- gender --}}

                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="exampleInputUsername1" autocomplete="off" placeholder="Username" value="{{ $attendance->date }}">
                            </div>

                            {{-- class --}}

                           
                            
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>

      </div>
    </div>
 </div>


@endsection