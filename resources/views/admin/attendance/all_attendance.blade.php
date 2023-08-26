@extends('admin.admin_dashboard')

@section('main')

@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

<a href="{{ route('add.attendance') }}" class="btn btn-success">Add Attendance</a>

<form class="d-flex mt-3" role="search" action="{{ route('get.attendance') }}">
    <input class="form-control w-50 " type="date" name="search" placeholder="Search" aria-label="Search" value="{{ $search }}">
    <button class="btn btn-outline-success d-flex ms-2" type="submit">Search</button>
</form> 


<div class="table-responsive table-bordered pt-3">
    <table class="table table-light">
        <thead>
            <tr class="bg-secondary text-light">
                <th>#</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            

            @foreach ($attendance as $attendances =>$item)

            <tr>
                <td>{{ $attendances+1 }}</td>
                <td>{{ $item->student->name }}</td>
                <td>{{ $item->date }}</td>
               
                <td>
                    <a href="{{ route('edit.attendance', $item->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('delete.attendance', $item->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                
            @endforeach
           
        </tbody>
    </table>
</div>

{{ $attendance->links() }}
@endsection