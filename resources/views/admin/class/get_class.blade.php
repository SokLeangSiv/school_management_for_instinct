@extends('admin.admin_dashboard')

@section('main')



@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif       

<a href="{{ route('add.class') }}" class="btn btn-success">Add class</a>

<form class="d-flex mt-3" role="search" action="{{ route('get.class') }}">
    <input class="form-control w-50 " type="search" name="search" placeholder="Search" aria-label="Search" value="{{ $search }}">
    <button class="btn btn-outline-success d-flex ms-2" type="submit">Search</button>
</form> 

<div class="table-responsive table-bordered pt-3">
    <table class="table table-light">
        <thead>
            <tr class="bg-secondary text-light">
                <th>#</th>
                <th>CLass Name</th>
                <th>Status</th>
                <th>Create Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($class as $classes =>$item)

            <tr>
                <td>{{ $classes+1 }}</td>
                <td>{{ $item->class_name }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{ route('edit.class', $item->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('delete.class', $item->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach 
            
            
        </tbody>
    </table>
</div>

{{ $class->links() }}
@endsection