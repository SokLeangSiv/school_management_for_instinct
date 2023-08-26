@extends('admin.admin_dashboard')

@section('main')


<a href="{{ route('add.student') }}" class="btn btn-success">Add Student</a>

 <form class="d-flex mt-3" role="search" action="{{ route('get.student') }}">
            <input class="form-control w-50 " type="search" name="search" placeholder="Search" aria-label="Search" value="{{ $search }}">
            <button class="btn btn-outline-success d-flex ms-2" type="submit">Search</button>
</form> 

    <table class="table table-light">

        @if (session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        
        
    @endif

        <thead>
            <tr class="bg-secondary text-light">
                <th>#</th>
                <th>Name</th>
                <th>gender</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student =>$item)

            <tr>
                <td>{{ $student+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->class->class_name }}</td>
                <td>
                    <a href="{{ route('edit.student', $item->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('delete.student', $item->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                
            @endforeach
           
        </tbody>
    </table>


    {{ $students->links() }}


@endsection