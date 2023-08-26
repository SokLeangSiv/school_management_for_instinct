@extends('admin.admin_dashboard')

@section('main')
    <div class="col-md-6 offset-3 grid-margin stretch-card mt-5 ">
        <div class="card">
            <div class="card-body">

                <h6 class="h3 text-dark fw-bolder fs-4 mb-4">Edit Classes</h6>

                <form class="forms-sample" method="post" action="{{ route('update.class',$class->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Class Name</label>
                        <input type="text" class="form-control" name="class" id="exampleInputUsername1"
                            autocomplete="off" placeholder="Username" value="{{ $class->class_name }}">
                    </div>


                    {{-- gender --}}

                    <div class="mb-3">
                        <label for="ageSelect" class="form-label">Status</label>
                        <select class="form-select" name="status" id="ageSelect" >
                            <option selected="" disabled="">Select your Status</option>
                            <option value="active" {{ $class->status == 'active' ? 'selected': '' }}>Active</option>
                            <option value="inactive" {{ $class->status == 'inactive' ? 'selected': '' }}>Inactive</option>

                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>

            </div>
        </div>
    </div>
@endsection
