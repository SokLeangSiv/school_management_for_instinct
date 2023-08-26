@extends('admin.admin_dashboard')

@section('main')



<div class="col-md-6 offset-3 grid-margin stretch-card mt-5 ">
    <div class="card">
      <div class="card-body">

                        <h6 class="h3 text-dark fw-bolder fs-4 mb-4">Add Classes</h6>

                        <form class="forms-sample" method="post" action="{{ route('store.class')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label mb-1">Class Name</label>
                                <input type="text" class="form-control" name="class" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                            
                                @if ($errors->has('class'))
                                    <span class="text-danger">{{ $errors->first('class') }}</span>
                                    
                                @endif
                            </div>


                            {{-- gender --}}

                            <div class="mb-3">
                                <label for="ageSelect" class="form-label">Status</label>
                                <select class="form-select mb-1" name="status" id="ageSelect">
                                    <option selected="" disabled="">Select your Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                   
                                </select>

                                @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                    
                                @endif
                            </div>

                           
                            
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </form>

      </div>
    </div>
 </div>


@endsection