@extends('admin.admin_dashboard')

@section('main')

<style>

.hover{
    transition: 0.5s;
}

.hover:hover{
    transform: scale(1.1);
}

</style>

<div class="container">
    <div class="row d-flex flex-row">

        
           <div class="col-3 hover ">
            <a href="{{ route('get.student') }}" class="text-decoration-none">
                <div class="card bg-primary border-top-5 " style="width:14rem;">
                    <img src="{{ asset('img/student.jpg') }}">
                    <h5 class="card-title d-flex justify-content-center pt-3 fw-bold text-light">Student</h5>
                </div>
            </a>
           </div>

           <div class="col-3 offset-1 hover">
            <a href="{{ route('get.class') }}" class="text-decoration-none">
                <div class="card bg-primary  " style="width:14rem; height:12.8rem">
                    <img src="{{ asset('img/class.jpg') }}" style="height:30rem">
                    <h5 class="card-title d-flex justify-content-center pt-3 fw-bold text-light">Class</h5>
                </div>
            </a>
           </div>
           
           <div class="col-3 offset-1 hover">
            <a href="{{ route('get.attendance') }}" class="text-decoration-none">
                <div class="card bg-primary  " style="width:14rem; height:12.8rem">
                    <img src="{{ asset('img/attendance.jpg') }}" style="height:9.5rem">
                    <h5 class="card-title d-flex justify-content-center pt-3 fw-bold text-light">Attendance</h5>
                </div>
            </a>
           </div>

           
       
    </div>
</div>

@endsection